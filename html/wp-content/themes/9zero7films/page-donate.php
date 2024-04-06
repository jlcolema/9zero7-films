<?php get_header(); ?>

	<h1 class="page-title">Donate</h1>

	<div class="content">

		<div class="primary">

			<?php the_field('donate_content'); ?>

			<div class="donate-today">

				<a href="https://www.everbutton.com/pay/2501" rel="external" class="everbutton-2501-1441342986-71">Donate Today!</a>

			</div>

			<div class="accepted-cards">

				<p>We currently accept the following:</p>

				<ul>

					<li class="visa">Visa</li>
					<li class="mastercard">Mastercard</li>
					<li class="american-express">American Express</li>
					<li class="discover">Discover</li>

				</ul>

			</div>

		</div>

		<div class="secondary">

			<?php get_template_part('inc/h-card'); ?>

		</div>

	</div>

<?php get_footer(); ?>