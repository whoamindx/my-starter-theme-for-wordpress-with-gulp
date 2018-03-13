<?php
	
	// Remover atributo 'type' de ambas as tags
	function g_remove_type_attr($tag, $handle) {
	    return preg_replace( "/ type=['\"]text\/(javascript|css)['\"]/", '', $tag );
	}
	add_filter('style_loader_tag', 'g_remove_type_attr', 10, 2);
	add_filter('script_loader_tag', 'g_remove_type_attr', 10, 2);


	// Remover atributo 'media' de style
	function g_remove_media_attr($tag, $handle) {
	    return preg_replace( "/ media=['\"]all['\"] \//", '', $tag );
	}
	add_filter('style_loader_tag', 'g_remove_media_attr', 10, 2);


	// Remover 'id' da tag style
	function g_remove_id_style($tag, $handle) {
	    return preg_replace( "/ id=['\"](.+)['\"] /", '', $tag );
	}
	add_filter('style_loader_tag', 'g_remove_id_style', 10, 2);