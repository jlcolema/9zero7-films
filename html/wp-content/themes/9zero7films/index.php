<?php get_header(); ?>

	<h1 class="page-title">News</h1>

	<div class="articles">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article class="summary">

				<div class="thumbnail">

					<a href="<?php the_permalink(); ?>">

						<?php if (get_field('article_thumbnail')): ?>

							<img src="http://placehold.it/520x360" alt="<?php the_title(); ?>" />

						<?php else: ?>

							<img src="http://placehold.it/520x360" alt="Placeholder Image" />

						<?php endif; ?>

					</a>

				</div>

				<h1>

					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

				</h1>

				<footer>

					<time datetime=""><?php the_date('M. j, Y'); ?></time>

				</footer>

				<?php if (get_field('article_excerpt')): ?>

					<div class="excerpt">

						<?php the_field('article_excerpt'); ?>

					</div>

				<?php endif; ?>

				<div class="more">

					<a href="<?php the_permalink(); ?>">Read More</a>

				</div>

			</article>

		<?php endwhile; ?>

			<div class="summary gap"></div>

		<?php else : ?>

			<h2><?php _e('Nothing Found','bloom'); ?></h2>

		<?php endif; ?>

	</div>

	<?php post_navigation(); ?>

<?php get_footer(); ?>