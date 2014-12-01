<?php

/*
Plugin Name: Throwback Thursday
Plugin URI: https://github.com/theukedge/throwback-thursday
Description: A plugin for looking back at posts on this date in years past, every Thursday
Author: Dave Clements
Author URI: https://www.theukedge.com
Version: 1.0.0
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

/* ---------------------------------- *
 * constants
 * ---------------------------------- */

if ( !defined( 'THTH_PLUGIN_DIR' ) ) {
	define( 'THTH_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}

if ( !defined( 'THTH_PLUGIN_URL' ) ) {
	define( 'THTH_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

/* ---------------------------------- *
 * includes
 * ---------------------------------- */

include( THTH_PLUGIN_DIR . 'includes/admin-page.php' );
include( THTH_PLUGIN_DIR . 'includes/query.php' );