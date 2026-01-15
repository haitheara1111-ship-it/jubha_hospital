<?php
/**
 * Plugin Name: Appointment Doctor
 * Description: Doctor appointment booking system.
 * Version: 1.0
 * Author: Rockzy
 * Text Domain: appointment-doctor
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Includes
require plugin_dir_path( __FILE__ ) . 'includes/class-appointment-doctor-posttype.php';
require plugin_dir_path( __FILE__ ) . 'includes/class-appointment-doctor-form.php';

// Init
add_action( 'init', [ 'Appointment_Doctor_PostType', 'register_post_type' ] );
add_action( 'wp_enqueue_scripts', [ 'Appointment_Doctor_Form', 'enqueue_scripts' ] );
add_shortcode( 'appointment_doctor_form', [ 'Appointment_Doctor_Form', 'display_form' ] );

