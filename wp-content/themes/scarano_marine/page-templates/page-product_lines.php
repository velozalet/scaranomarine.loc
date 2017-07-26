<?php
/**
 * Template Name: Page Product Lines
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
			
			<div class="info_block padT70">
				<div class="container">
					<div class="row padB55">
						<div class="col-xs-12 col-sm-12 col-md-12 textAlignCenter">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
					<div class="row padB55 mPadBNo">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<?php the_content(); ?>
						</div>
					</div>
					<?php #$product_lines_image = s_get_meta_data($post->ID, 'product_lines_image'); ?>
					<div class="row product_lines">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<?php
								if( have_rows('product_lines') ) { 
									while( have_rows('product_lines') ) : the_row();
										$text = get_sub_field('text'); ?>
										<div class="col-xs-12 col-sm-6 col-md-3">
											<?= $text ?>
										</div>
							<?php endwhile;
								}
							?>
						</div>
					</div>
				</div>
			</div>
			
			
			
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>