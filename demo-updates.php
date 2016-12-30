<?php
/*
Plugin Name: WP demo updates
Plugin URI: https://github.com/oterox/demo-updates
Description: Demo plugin updates
Version: 0.2
Author: Oterox
Author URI: http://grillcode.es
License: GPLv2
*/


add_action( 'init', 'gc_demo_updates_init' );
function gc_demo_updates_init() {

	include_once 'updater.php';

	define( 'WP_GITHUB_FORCE_UPDATE', true );

	if ( is_admin() ) {

		$config = array(
			'slug' => plugin_basename( __FILE__ ),
			'proper_folder_name' => 'demo-updates',
			'api_url' => 'https://api.github.com/repos/oterox/demo-updates',
			'raw_url' => 'https://raw.github.com/oterox/demo-updates/master',
			'github_url' => 'https://github.com/oterox/demo-updates',
			'zip_url' => 'https://github.com/oterox/demo-updates/archive/master.zip',
			'sslverify' => true,
			'requires' => '3.0',
			'tested' => '3.3',
			'readme' => 'README.md',
			'access_token' => '',
		);

		new WP_GitHub_Updater( $config );

	}

}
