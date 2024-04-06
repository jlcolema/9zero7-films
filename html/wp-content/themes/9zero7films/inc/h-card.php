<div class="h-card">

	<div class="p-adr">

		<div class="label">Address:</div>

		<?php if (get_field('contact_street', 'option')): ?>

			<div class="p-street-address"><?php the_field('contact_street', 'option'); ?></div>

		<?php endif; ?>

		<?php if (get_field('contact_studio', 'option')): ?>

			<div class="p-extended-address">Studio <?php the_field('contact_studio', 'option'); ?></div>

		<?php endif; ?>

		<?php if (get_field('contact_city', 'option')): ?>

			<span class="p-locality"><?php the_field('contact_city', 'option'); ?></span>

		<?php endif; ?>

		<?php if (get_field('contact_state', 'option')): ?>

			<span class="p-region"><?php the_field('contact_state', 'option'); ?></span>

		<?php endif; ?>

		<?php if (get_field('contact_zipcode', 'option')): ?>

			<span class="p-postal-code"><?php the_field('contact_zipcode', 'option'); ?></span>

		<?php endif; ?>

	</div>

	<?php if (get_field('contact_phone', 'option')): ?>

		<div class="p-tel">

			<div class="label">Phone:</div> <?php the_field('contact_phone', 'options'); ?>

		</div>

	<?php endif; ?>

	<?php if (get_field('contact_email', 'option')): ?>

		<div class="u-email">

			<div class="label">Email:</div>

			<a href="mailto:<?php the_field('contact_email', 'options'); ?>"><?php the_field('contact_email', 'options'); ?></a>

		</div>

	<?php endif; ?>

</div>