<?php

function thth_add_menu_page() {
	add_management_page( 'Throwback Thursday', 'Throwback Thursday', 'manage_options', 'throwback-thursday', 'thth_admin_page_output' );
}

add_action( 'admin_menu', 'thth_add_menu_page' );

function thth_admin_page_output() {
	echo 'OUTPUT';
}