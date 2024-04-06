<?php get_header(); ?>

	<h1 class="page-title">Sponsors</h1>

	<div class="content">

		<div class="primary">

			<?php the_field('sponsors_content'); ?>

			<div class="become-a-sponsor">

				<a href="#sponsor-form">Become a Sponsor!</a>

			</div>

			<div class="sponsors">

				<ul>

					<?php

						/* Sponsor Listing */

					?>

					<?php

						$args = array(

							'numberposts' 	=> -1,
							'post_type'		=> 'sponsor',
							'orderby'		=> 'menu_order',
							'post_status'	=> 'publish',
							'order'			=> 'ASC'

						);

						$items = get_posts($args);

					?>

					<?php foreach($items as $item): ?>

					<?php

						$sponsor_url = get_field('sponsor_url', $item->ID);

					?>

						<li>

							<?php if( $sponsor_url ) { ?>

								<a href="<?php echo $sponsor_url; ?>" rel="external">

							<?php } ?>

								<?php echo $item->post_title; ?>

							<?php if( $sponsor_url ) { ?>

								</a>

							<?php } ?>

						</li>

					<?php endforeach; ?>

				</ul>

			</div>

			<div id="sponsor-form" class="sponsor-form">

				<h2>Become a Sponsor!</h2>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor. Ut eget imperdiet neque. In volutpat ante semper diam molestie, et aliquam erat laoreet.</p>

				<?php echo do_shortcode( '[contact-form-7 id="98" title="Sponsor"]' ); ?>

			</div>

		</div>

		<div class="secondary">

			<?php get_template_part('inc/h-card'); ?>

		</div>

	</div>

<?php get_footer(); ?>