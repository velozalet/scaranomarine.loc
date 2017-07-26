<?php
/**
 * Template Name: Page Repairs
 */

get_header(); ?>

	<div id="primary" class="site_content service">
		<div id="content" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>
			
			<?php if ( has_post_thumbnail()) { ?>
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); $url = $thumb['0']; ?>
				<div class="banner" style="background-image: url(<?= $url ?>)"><div class="b_bottom_gradient"></div></div>
			<?php } ?>
			
			<div class="info_block showOnTablet">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="nav_arrow">
								<div class="na_icon"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="info_block nav_service">
				<a href="<?php echo get_the_permalink(23); ?>" id="nse_1" class="active"><i class="icons"></i>Repairs</a>
				<a href="<?php echo get_the_permalink(25); ?>" id="nse_2"><i class="icons"></i>Maintenance</a>
			</div>
			
			<div class="info_block padT70 padB70">
				<div class="container">
					<div class="row padB75">
						<div class="col-xs-12 col-sm-12 col-md-12 textAlignCenter">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
					
					<?php $content = get_the_content(); if(!empty($content)){ ?>
					<div class="row padB75">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<?php echo $content; ?>
						</div>
					</div>
					<?php } ?>
					
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6">
							<?php echo s_get_meta_data($post->ID, 'left_side_text'); ?>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6">
							<?php echo s_get_meta_data($post->ID, 'right_side_text'); ?>
						</div>
					</div>
				</div>
			</div>
			
			<?php $bottom_image = s_get_meta_data($post->ID, 'bottom_image'); ?>
			<div class="info_block repair_bottom_banner" style="background-image: url(<?= $bottom_image ?>)"></div>
			
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>