<?php
/*
パーツ：ヘッダ
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title(); ?></title>

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<meta property="og:title" content="">
	<meta property="og:type" content="">
	<meta property="og:url" content="">
	<meta property="og:image" content="">
	<meta property="og:site_name" content="">
	<meta property="og:description" content="" />
	<meta property="fb:app_id" content="">

	<link rel="icon" href="<?php echo get_theme_file_uri('/favicon.ico'); ?>">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="wrapper grid">

<header class="l-header col-desk-12">
	<h1 class="l-header_title"><a href="http://kasumidyaya.net">kasumidyaya.net</a> / <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Blog</a></h1>
</header>
