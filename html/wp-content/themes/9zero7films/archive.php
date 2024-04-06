<?php get_header(); ?>

	<h1 class="page-title">Category: <?php single_cat_title(); ?></h1>

	<div class="articles">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article class="summary">

				<div class="thumbnail">

					<a href="<?php the_permalink(); ?>">

						<img src="http://placehold.it/520x360" alt="<?php the_title(); ?>" />

					</a>

				</div>

				<h1>

					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

				</h1>

				<footer>

					<time datetime=""><?php the_date('M. j, Y'); ?></time>

				</footer>

				<div class="excerpt">

					<p>Mauris non tempor quam, et lacinia sapien. Mauris accumsan eros eget li.</p>

				</div>

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