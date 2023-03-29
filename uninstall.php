<?php

/**
 * Fired when the plugin is uninstalled.
 *
 * As a sample there is some code that checks for a custom option and if it is set it will delete all the plugin options. It is good practice to delete generated when uninstalling a plugin.
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

	// $spl_deinstall_delete = get_option('_spl_deinstall_delete');

	// if( $spl_deinstall_delete === 'yes' ) {
	// 	global $wpdb;
	// 	$prefix = '_spl_';
	// 	$wpdb->query( "DELETE FROM {$wpdb->options} WHERE option_name LIKE '{$prefix}%'" );
	// 	$wpdb->query( "DELETE FROM {$wpdb->commentmeta} WHERE meta_key LIKE '{$prefix}%'" );
	// 	$wpdb->query( "DELETE FROM {$wpdb->postmeta} WHERE meta_key LIKE '{$prefix}%'" );
	// 	$wpdb->query( "DELETE FROM {$wpdb->usermeta} WHERE meta_key LIKE '{$prefix}%'" );
	// }
