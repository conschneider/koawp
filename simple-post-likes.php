<?php
/*
 * Plugin Name:       Simple Post Likes
 * Plugin URI:        Your plugin URL.
 * Description:       This is the description in the admin plugin overview.
 * Version:           1.0.0
 * Author:            conschneider
 * Author URI:        https://conschneider.de
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       choose freely like: "spltext"
 * Domain Path:       /languages
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Friendly advice:  namespace declarations in root plugin file will eat plugin settings links functions that don't use namespaces ;). Avoid Namespaces in the plugin root file alltogether. The plugin root file = procedual code for the win.

function spl_myplugin_settings_link( $links ) {
    $url = get_admin_url() . 'admin.php';
    $settings_link = '<a href="' . $url . '">' . __('Settings', 'spltext') . '</a>';
    array_unshift( $links, $settings_link );
    return $links;
}
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'spl_myplugin_settings_link');


/**
 * Plugin version. - https://semver.org
 *
 */
define( 'SIMPLE_POST_LIKES_VERSION', '1.0.0' );

/**
 * Activation
 */

function activate_simple_post_likes() {
	// OACS\SimplePostLike\Controllers\App\SolidPostLikesActivator::activate();
}


/**
 * Deactivation.
 */
function deactivate_simple_post_likes() {
	// OACS\SimplePostLike\Controllers\App\SolidPostLikesDeactivator::deactivate();
}

/**
 * Deinstallation.
 */
function deinstall_simple_post_likes() {

}

/**
* Watch the Namespace syntax. Shoutout:
* https://developer.wordpress.org/reference/functions/register_activation_hook/#comment-2167
*/
// register_activation_hook( __FILE__, __NAMESPACE__ . '\activate_simple_post_likes' );
// register_deactivation_hook( __FILE__, __NAMESPACE__ . '\deactivate_simple_post_likes' );
// register_uninstall_hook( __FILE__, __NAMESPACE__ . '\deinstall_simple_post_likes' );
/**
* Instead of: register_activation_hook( __FILE__, 'activate_simple_post_likes' );
* Using the file constant did not work for me.
*/


// include the Composer autoload file
require plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

/**
 * Engage.
 */
function run_simple_post_likes() {

	$plugin = new OACS\SimplePostLike\Controllers\App\SolidPostLikesPlugin();
	$plugin->run();

}
run_simple_post_likes();