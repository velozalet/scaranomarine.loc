<?php
/**
 * Template Name: Page Home
 */

get_header(); ?>

	<div id="primary" class="site_content">
		<div id="content" role="main">
			
			<div class="slider">
				<?php echo do_shortcode("[metaslider id=44]"); ?>
			</div>
			
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
			
			<?php while ( have_posts() ) : the_post(); ?>
				
			<div class="info_block padT70 padB70">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6">
							<?php echo s_get_meta_data($post->ID, 'about_us'); ?>
							<a href="<?php echo get_the_permalink(6); ?>" class="button button_red">Read More</a>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 mTextAlignCenter mMarTop40">
							<img src="<?php echo s_get_meta_data($post->ID, 'about_us_image'); ?>" alt=""/>
						</div>
					</div>
				</div>
			</div>
			
			<div class="info_block red padT70 padB70" id="ib_services">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 textAlignCenter">
							<h2>Service</h2>
						</div>
					</div>
					<div class="row service_block">
						<div class="col-xs-12 col-sm-12 col-md-6">
							<?php echo s_get_meta_data($post->ID, 'repairs'); ?>
							<a href="<?php echo get_the_permalink(23); ?>" class="button button_white">Read More</a>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6">
							<?php echo s_get_meta_data($post->ID, 'maintenance'); ?>
							<a href="<?php echo get_the_permalink(25); ?>" class="button button_white">Read More</a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="info_block padT70 padB70" id="engine_surveys">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<?php echo s_get_meta_data($post->ID, 'engine_surveys'); ?>
						</div>
					</div>
				</div>
			</div>
			
			<div class="info_block black padT70 padB70" id="failure_analysis_consulting">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 textAlignCenter">
							<h2>Failure Analysis & Consulting</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 textAlignCenter">
							<?php echo s_get_meta_data($post->ID, 'failure_analysis_consulting'); ?>
						</div>
					</div>
				</div>
			</div>
			
			<?php $image = s_get_meta_data($post->ID, 'image'); if(!empty($image)){ ?>
			<div class="info_block image" style="background-image: url(<?= $image ?>)"></div>
			<?php } ?>
			
				<div class="info_block padT70 padB70" id="parts">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 textAlignCenter">
							<h2>Parts</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 textAlignCenter">
							<?php echo s_get_meta_data($post->ID, 'parts'); ?>
						</div>
					</div>
				</div>
			</div>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>