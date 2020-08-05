<?php
/**
 * Child-Theme functions and definitions
 */

function pathwell_child_scripts() {
    wp_enqueue_style( 'pathwell-parent-style', get_template_directory_uri(). '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'pathwell_child_scripts' );

?>
