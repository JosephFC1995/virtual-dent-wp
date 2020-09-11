<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ); ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" type="image/png" href="<?php echo cs_get_option('favicon_site') ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
		<?php
	$sep = ' | ';
	$name = get_bloginfo( 'name' );

	if( is_home() || is_front_page() )
		$name_page =  get_bloginfo('name');

		$title = $name_page . $sep . get_bloginfo( 'description' );

	if( is_single() || is_page() )
		$title = wp_title( $sep, false, 'right' ) . $name;


	if( is_category())
		$title = single_cat_title( '', false ) . $sep . $name;

	if(is_post_type_archive())
		$title = post_type_archive_title( '', false ) . $sep . $name;

	if(is_tax())
		$title = single_cat_title( '', false ) . $sep . $name;

	if( is_day() )
		$title = 'Post for the day ' . get_the_date( 'j F, Y' ). $sep . $name;

	if( is_month() )
		$title = 'Post for the month ' . get_the_date( 'F, Y' ). $sep . $name;

	if( is_year() )
		$title = 'Post for the year ' . get_the_date( 'Y' ). $sep . $name;

	if (is_404()) 
		$title = '404' . $sep . $name;
	?>
	<title><?php echo $title;?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
	<meta name="twitter:card" value="summary">	
	<meta name="keywords" content="<?php echo cs_get_option('seo_etiquetas') ?>">
	<!--<meta name=”robots” content="Index, Follow">-->
	<!-- Schema.org markup for Google+ -->
	<meta itemprop="name" content="<?php bloginfo( 'name' ); ?>">
	<meta itemprop="description" content="<?php bloginfo( 'description' ); ?>">
	<meta itemprop="image" content="<?php echo cs_get_option('seo_imge') ?>">
	<!-- Open Graph data -->
	<meta property="og:title" content="<?php bloginfo( 'name' ); ?>"/>
	<meta property="og:type" content="article"/>
	<meta property="og:url" content="<?php echo get_site_url(); ?>"/>
	<meta property="og:image" content="<?php echo cs_get_option('seo_imge') ?>" />
	<meta property="og:description" content="<?php bloginfo( 'description' ); ?>"/>
	<meta property="og:locale" content="pe_PE"/>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

