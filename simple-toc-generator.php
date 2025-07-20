<?php
/**
 * Plugin Name: Simple TOC Generator
 * Description: Automatically generates a collapsible TOC from headings.
 * Version: 1.1
 * Author: Your Name
 */

defined('ABSPATH') || exit;

// Enqueue assets
function toc_enqueue_assets() {
    wp_enqueue_style('toc-style', plugin_dir_url(__FILE__) . 'css/style.css');
    wp_enqueue_script('toc-toggle', plugin_dir_url(__FILE__) . 'js/toc-toggle.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'toc_enqueue_assets');

// Include logic
require_once plugin_dir_path(__FILE__) . 'includes/toc-functions.php';
