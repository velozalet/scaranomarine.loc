<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9 ]><html class="ie ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="format-detection" content="telephone=no" />
<?php if (have_posts()):while(have_posts()):the_post();endwhile;endif;?>
<meta property="og:url" content="<?php the_permalink() ?>"/>
<?php if (is_single()) { ?>
<meta property="og:title" content="<?php single_post_title(''); ?>" />
<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="<?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium'); echo $thumb[0]; ?>" />
<?php } else { ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<meta property="og:type" content="website" />
<meta property="og:image" content="<?php bloginfo('template_url') ?>/images/logo.png" />
<?php } ?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="icon" sizes="32x32" href="/favicon.ico?v=2">
<link rel="shortcut icon" sizes="16x16 32x32" href="/favicon.ico?v=2">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<!--[if lte IE 8]>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js?ver=3.7.2"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js?ver=1.4.2"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site_header">
		
		<div class="sh_body">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="logo wblink"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"></a></div>
							
						<a href="#" class="request_service popup_show_2">Request Service</a>
						
						<nav id="site-navigation" class="main_navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav_menu' ) ); ?>
						</nav>
						
						<a href="<?php echo s_get_meta_data(2, 'google_map_link'); ?>" target="_blank" class="shb_address"></a>
						<div class="nav_trigger"></div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="sh_bottom_bar">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-5">
						<?php echo s_get_meta_data(2, 'dockside_service'); ?>
						<p class="hidden-md hidden-lg textAlignRight marT-26"><em>Se habla español</em></p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-7 hidden-xs hidden-sm textAlignRight">
						<?php $phone = s_get_meta_data(2,'phone'); ?>
						<?php $email = s_get_meta_data(2,'e-mail'); ?>
						<p>
							<a href="tel:<?php echo preg_replace('/[()\s-]+/i','',$phone); ?>" class="shbb_phone"><i class="icons"></i>Office Phone: <span><?= $phone ?></span></a>
							<a href="mailto:<?= $email ?>" class="shbb_email"><i class="icons"></i>E-mail: <?= $email ?></a>
						</p>
						<p><em>Se habla español</em></p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="contacts_mobile hidden-sm hidden-md hidden-lg">
			<a href="tel:<?php echo preg_replace('/[()\s-]+/i','',$phone); ?>" class="cm_phone"><i class="icons"></i></a>
			<a href="mailto:<?= $email ?>" class="cm_email"><i class="icons"></i></a>
		</div>

	</header><!-- #masthead -->

	<div id="main">