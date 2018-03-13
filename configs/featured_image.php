<?php
	function tcb_add_post_thumbnail_column($cols){
		$cols['tcb_post_thumb'] = __('Imagem Destacada');
		return $cols;
	}
	add_filter('manage_posts_columns', 'tcb_add_post_thumbnail_column', 5);
	add_filter('manage_pages_columns', 'tcb_add_post_thumbnail_column', 5);
	 
	function tcb_display_post_thumbnail_column($col, $id){
		switch($col){
			case 'tcb_post_thumb':
				if( function_exists('the_post_thumbnail') )
					echo the_post_thumbnail( 'admin-list-thumb' );
				else
					echo 'Not supported in theme';
			break;
		}
	}
	add_action('manage_posts_custom_column', 'tcb_display_post_thumbnail_column', 5, 2);

	function my_custom_fonts() { echo '
		<style>
			.tcb_post_thumb img {
				max-width:215px;
				height: auto;
			}
		</style>';
	}
	add_action('admin_head', 'my_custom_fonts');