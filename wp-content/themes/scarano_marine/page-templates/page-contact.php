<?php
/**
 * Template Name: Page Contact
 */

get_header(); ?>

	<div id="primary" class="site_content">
		<div id="content" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>
			
			<?php if ( has_post_thumbnail()) { ?>
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); $url = $thumb['0']; ?>
				<div class="banner" style="background-image: url(<?= $url ?>)"><div class="b_bottom_gradient"></div></div>
			<?php } ?>
			
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
			
			<div class="info_block padT70 padB20">
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
							<div class="cp_address">
								<i class="icons"></i>
								<?php echo s_get_meta_data($post->ID, 'address'); ?>
							</div>
							<div class="cp_phone">
								<i class="icons"></i>
								<?php echo s_get_meta_data($post->ID, 'phone'); ?>
							</div>
							<div class="cp_email">
								<i class="icons"></i>
								<?php echo s_get_meta_data($post->ID, 'email'); ?>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6">
							<div class="contact_form" id="cf_1">
								<i class="icons"></i>
								<?php echo do_shortcode('[contact-form-7 id="42" title="Contact form"]'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>