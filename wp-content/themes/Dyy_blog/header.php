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

	<meta name="description" content="note by kasumidyaya.">
	<meta property="og:title" content="<?php wp_title(); ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
	
	<?php if (is_single() && has_post_thumbnail() ) : ?>
	<meta property="og:image" content="<?php the_post_thumbnail_url(); ?>" />
	<?php else: ?>
	<meta property="og:image" content="https://kasumidyaya.net/ogp.png">
	<?php endif; ?>

	<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
	<?php if ( is_single()): ?>
	<?php if ($post->post_excerpt){ ?>
	<meta name="description" content="<? echo $post->post_excerpt; ?>">
	<?php } else {
					$summary = strip_tags($post->post_content);
					$summary = str_replace("\n", "", $summary);
					$summary = mb_substr($summary, 0, 120). "…"; ?>
	<meta name="description" content="<?php echo $summary; ?>">
	<?php } ?>
	<?php elseif ( is_home() || is_front_page() ): ?>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<?php elseif ( is_category() ): ?>
	<meta name="description" content="<?php echo category_description(); ?>">
	<?php elseif ( is_tag() ): ?>
	<meta name="description" content="<?php echo tag_description(); ?>">
	<?php else: ?>
	<meta name="description" content="<?php the_excerpt();?>">
	<?php endif; ?>
	<meta name="twitter:card" content="summary"></meta>

	<link rel="canonical" href="https://note.kasumidyaya.net/">
	<link rel="icon" href="<?php echo get_theme_file_uri('/favicon.ico'); ?>">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<?php get_template_part( 'partials/ga' ); ?>
</head>
<body <?php body_class(); ?>>

<div class="wrapper grid">

<header class="l-header col-desk-12">
	<h1 class="l-header_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Note.</a></h1>
</header>
