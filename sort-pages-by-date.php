<?php 
/*
Plugin Name: Sort Pages By Date
Description: Sorts WordPress pages by most recent modified time in the admin panel.
Version: 1.0
Author: Erica Douglass
Author URI: https://erica.biz/
*/

add_filter('pre_get_posts', 'my_set_post_order_in_admin' );
function spbd_my_set_post_order_in_admin( $wp_query ) {
	global $pagenow;
	if ( is_admin() && $_GET['post_type'] == 'page' && 'edit.php' == $pagenow && !isset($_GET['orderby'])) {
		$wp_query->set( 'orderby', 'date' );
		$wp_query->set( 'order', 'DESC' );
	}
}
?>