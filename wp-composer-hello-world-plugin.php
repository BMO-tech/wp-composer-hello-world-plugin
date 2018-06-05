<?php
/**
 * Plugin Name:     WP Composer Hello World
 * Description:     Test Hello World Plugin
 * Author:          BMO
 * Author URI:      https://skypres.io
 * Version:         0.1.0
 */

function spwpc_init()
{
    $spwpc = new SPWPC;
    $spwpc->hooks();
}
add_action('plugins_loaded', 'spwpc_init');
