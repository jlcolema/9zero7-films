			</div>

		</div>

	</div>

	<div id="newsletter">

		<div class="wrap">

			<h3>

				<span><?php the_field('newsletter_headline', 'option'); ?></span>

			</h3>

			<?php the_field('newsletter_description', 'option'); ?>

			<?php echo do_shortcode( '[contact-form-7 id="96" title="Newsletter"]' ); ?>

		</div>

	</div>

	<div id="pre-footer">

		<div class="wrap">

			<div class="section learn-more">

				<h4>

					<span>Learn More</span>

				</h4>

				<?php $secondary_nav = array(

					'theme_location'	=> 'primary',
					'menu'				=> 'Secondary Navigation',
					'container'			=> '',
					'container_class'	=> '',
					'container_id'		=> '',
					'menu_class'		=> 'menu',
					'menu_id'			=> '',
					'echo'				=> true,
					'fallback_cb'		=> 'wp_page_menu',
					'before'			=> '',
					'after'				=> '',
					'link_before'		=> '',
					'link_after'		=> '',
					'items_wrap'		=> '<ul>%3$s</ul>',
					'depth'				=> 1,
					'walker'			=> ''

				); ?>

				<?php wp_nav_menu( $secondary_nav ); ?>

			</div>

			<div class="section connect">

				<h4>

					<span>Connect</span>

				</h4>

				<ul>

					<?php if (get_field('social_twitter', 'option')): ?>

						<li class="twitter">

							<a href="<?php the_field('social_twitter', 'option'); ?>" rel="external">Twitter</a>

						</li>

					<?php endif; ?>

					<?php if (get_field('social_facebook', 'option')): ?>

						<li class="facebook">

							<a href="<?php the_field('social_facebook', 'option'); ?>" rel="external">Facebook</a>

						</li>

					<?php endif; ?>

					<?php if (get_field('social_google_plus', 'option')): ?>

						<li class="google">

							<a href="<?php the_field('social_google_plus', 'option'); ?>" rel="external">Google+</a>

						</li>

					<?php endif; ?>

					<?php if (get_field('social_instagram', 'option')): ?>

						<li class="instagram">

							<a href="<?php the_field('social_instagram', 'option'); ?>" rel="external">Instagram</a>

						</li>

					<?php endif; ?>

					<?php if (get_field('social_vimeo', 'option')): ?>

						<li class="vimeo">

							<a href="<?php the_field('social_vimeo', 'option'); ?>" rel="external">Vimeo</a>

						</li>

					<?php endif; ?>

					<?php if (get_field('social_youtube', 'option')): ?>

						<li class="youtube">

							<a href="<?php the_field('social_youtube', 'option'); ?>" rel="external">YouTube</a>

						</li>

					<?php endif; ?>

					<li class="rss">

						<a href="<?php bloginfo('rss_url'); ?>">RSS</a>

					</li>

				</ul>

			</div>

			<div class="section visit-us">

				<h4>

					<span>Visit Us</span>

				</h4>

				<?php get_template_part('inc/h-card'); ?>

			</div>

		</div>

	</div>

	<footer id="footer" role="contentinfo">

		<div class="wrap">

			<p id="copyright">Copyright <?php echo date("Y"); echo " "; bloginfo( 'name' ); ?>. All rights reserved.</p>

		</div>

	</footer>

	<?php wp_footer(); ?>


	<?php

		/* Plugins */

	?>


	<script src="<?php bloginfo('template_directory'); ?>/a/js/picturefill.js"></script>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/scroll.js"></script>


	<?php

		/* Functions */

	?>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/functions.js"></script>


	<?php

		/* Donate */

	?>

	<?php if ( is_page( 'donate' ) ) { ?>

		<script type="text/javascript">

			var EB = EB || {};

			EB.button_stack = EB.button_stack || [];

			EB.button_stack.push({

				anchor_id: "everbutton-2501-1441342986-71",
				button_id: 2501,
				host: "https://www.everbutton.com"

			});

			if (!EB.script) {

				EB.script = document.createElement('script');
				EB.script.type = 'text/javascript';
				EB.script.async = true;
				EB.script.src = 'https://www.everbutton.com/assets/everbutton.v1.js?button_id=2501';

				var s = document.getElementsByTagName('script')[0];

				s.parentNode.insertBefore(EB.script, s);

			} else if (EB.load_buttons) {

				EB.load_buttons();

			}

		</script>

	<?php } ?>


	<?php

		/* Analytics */

	?>

	<?php if( the_field( 'google_analytics', 'option' ) ): ?>

		<!--

		Asynchronous google analytics; this is the official snippet.

		Replace UA-XXXXXX-XX with your site's ID and domainname.com with your domain, then uncomment to enable.

		-->

		<script>

			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', '<?php the_field( 'google_analytics', 'option'); ?>', 'domainname.com');

			ga('send', 'pageview');

		</script>

	<?php endif; ?>

</body>

</html>