<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<title><?php wp_title('-',true,'right'); bloginfo(); if(is_home()){echo " &#8211; "; bloginfo('description');} ?></title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

		<meta name="theme-color" content="#fff">
		<meta name="apple-mobile-web-app-status-bar-style" content="#fff">
		<meta name="msapplication-navbutton-color" content="#fff">

		<meta name="code" content="Gabriel Napoleão - [+55 85 98525.4080]">
		<meta name="design" content="Gabriel Napoleão - [+55 85 98525.4080]">
<?php if (is_single()) { ?>
		<meta name="description" content="<?php echo wp_trim_words($post->post_content, 50, '...'); ?>">
<?php } else { ?>
		<meta name="description" content="<?php bloginfo('description'); ?>">
<?php } ?>
		<meta name="keywords" content="palavra chave, palavra chave, palavra chave">
		<meta property="og:url" content="<?php bloginfo('wpurl'); ?>">
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
		<meta property="og:type" content="website">
		<meta property="og:title" content="<?php wp_title('-',true,'right'); bloginfo(); ?>">
		<meta property="og:locale" content="pt-BR">
		<meta name="robots" content="index, follow">
		<meta name="googlebot" content="index, follow">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/css/main.min.css">
		<script src="<?php bloginfo('template_url'); ?>/dist/js/app.min.js" async></script>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		