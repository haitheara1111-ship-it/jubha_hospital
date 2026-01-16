<?php
/*
Plugin Name: Book Doctor
Description: A plugin to book doctors.
Version: 1.0
Author: Fi Lex
*/ 

/**
 * 1. DATABASE SETUP
 */
register_activation_hook(__FILE__, 'book_doctor_create_db');
function book_doctor_create_db() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'doctors';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(100) NOT NULL,
        specialty varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        joined_date datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

/**
 * 2. MENU REGISTRATION
 */
add_action('admin_menu', 'book_doctor_admin_menu');
function book_doctor_admin_menu() {

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