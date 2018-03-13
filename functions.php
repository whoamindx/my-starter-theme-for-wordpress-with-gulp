<?php
	ini_set('memory_limit', '2048M');


	/**
	 * NO FTP
	 */
	define('FS_METHOD', 'direct');


	/**
	 * IMAGEM DESTACADA
	 */
	add_theme_support('post-thumbnails');


	/**
	 * NAV MENU
	 */
	add_theme_support('menus');


	/**
	 * TROCAR CLASSE DOS SUB-MENUS DO WP_NAV_MENU
	 */
	include('configs/change_submenu_class.php');


	/**
	 * BOTÃO [CONFIGURAÇÕES DO SITE]
	 */
	include('configs/wp_admin_bar_new_item.php');


	/**
	 * REMOVER ALGUM ITEN NO MENU DO PAINEL
	 */
	function removeConfig() {
		global $menu;
		// unset($menu[100]);
		// unset($menu[101]);
		// unset($menu[102]);
	}
	add_action('admin_head', 'removeConfig');


	/**
	 * REMOVER O BOTÃO PARA ADICIONAR NOVOS POSTS PARA OS POSTS TYPES
	 */
	function disable_create_newpost() {
	    global $wp_post_types;
	    // $wp_post_types['layer']->cap->create_posts = 'do_not_allow';
	    // $wp_post_types['configuracoesgerais']->cap->create_posts = 'do_not_allow';
	    // $wp_post_types['fotosdestaques']->cap->create_posts = 'do_not_allow';
	}
	add_action('init','disable_create_newpost');

	/**
	 * REMOVER OS BOTÕES LINKS 'VIEW' E 'EDITAR' (O PERMALINK) DOS SEGUINTES POSTS TYPES NA BARRA ADMIN
	 */
	function posttype_admin_css() {
		global $post_type;
		// if($post_type == 'configuracoesgerais' || $post_type == 'layer' || $post_type == 'fotosdestaques') {
		// 	echo '<style>#edit-slug-box,#view-post-btn,#post-preview,.updated p a,#wp-admin-bar-view{display: none;}</style>';
		// }
	}
	add_action('admin_head', 'posttype_admin_css');


	/**
	 * FEATURED IMAGE
	 */
	include('configs/featured_image.php');


	/**
	 * PAGINAÇÃO
	 */
	include('configs/paginacao.php');


	/**
	 * INICIO DOS POSTS POR PÁGINAS DAS CATEGORIAS
	 */
	include('configs/query_post_conditional.php');


	/**
	 * DESABILITAR REST API
	 */
	function wp_snippet_disable_rest_api( $access ) {
	     return new WP_Error('rest_disabled', __('The WordPress REST API has been disabled.'), array('status' => rest_authorization_required_code()));
	}
	add_filter('rest_authentication_errors', 'wp_snippet_disable_rest_api');




	// =========================================================== WP_HEAD E WP_FOOTER =========================================================== //

	/**
	 * FUNÇÃO PARA REMOVER A BARRA DE ADM QUANDO LOGADO, OU EXIBIR SOMENTE PARA ALGUM TIPO DE USUÁRIO
	 */
	function remove_admin_bar() {
		// if (!current_user_can('administrator') && !is_admin()) {
			show_admin_bar(false);
		// }
	}
	add_action('after_setup_theme', 'remove_admin_bar');


	/**
	 * REMOVER TAGS DESNECESSÁRIAS DO WP_HEAD
	 */
	remove_action('wp_head', 'wp_resource_hints', 2);
	remove_action('wp_head', 'rest_output_link_wp_head');
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'wp_oembed_add_discovery_links');
	remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
	remove_action('wp_head', 'feed_links', 2 );
	remove_action('wp_head', 'feed_links_extra', 3 );


	/**
	 * REMOVER WP EMOJI
	 */
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
	remove_action( 'wp_print_styles', 'print_emoji_styles' );


	/**
	 * REMOVER WP EMBED
	 */
	function remove_wp_embed(){
		wp_dequeue_script('wp-embed');
	}
	add_action('wp_footer','remove_wp_embed');


	/**
	 * REMOVER ATRIBUTOS DESNECESSÁRIOS DAS TAGS STYLES E SCRIPTS
	 */
	include('configs/tags_filters.php');


	/**
	 * CONTROLE DE SCRIPTS E STYLES
	 */
	include('configs/load_assets.php');