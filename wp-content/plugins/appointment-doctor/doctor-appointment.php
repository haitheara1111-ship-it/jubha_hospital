<?php
/*
Plugin Name: Book Appointment
Description: Hospital appointment booking system
Version: 1.0
*/

if (!defined('ABSPATH')) exit;

/* ===============================
CREATE DATABASE TABLES
=============================== */
register_activation_hook(__FILE__, 'ba_create_tables');
function ba_create_tables() {
    global $wpdb;
    $appt_table = $wpdb->prefix . 'appointments';
    $doc_table  = $wpdb->prefix . 'doctors';
    $charset = $wpdb->get_charset_collate();

    $sql1 = "CREATE TABLE $appt_table (
        id BIGINT AUTO_INCREMENT PRIMARY KEY,
        doctor VARCHAR(100),
        first_name VARCHAR(100),
        last_name VARCHAR(100),
        sex VARCHAR(10),
        dob DATE,
        phone VARCHAR(30),
        email VARCHAR(100),
        reason TEXT,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    ) $charset;";

    $sql2 = "CREATE TABLE IF NOT EXISTS $doc_table (
        id BIGINT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100)
    ) $charset;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql1);
    dbDelta($sql2);
}

/* ===============================
ADMIN MENU
=============================== */
add_action('admin_menu', 'ba_admin_menu');
function ba_admin_menu() {
    add_menu_page(
        'Appointments',
        'Appointments',
        'manage_options',
        'ba-appointments',
        'ba_admin_page',
        'dashicons-calendar-alt',
        25
    );

    // Doctor submenu
    add_submenu_page(
        'ba-appointments',
        'Doctors',
        'Doctors',
        'manage_options',
        'ba-doctors',
        'ba_doctor_page'
    );

    // Manage Appointments submenu
    add_submenu_page(
        'ba-appointments',
        'Manage Appointments',
        'Manage Appointments',
        'manage_options',
        'ba-manage-appointments',
        'ba_manage_appointments_page'
    );
}

/* ===============================
APPOINTMENTS ADMIN PAGE
=============================== */
function ba_admin_page() {
    global $wpdb;
    $table = $wpdb->prefix . 'appointments';
    $rows  = $wpdb->get_results("SELECT * FROM $table ORDER BY created_at DESC");
    ?>
    <div class="wrap">
        <h1>Appointments</h1>
        <table class="widefat striped">
            <thead>
                <tr>
                    <th>Doctor</th>
                    <th>Name</th>
                    <th>Sex</th>
                    <th>DOB</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Reason</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($rows): foreach ($rows as $r): ?>
                <tr>
                    <td><?php echo esc_html($r->doctor); ?></td>
                    <td><?php echo esc_html($r->first_name . ' ' . $r->last_name); ?></td>
                    <td><?php echo esc_html($r->sex); ?></td>
                    <td><?php echo esc_html($r->dob); ?></td>
                    <td><?php echo esc_html($r->phone); ?></td>
                    <td><?php echo esc_html($r->email); ?></td>
                    <td><?php echo esc_html($r->reason); ?></td>
                    <td><?php echo esc_html($r->created_at); ?></td>
                </tr>
                <?php endforeach; else: ?>
                <tr><td colspan="8">No appointments found.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php
}

/* ===============================
DOCTOR ADMIN PAGE
=============================== */
function ba_doctor_page() {
    global $wpdb;
    $appt_table = $wpdb->prefix . 'appointments';
    $doc_table  = $wpdb->prefix . 'doctors';

    // Handle adding doctor
    if (isset($_POST['add_doctor'])) {
        $name = sanitize_text_field($_POST['doctor_name']);
        if ($name) {
            $wpdb->insert($doc_table, ['name' => $name]);
            echo '<div class="updated notice"><p>Doctor added successfully!</p></div>';
        }
    }

    // Get doctors and patients
    $doctors      = $wpdb->get_results("SELECT * FROM $doc_table ORDER BY name ASC");
    $appointments = $wpdb->get_results("SELECT * FROM $appt_table ORDER BY created_at DESC");
    ?>
    <div class="wrap">
        <h1>Assign Doctor to Patients</h1>

        <h2>Add New Doctor</h2>
        <form method="post">
            <input type="text" name="doctor_name" placeholder="Doctor Name" required>
            <button type="submit" name="add_doctor" class="button button-primary">Add Doctor</button>
        </form>

        <h2>Patients</h2>
        <table class="widefat striped">
            <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>Current Doctor</th>
                    <th>Assign/Change Doctor</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($appointments): foreach ($appointments as $a): ?>
                <tr data-id="<?php echo esc_attr($a->id); ?>">
                    <td><?php echo esc_html($a->first_name . ' ' . $a->last_name); ?></td>
                    <td><?php echo esc_html($a->doctor ?: 'Not Assigned'); ?></td>
                    <td>
                        <select class="ba-doctor-select">
                            <option value="">Select Doctor</option>
                            <?php foreach ($doctors as $d): ?>
                                <option value="<?php echo esc_attr($d->id); ?>" <?php selected($a->doctor, $d->name); ?>>
                                    <?php echo esc_html($d->name); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <button class="button button-primary ba-assign-btn">Assign</button>
                    </td>
                </tr>
                <?php endforeach; else: ?>
                <tr><td colspan="3">No patients found.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script>
    jQuery(document).ready(function($){
        $('.ba-assign-btn').click(function(e){
            e.preventDefault();
            var row = $(this).closest('tr');
            var appointment_id = row.data('id');
            var doctor_id = row.find('.ba-doctor-select').val();
            if(!doctor_id){ alert('Select a doctor'); return; }

            $.post('<?php echo admin_url("admin-ajax.php"); ?>', {
                action: 'ba_assign_doctor',
                appointment_id: appointment_id,
                doctor_id: doctor_id
            }, function(res){
                if(res.success){
                    row.find('td:nth-child(2)').text(row.find('.ba-doctor-select option:selected').text());
                } else {
                    alert('Error assigning doctor');
                }
            });
        });
    });
    </script>
    <?php
}

/* ===============================
AJAX ASSIGN DOCTOR
=============================== */
add_action('wp_ajax_ba_assign_doctor', function() {
    global $wpdb;
    $appt_table = $wpdb->prefix . 'appointments';
    $doc_table  = $wpdb->prefix . 'doctors';

    $appointment_id = intval($_POST['appointment_id']);
    $doctor_id      = intval($_POST['doctor_id']);

    $doctor_name = $wpdb->get_var($wpdb->prepare("SELECT name FROM $doc_table WHERE id=%d", $doctor_id));

    if ($doctor_name) {
        $wpdb->update($appt_table, ['doctor' => $doctor_name], ['id' => $appointment_id]);
        wp_send_json_success();
    } else {
        wp_send_json_error('Doctor not found');
    }
});

/* ===============================
MANAGE APPOINTMENTS PAGE
=============================== */
function ba_manage_appointments_page() {
    global $wpdb;
    $table = $wpdb->prefix . 'appointments';
    $rows  = $wpdb->get_results("SELECT * FROM $table ORDER BY created_at DESC");
    ?>
    <div class="wrap">
        <h1>Manage Appointments</h1>
        <table class="widefat striped">
            <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>Doctor</th>
                    <th>Sex</th>
                    <th>DOB</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Reason</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($rows): foreach ($rows as $r): ?>
                <tr data-id="<?php echo esc_attr($r->id); ?>">
                    <td><?php echo esc_html($r->first_name . ' ' . $r->last_name); ?></td>
                    <td><?php echo esc_html($r->doctor); ?></td>
                    <td><?php echo esc_html($r->sex); ?></td>
                    <td><?php echo esc_html($r->dob); ?></td>
                    <td><?php echo esc_html($r->phone); ?></td>
                    <td><?php echo esc_html($r->email); ?></td>
                    <td><?php echo esc_html($r->reason); ?></td>
                    <td><?php echo esc_html($r->created_at); ?></td>
                    <td>
                        <button class="button button-danger ba-delete-btn">Delete</button>
                    </td>
                </tr>
                <?php endforeach; else: ?>
                <tr><td colspan="9">No appointments found.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script>
    jQuery(document).ready(function($){
        $('.ba-delete-btn').click(function(e){
            e.preventDefault();
            if(!confirm('Delete this appointment?')) return;

            var row = $(this).closest('tr');
            var id = row.data('id');

            $.post('<?php echo admin_url("admin-ajax.php"); ?>', {
                action: 'ba_delete_appointment',
                id: id
            }, function(res){
                if(res.success) row.fadeOut(300, function(){ $(this).remove(); });
                else alert('Error deleting appointment');
            });
        });
    });
    </script>
    <?php
}

/* ===============================
AJAX DELETE APPOINTMENT
=============================== */
add_action('wp_ajax_ba_delete_appointment', function() {
    global $wpdb;
    $table = $wpdb->prefix . 'appointments';
    $id    = intval($_POST['id']);
    $deleted = $wpdb->delete($table, ['id' => $id]);
    if($deleted !== false) wp_send_json_success();
    else wp_send_json_error();
});

/* ===============================
SHORTCODE FORM
=============================== */
add_shortcode('book_appointment', 'ba_form');
function ba_form() {
    ob_start(); ?>
    <form id="ba-form">
        <input name="doctor" placeholder="Doctor" required>
        <input name="first_name" placeholder="First name" required>
        <input name="last_name" placeholder="Last name" required>

        <select name="sex" required>
            <option value="">Sex</option>
            <option>Male</option>
            <option>Female</option>
        </select>

        <input type="date" name="dob" required>
        <input name="phone" placeholder="Phone" required>
        <input type="email" name="email" placeholder="Email">

        <textarea name="reason" placeholder="Reason" required></textarea>

        <button type="submit">Submit</button>
    </form>

    <script>
    document.getElementById('ba-form').addEventListener('submit', function(e){
        e.preventDefault();
        let data = new FormData(this);
        data.append('action','submit_appointment');

        fetch('<?php echo admin_url("admin-ajax.php"); ?>',{
            method:'POST',
            body:data
        }).then(r=>r.json()).then(()=>{
            alert('Appointment saved!');
            this.reset();
        });
    });
    </script>
    <?php
    return ob_get_clean();
}

/* ===============================
AJAX SUBMIT APPOINTMENT
=============================== */
add_action('wp_ajax_submit_appointment', 'ba_submit');
add_action('wp_ajax_nopriv_submit_appointment', 'ba_submit');
function ba_submit() {
    global $wpdb;
    $table = $wpdb->prefix . 'appointments';
    $wpdb->insert($table, [
        'doctor'     => sanitize_text_field($_POST['doctor']),
        'first_name' => sanitize_text_field($_POST['first_name']),
        'last_name'  => sanitize_text_field($_POST['last_name']),
        'sex'        => sanitize_text_field($_POST['sex']),
        'dob'        => sanitize_text_field($_POST['dob']),
        'phone'      => sanitize_text_field($_POST['phone']),
        'email'      => sanitize_email($_POST['email']),
        'reason'     => sanitize_textarea_field($_POST['reason']),
    ]);
    wp_send_json_success();
}
