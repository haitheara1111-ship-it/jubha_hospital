<?php
/*
Plugin Name: Appointment Doctor
Plugin URI: http://example.com/appointment-doctor
Description: A plugin to book doctors.
Version: 1.0
Author: Fi Lex
*/ 

/**
 * Register admin Menu & Submenus
 */

add_action('admin_menu', 'Appointment_admin_menu');

function Appointment_admin_menu() {
    // 1. Main Top-Level Menu
    add_menu_page(
        'Appointment',       
        'Appointment',       
        'manage_options',    
        'book-doctor',       
        'book_doctor_page',  
        'dashicons-calendar-alt', // Changed to a calendar icon for "Appointments"
        5                   
    );

    // 2. Overwrite the 1st Submenu Item (This adds the icon you're missing)
    add_submenu_page(
        'book-doctor',               
        'Book Doctor Settings',      
        '<span class="dashicons dashicons-admin-generic"></span> Settings', // Icon + Text
        'manage_options',            
        'book-doctor',               // Matches the parent slug to overwrite the first item
        'book_doctor_page'           
    );

    // 3. Submenu: Appointments
    add_submenu_page(
        'book-doctor',               
        'Appointments',              
        '<span class="dashicons dashicons-calendar-alt"></span> Appointments', 
        'manage_options',            
        'book-doctor-appointments',  
        'book_doctor_appointments_page' 
    );
    
    // 4. Submenu: Doctors
    add_submenu_page(
        'book-doctor',               
        'Doctors',              
        '<span class="dashicons dashicons-businessperson"></span> Doctors', 
        'manage_options',            
        'book-doctor-list', 
        'book_doctor_list_page' 
    );

}

// --- Callback Functions ---

function book_doctor_page() {

    echo '<div class="wrap"><h1><span class=""></span> Book Doctor Settings</h1></div>';
}

function book_doctor_appointments_page() {
    echo '<div class="wrap"><h1><span class=""></span> Doctor Appointments</h1><p>Manage your appointments here.</p></div>';
}

function book_doctor_list_page() {
    echo '<div class="wrap"><h1><span class=""></span> Doctor List</h1><p>View and manage all registered doctors.</p></div>';
}
