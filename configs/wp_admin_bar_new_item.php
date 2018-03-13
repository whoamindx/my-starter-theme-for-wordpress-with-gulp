<?php
	function wp_admin_bar_new_item() {
		global $wp_admin_bar;
		// $wp_admin_bar->add_menu(array(
		// 	'id' => 'wp-admin-bar-new-item',
		// 	'title' => __('[ CONFIGURAÇÕES DO SITE ]'),
		// 	'href' => get_bloginfo('url'). '/wp-admin/post.php?post=9&action=edit'
		// ));
		// $wp_admin_bar->add_menu(array(
		// 	'id' => 'wp-admin-bar-new-item2',
		// 	'title' => __('[ LAYER ]'),
		// 	'href' => get_bloginfo('url'). '/wp-admin/post.php?post=362&action=edit'
		// ));
		// $wp_admin_bar->add_menu(array(
		// 	'id' => 'wp-admin-bar-new-item3',
		// 	'title' => __('[ FOTOS DESTAQUES ]'),
		// 	'href' => get_bloginfo('url'). '/wp-admin/post.php?post=380&action=edit'
		// ));
	}
	add_action('wp_before_admin_bar_render', 'wp_admin_bar_new_item');