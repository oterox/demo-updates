<?php
/**
 * Demo actualización plugin
 *
 * Plugin Name:       Demo actualización
 * Plugin URI:        http://grillcode.es/
 * Description:       Esto es la descripción
 * Version:           1.0.0
 * Author:            Javier Otero
 * Author URI:        http://grillcode.es/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/tommcfarlin/page-template-example/
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once( plugin_dir_path( __FILE__ ) . 'class-tgm-updater.php' );

add_action('admin_menu', 'gc_add_menu');
function gc_add_menu() {
	add_menu_page('Demo Actualización', 'Demo', 'administrator', 'gc-plugin-settings', 'gc_plugin_settings_page', 'dashicons-admin-generic');
}

function gc_plugin_settings_page() {
  // bla bla bla
}
