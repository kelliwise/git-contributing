<?php
/**
 * Launches the Git Contributing plugin. for you to enjoy while learning about GIT
 *
 * @package     KnowTheCode\GitContributing
 * @author      hellofromTonya
 * @license     GPL-3.0+
 *
 * @wordpress-plugin
 * Plugin Name: Git Contributing
 * Plugin URI:  https://github.com/KnowTheCode/git-contributing
 * Description: Git Contributing - an awesome collaborative project to teach you the contributor workflow for the git contributing hands on lab.
 * Version:     1.0.0
 * Author:      Git Contributing Team
 * Author URI:  https://KnowTheCode.io
 * Text Domain: git-contributing
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace KnowTheCode\GitContributing;

/**
 * Gets this plugin's absolute directory path.
 *
 * @since  1.0.0
 * @ignore
 * @access private
 *
 * @return string
 */
function _get_plugin_directory() {
	return __DIR__;
}

/**
 * Gets this plugin's URL.
 *
 * @since  1.0.0
 * @ignore
 * @access private
 *
 * @return string
 */
function _get_plugin_url() {
	static $plugin_url;

	if ( empty( $plugin_url ) ) {
		$plugin_url = plugins_url( null, __FILE__ );
	}

	return $plugin_url;
}

/**
 * Checks if this plugin is in development mode.
 *
 * @since 1.0.0
 *
 * @return bool
 */
function _is_in_development_mode() {
	return defined( WP_DEBUG ) && WP_DEBUG === true;
}

/**
 * Autoload the plugin's files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function autoload_files() {
	$files = array(
		// add the list of files to load here.
	);

	foreach ( $files as $file ) {
		require __DIR__ . '/src/' . $file;
	}
}

/**
 * Launch the plugin.
 *
 * @since 1.0.0
 *
 * @return void
 */
function launch() {
	autoload_files();
}

launch();
