<?php
function mytheme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'primary' => 'Primary Menu',
    ]);
}
add_action('after_setup_theme', 'mytheme_setup');

function mytheme_assets() {
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_assets');

function mytheme_register_products() {
    register_post_type('product', [
        'labels' => ['name'=>'Products','singular_name'=>'Product'],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-cart',
        'supports' => ['title','editor','thumbnail']
    ]);
}
add_action('init','mytheme_register_products');

function mytheme_register_product_category() {
    register_taxonomy('product_category','product',[
        'label'=>'Product Categories',
        'hierarchical'=>true
    ]);
}
add_action('init','mytheme_register_product_category');

function mytheme_product_meta() {
    add_meta_box('product_details','Product Details','mytheme_product_meta_callback','product');
}
add_action('add_meta_boxes','mytheme_product_meta');

function mytheme_product_meta_callback($post){
    $price=get_post_meta($post->ID,'_price',true);
    $stock=get_post_meta($post->ID,'_stock',true);
    ?>
    <label>Price ($):</label><br>
    <input type="number" name="price" value="<?php echo esc_attr($price); ?>"><br><br>
    <label>Stock:</label><br>
    <input type="number" name="stock" value="<?php echo esc_attr($stock); ?>"><br>
    <?php
}

function mytheme_save_product_meta($post_id){
    if(isset($_POST['price'])) update_post_meta($post_id,'_price',$_POST['price']);
    if(isset($_POST['stock'])) update_post_meta($post_id,'_stock',$_POST['stock']);
}
add_action('save_post','mytheme_save_product_meta');
function load_appointments_scripts() {
    wp_enqueue_script(
        'appointments-js',
        get_template_directory_uri() . '/js/appointments.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'load_appointments_scripts');
// Shortcode to display appointment data
function jubha_appointment_shortcode() {
    ob_start();

    $args = array(
        'post_type' => 'doctor_appointment',
        'posts_per_page' => -1,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        echo '<div class="appointments-list">';
        while ($query->have_posts()) {
            $query->the_post();

            $email = get_post_meta(get_the_ID(), 'patient_email', true);

            echo '<div class="appointment-item">';
            echo '<strong>Name:</strong> ' . get_the_title() . '<br>';
            echo '<strong>Email:</strong> ' . esc_html($email) . '<br>';
            echo '</div><hr>';
        }
        echo '</div>';
    } else {
        echo 'No appointments found.';
    }

    wp_reset_postdata();
    return ob_get_clean();
}
add_shortcode('jubha_appointments', 'jubha_appointment_shortcode');

?>