<?php 
/*
Plugin Name: Remove BuddyPress AdminBar
Plugin URI: http://blog.netweblogic.com/php/wordpress-php/remove-admin-bar-plugin/
Description: This plugin removes the admin bar completely from the public and admin areas of the website. Can be used either as a normal or MU plugin.
Author: NetWebLogic LLC
Version: 1.2
Author URI: http://blog.netweblogic.com
*/

define( 'BP_DISABLE_ADMIN_BAR', false );

if ( !function_exists('remove_bp_adminbar') ) {
	function remove_bp_adminbar() {
		remove_action( 'bp_adminbar_logo', 'bp_adminbar_logo' );
		remove_action( 'bp_adminbar_menus', 'bp_adminbar_login_menu', 2 );
		remove_action( 'bp_adminbar_menus', 'bp_adminbar_account_menu', 4 );
		remove_action( 'bp_adminbar_menus', 'bp_adminbar_blogs_menu', 6 );
		remove_action( 'bp_adminbar_menus', 'bp_adminbar_notifications_menu', 8 );
		remove_action( 'bp_adminbar_menus', 'bp_adminbar_authors_menu', 12 );
		remove_action( 'bp_adminbar_menus', 'bp_adminbar_random_menu', 100 );
		
		remove_action( 'wp_footer', 'bp_core_admin_bar', 8 );
		remove_action( 'admin_footer', 'bp_core_admin_bar' );
		remove_action( 'admin_head', 'bp_core_admin_bar_css', 1 );
		remove_action( 'wp_head', 'bp_core_admin_bar_css', 1 );
		remove_action( 'admin_menu', 'bp_core_add_admin_css' );
	}
}

// Start this plugin once all other plugins are fully loaded
add_action( 'plugins_loaded', 'remove_bp_adminbar' );

?>