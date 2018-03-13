<?php
	function change_submenu_class($menu) {
		$menu = preg_replace('/ class="sub-menu"/',' class="dl-submenu"',$menu);
		return $menu;
	}
	add_filter('wp_nav_menu','change_submenu_class');