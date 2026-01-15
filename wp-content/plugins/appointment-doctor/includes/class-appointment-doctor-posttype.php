<?php
class Appointment_Doctor_PostType {

    public static function register_post_type() {
        register_post_type( 'doctor_appointment', [
            'labels' => [
                'name' => __( 'Appointments', 'appointment-doctor' ),
                'singular_name' => __( 'Appointment', 'appointment-doctor' ),
            ],
            'public' => false,
            'show_ui' => true,
            'supports' => [ 'title', 'custom-fields' ],
        ]);
    }
}
