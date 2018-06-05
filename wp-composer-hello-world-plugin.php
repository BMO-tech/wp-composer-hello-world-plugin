<?php
/**
 * Plugin Name:     WP Composer Hello World
 * Description:     Test Hello World Plugin
 * Author:          BMO
 * Author URI:      https://skypres.io
 * Version:         0.1.0
 */

function append_hello_world_to_title($title, $id)
{
    $message = 'Hello from the Sky!';
    return "$title - $message";
}
add_filter('the_title', 'append_hello_world_to_title', 10, 2);
