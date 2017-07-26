		<?php $phone = s_get_meta_data(2,'phone'); ?>
		<?php $email = s_get_meta_data(2,'e-mail'); ?>
		<div class="contact_block">
			<?php if(!is_page(14)){ ?>
			<div class="cb_body">
				<div class="container">
					<div class="row padB60">
						<div class="col-xs-12 col-sm-12 col-md-12 textAlignCenter">
							<h2>Contact Us</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-5 mMarBottom40">
							
							<p><a href="tel:<?php echo preg_replace('/[()\s-]+/i','',$phone); ?>" class="cb_phone"><i class="icons"></i>Office Phone: <span><?= $phone ?></span></a></p>
							<p><a href="mailto:<?= $email ?>" class="cb_email"><i class="icons"></i>E-mail: <span><?= $email ?></span></a></p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-7">
							<div class="contact_form">
								<?php echo do_shortcode('[contact-form-7 id="42" title="Contact form"]'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
			<div class="cb_bottom_bar"></div>
		</div>
		<div id="map_canvas"></div>
	</div><!-- #main -->
	<footer class="site_footer">
		<div class="sf_body">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-2">
						<div class="sf_logo wblink"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"></a></div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<nav class="footer_navigation">
							<?php wp_nav_menu( array( 'menu' => 'footer_1', 'menu_class' => 'nav_menu' ) ); ?>
						</nav>
						<nav class="footer_navigation">
							<?php wp_nav_menu( array( 'menu' => 'footer_2', 'menu_class' => 'nav_menu' ) ); ?>
						</nav>
						<nav class="footer_navigation">
							<?php wp_nav_menu( array( 'menu' => 'footer_3', 'menu_class' => 'nav_menu' ) ); ?>
						</nav>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4">
						<p><a href="tel:<?php echo preg_replace('/[()\s-]+/i','',$phone); ?>" class="sf_phone"><i class="icons"></i>Office Phone: <span><?= $phone ?></span></a></p>
						<p><a href="mailto:<?= $email ?>" class="sf_email"><i class="icons"></i>E-mail: <span><?= $email ?></span></a></p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-2 marT30">
						<a href="#" class="button button_red mini popup_show_1">Careers</a>
						<div class="popup" id="pp_1">
							<div class="popup_body">
								<i class="icons close"></i>
								<div class="textAlignCenter">
									<h2>Careers</h2>
									<p><i class="icons careers"></i></p>
									<p class="marB30"><strong>For job opportunities please fill out the form below</strong></p>
								</div>
								<div class="contact_form" id="cf_2">
									<?php echo do_shortcode('[contact-form-7 id="136" title="Careers Form"]'); ?>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="popup" id="pp_2">
							<div class="popup_body">
								<i class="icons close"></i>
								<div class="textAlignCenter">
									<h2>Request Service</h2>
								</div>
								<div class="contact_form" id="cf_3">
									<?php echo do_shortcode('[contact-form-7 id="137" title="Request Service form"]'); ?>
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 marT30">
						<div class="sf_info">
							<?php echo s_get_meta_data(2, 'dockside_service'); ?>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 marT30">
						<div class="sf_info textAlignRight">
							<p><em>Se habla español</em></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sf_bottom_bar">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6">
						<p>© <?php echo date('Y'); ?>. Scarano Marine. All Rights Reserved.</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 textAlignRight">
						<div class="sf_bcard"></div>
						<p><a href="http://www.absolutewebservices.com/" target="_blank">Web Development</a> by <a href="http://www.absolutewebservices.com/" target="_blank">Absolute Web Services</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>