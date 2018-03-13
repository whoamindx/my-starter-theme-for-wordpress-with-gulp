<?php
	function query_post_conditional($query) {
	  if ( !is_admin() && $query->is_main_query() ) {
	    if (is_category()) {
			$query->set( 'posts_per_page', 4 );
	        return;
		}
		if (is_search()) {
			$query->set( 'posts_per_page', 4 );
			$query->set( 'post_type', 'post' );
			$query->set( 'category__not_in', 34 );
	        return;
		}
	  }
	}
	add_action('pre_get_posts','query_post_conditional');