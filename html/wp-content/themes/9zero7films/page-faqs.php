<?php get_header(); ?>

	<h1 class="page-title">FAQs</h1>

	<div class="content">

		<div class="primary">

			<div class="questions">

				<ol>

					<?php

						/* FAQ Listing (Questions) */

					?>

					<?php

						$args = array(

							'numberposts' 	=> -1,
							'post_type'		=> 'faq',
							'orderby'		=> 'menu_order',
							'post_status'	=> 'publish',
							'order'			=> 'ASC'

						);

						$items = get_posts($args);

					?>

					<?php foreach($items as $item): ?>

					<?php

						$faq_question = get_field('faq_question', $item->ID);

					?>

						<li>

							<a href="#faq-<?php echo $item->ID; ?>"><?php echo $faq_question; ?></a>

						</li>

					<?php endforeach; ?>

				</ol>

			</div>

			<div class="answers">

				<ol>

					<?php

						/* FAQ Listing (Answers) */

					?>

					<?php

						$args = array(

							'numberposts' 	=> -1,
							'post_type'		=> 'faq',
							'orderby'		=> 'menu_order',
							'post_status'	=> 'publish',
							'order'			=> 'ASC'

						);

						$items = get_posts($args);

					?>

					<?php foreach($items as $item): ?>

					<?php

						$faq_question = get_field('faq_question', $item->ID);

						$faq_answer = get_field('faq_answer', $item->ID);

					?>

						<li id="faq-<?php echo $item->ID; ?>">

							<h2><?php echo $faq_question; ?></h2>

							<?php echo $faq_answer; ?>

						</li>

					<?php endforeach; ?>

				</ol>

			</div>

		</div>

		<div class="secondary">

			<?php get_template_part('inc/h-card'); ?>

		</div>

	</div>

<?php get_footer(); ?>