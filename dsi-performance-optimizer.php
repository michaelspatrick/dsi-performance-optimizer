<?php
/*
Plugin Name: Performance Optimizer
Description: Basic test plugin to verify activation.
Version: 1.0
Author: Michael Patrick
Requires Plugins: woocommerce
*/

// Disable Woo Order Splitter Async Queue
add_filter('woocommerce_order_splitter_queue_async', '__return_false');

// Disable Jetpack Scan and related bloat modules
add_filter('jetpack_get_available_modules', function($modules) {
    return is_array($modules) ? array_diff($modules, ['scan', 'protect', 'photon', 'related-posts']) : $modules;
});
add_filter('jetpack_get_default_modules', function($modules) {
    return is_array($modules) ? array_diff($modules, ['scan', 'protect', 'photon', 'related-posts']) : $modules;
});

// Deactivate Jetpack Scan if it's active
add_action('plugins_loaded', function() {
    if (class_exists('Jetpack') && method_exists('Jetpack', 'is_module_active')) {
        if (Jetpack::is_module_active('scan')) {
            Jetpack::deactivate_module('scan');
            error_log("Performance Optimizer: Jetpack scan module deactivated.");
        }
    }
});

// Optional: disable WP-Cron (uncomment if you're using real cron)
if (!defined('DISABLE_WP_CRON')) define('DISABLE_WP_CRON', true);

// Optional: Reduce Heartbeat API load
add_filter('heartbeat_settings', function($settings) {
    $settings['interval'] = 60; // Reduce frequency (default is 15)
    return $settings;
});
