<?php get_header(); ?>

	<h1 class="page-title">Contact</h1>

	<div class="content">

		<div class="primary">

			<?php the_field('contact_content'); ?>

			<div class="contact-form">

				<?php echo do_shortcode( '[contact-form-7 id="95" title="Contact"]' ); ?>

			</div>

		</div>

		<div class="secondary">

			<?php get_template_part('inc/h-card'); ?>

		</div>

	</div>

<?php get_footer(); ?>