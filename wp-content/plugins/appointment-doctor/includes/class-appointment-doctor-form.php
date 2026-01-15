<?php
class Appointment_Doctor_Form {

    public static function enqueue_scripts() {
        wp_enqueue_style( 'appointment-doctor-css', plugins_url( '../assets/style.css', __FILE__ ) );
    }

    public static function display_form() {
        if ( $_POST && isset( $_POST['appointment_doctor_submit'] ) ) {
            self::save_appointment();
        }

        ob_start();
        ?>
        <form method="post" class="appointment-doctor-form">
            <p><label>Name: <input type="text" name="patient_name" required></label></p>
            <p><label>Email: <input type="email" name="patient_email" required></label></p>
            <p><label>Date: <input type="date" name="appointment_date" required></label></p>
            <p><label>Time: <input type="time" name="appointment_time" required></label></p>
            <p><input type="submit" name="appointment_doctor_submit" value="Book Appointment"></p>
        </form>
        <?php
        return ob_get_clean();
    }

    private static function save_appointment() {
        $post_id = wp_insert_post([
            'post_title' => sanitize_text_field($_POST['patient_name']),
            'post_type' => 'doctor_appointment',
            'post_status' => 'publish',
        ]);

        if ( $post_id ) {
            update_post_meta( $post_id, 'patient_email', sanitize_email($_POST['patient_email']) );
            update_post_meta( $post_id, 'appointment_date', sanitize_text_field($_POST['appointment_date']) );
            update_post_meta( $post_id, 'appointment_time', sanitize_text_field($_POST['appointment_time']) );
            echo '<div class="appointment-success">Appointment booked!</div>';
        }
    }
}
