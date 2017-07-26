<?php
/**
 * Template Name: Page About Us
 */

get_header(); ?>

	<div id="primary" class="site_content">
		<div id="content" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>
			
			<?php if ( has_post_thumbnail()) { ?>
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); $url = $thumb['0']; ?>
				<div class="banner" style="background-image: url(<?= $url ?>)"><div class="b_bottom_gradient"></div></div>
				
				<div class="info_block">
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
			<?php } ?>
			
			<div class="info_block padT70 padB70" id="ib_about">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 textAlignCenter">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6">
							<?php the_content(); ?>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6">
							<img src="<?php echo s_get_meta_data($post->ID, 'about_us_image'); ?>" alt="" />
						</div>
					</div>
				</div>
			</div>
			
			<div class="info_block padT70 padB70" id="ib_history">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 textAlignCenter">
							<h2>History</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6">
							<img src="<?php echo s_get_meta_data($post->ID, 'history_image'); ?>" alt="" />
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6">
							<?php echo s_get_meta_data($post->ID, 'history'); ?>
						</div>
					</div>
				</div>
			</div>
			
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>