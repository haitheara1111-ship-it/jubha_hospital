<?php
/*
Plugin Name: Appointment Doctor
Plugin URI: http://example.com/appointment-doctor
Description: A plugin to book doctors.
Version: 1.0
Author: Fi Lex
*/ 

add_action('admin_menu', 'appointment_admin_menu');

function appointment_admin_menu() {

    // Main menu
    add_menu_page(
        'Appointments',
        'Appointments',
        'manage_options',
        'book-doctor',
        'book_doctor_page',
        'dashicons-calendar-alt',
        5
    );

    // Submenu: Patient
    add_submenu_page(
        'book-doctor',
        'Patient',
        'Patient',
        'manage_options',
        'book-doctor-patient',
        'book_patient_page'
    );

    // Submenu: Doctors
    add_submenu_page(
        'book-doctor',
        'Doctors',
        'Doctors',
        'manage_options',
        'book-doctor-list',
        'book_doctor_list_page'
    );

    // Submenu: Settings (overwrite first submenu)
    add_submenu_page(
        'book-doctor',
        'Book Doctor Settings',
        'Settings',
        'manage_options',
        'book-doctor',
        'book_doctor_page'
    );
}

// --- Callback Functions ---

function book_doctor_page() {
    echo '<div class="wrap"><h1>Book Doctor Settings</h1></div>';
}

function book_patient_page() {
    echo '<div class="wrap"><h1>Patient Settings</h1></div>';
}

function book_doctor_list_page() {
    echo '<div class="wrap"><h1>Doctor List</h1><p>View and manage all registered doctors.</p></div>';
}
