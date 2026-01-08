<?php
/*
plugin name: Show Text
decription: used by ob_end_clean
version: 1.0.0
author: Your Name
*/


if (!defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * SHORTCODE: Function
 * 
 */
function show_text_shortcode() {
    return '<div> Show_Text</div>';
}

add_shortcode('show_text', 'show_text_shortcode');