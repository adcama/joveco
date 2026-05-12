<?php
/**
 * Plugin Name: Dolibarr REST API
 * Version: 1.0.0
 * Plugin URI: https://git.open-dsi.fr/wordpress-plugin/dolibarr-rest-api
 * Description: Plugin helper to connect to the Dolibarr (free ERP) REST API.
 * Author: Open-DSI
 * Author URI: https://www.open-dsi.fr/
 * Requires at least: 4.0
 * Tested up to: 4.9.8
 *
 * Text Domain: dolibarr-rest-api
 * Domain Path: /lang/
 *
 * @package Dolibarr REST API
 * @author Open-DSI
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;

// Load plugin class files.
require_once 'includes/class-dolibarr-rest-api.php';
// require_once 'includes/class-dolibarr-rest-api-settings.php';
require_once 'includes/class-dolibarr-rest-api-controller.php';

// Load plugin libraries.
// require_once 'includes/lib/class-dolibarr-rest-api-admin-api.php';
// require_once 'includes/lib/class-dolibarr-rest-api-post-type.php';
// require_once 'includes/lib/class-dolibarr-rest-api-taxonomy.php';

/**
 * Returns the main instance of Dolibarr_REST_API to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Dolibarr_REST_API
 */
function dolibarr_rest_api() {
	$instance = Dolibarr_REST_API_Controller::instance( __FILE__, '1.0.0' );

	/*if ( is_null( $instance->settings ) ) {
		$instance->settings = Dolibarr_REST_API_Settings::instance( $instance );
	}*/

	return $instance;
}

dolibarr_rest_api();
