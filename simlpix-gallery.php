<?php
/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that also follow
 * WordPress coding standards and PHP best practices.
 *
 * @package   Simlpix_Gallery
 * @author    Your Name <email@example.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2013 Your Name or Company Name
 *
 * @wordpress-plugin
 * Plugin Name: Simlpix Gallery
 * Plugin URI:  Simlpix Gallery
 * Description: TODO
 * Version:     1.0.0
 * Author:      TODO
 * Author URI:  TODO
 * Text Domain: simlpix-gallery-locale
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// TODO: replace `class-simlpix-gallery.php` with the name of the actual plugin's class file
require_once( plugin_dir_path( __FILE__ ) . 'class-simlpix-gallery.php' );

// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.
register_activation_hook( __FILE__, array( 'Simlpix_Gallery', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Simlpix_Gallery', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'Simlpix_Gallery', 'get_instance' ) );
