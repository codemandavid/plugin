<?php
 
/**
 
 * @package plugin
 
 */
 
/*
 
Plugin Name: Notification Dsiabler
 
Plugin URI: https://nil/
 
Description: helper plugin that will prevent several warnings being triggered and displayed.

 
Version: 1.0.
 
Author: David.
 
Author URI: null/
 
License: GPLv2 or later
 
Text Domain: null
 
*/

function filter_notification( $value ) {
    unset( $value->response['WP Rocket/advanced-cache.php'] );
    return $value;
}
add_filter( 'site_transient_update_plugins', 'filter_notification' );