<?php
	function load_assets(){
		// wp_enqueue_style( 'some-css', get_bloginfo('template_url') . '/dist/css/some.css', false, null, 'all');
		// wp_enqueue_script( 'some-js',  get_bloginfo('template_url') . '/dist/js/some.js', false, null, true);
	}
	add_action('wp_enqueue_scripts','load_assets');