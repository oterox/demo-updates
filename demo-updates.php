<?php
/**
 * Demo actualización plugin
 *
 * Plugin Name:       Demo actualización
 * Plugin URI:        http://grillcode.es/
 * Description:       Esto es la descripción
 * Version:           1.0.1
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

add_action( 'init', 'tgm_updater_plugin_load' );

function tgm_updater_plugin_load() {

    if ( ! is_admin() ) {
        return;
    }

    if ( ! class_exists( 'TGM_Updater' ) ) {
        require plugin_dir_path( __FILE__ ) . 'class-tgm-updater.php';
    }

    $args = array(
        'plugin_name' => 'Demo Updates',
        'plugin_slug' => 'demo-updates',
        'plugin_path' => plugin_basename( __FILE__ ),
        'plugin_url'  => trailingslashit( WP_PLUGIN_URL ) . 'demo-updates',
        'remote_url'  => 'https://github.com/oterox/demo-updates',
        'version'     => '1.0.0',
        'key'         => false
    );
    $tgm_updater = new TGM_Updater( $args );

}

add_action('admin_menu', 'gc_add_menu');
function gc_add_menu() {
	add_menu_page('Demo Actualización', 'Demo', 'administrator', 'gc-plugin-settings', 'gc_plugin_settings_page', 'dashicons-admin-generic');
}

function gc_plugin_settings_page() {
  // bla bla bla
}
