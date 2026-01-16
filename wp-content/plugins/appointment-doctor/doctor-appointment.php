<?php
/*
Plugin Name: Appointment Doctor
Plugin URI: http://example.com/appointment-doctor
Description: A plugin to book doctors.
Version: 1.0
Author: Fi Lex
*/ 


/**
 * Register admin Menu & Submenu
 */
add_action('admin_menu', 'book_doctor_admin_menu');
function book_doctor_admin_menu() {

    // Main menu
    add_menu_page(
        'Book Doctor',       // Page title
        'Book Doctor',        // Menu title
        'manage_options',   // Capability
        'book-doctor',      // Menu slug
        'book_doctor_page',  // Callback function
        5) ;                  // Icon 
                            // Position
}
function book_doctor_page() {
    echo '<div class="wrap"><h1>Book Doctor Settings</h1></div>';
}
