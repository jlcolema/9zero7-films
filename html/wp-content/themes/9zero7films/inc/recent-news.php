<div class="recent-news">

	<h2>

		<span>Recent News</span>

	</h2>

	<div class="recent-news-article-listing">

		<?php

			/* Recent News */

		?>

		<?php

			$args = array(

				'post_type' => 'post',
				'numberposts' => 4,
				'orderby' => 'menu-order',
				'order' => 'ASC',
				'post_status' => 'publish'

			);

			$items = get_posts($args);

		?>

		<?php foreach($items as $item): ?>

			<?php

				// Thumbnail Sizes

				$artice_thumbnail_attachment_id = get_field('article_thumbnail', $item->ID);

				$large = 'article_thumbnail_large';

				$medium = 'article_thumbnail_medium';

				$small = 'article_thumbnail_small';

				// Thumbnail

				$article_thumbnail_large = wp_get_attachment_image_src( $article_thumbnail_attachment_id, $full );

				$article_thumbnail_medium = wp_get_attachment_image_src( $article_thumbnail_attachment_id, $medium );

				$article_thumbnail_small = wp_get_attachment_image_src( $article_thumbnail_attachment_id, $small );

			?>

			<article class="summary">

				<div class="thumbnail">

					<a href="<?php echo get_permalink($item->ID); ?>">

						<img src="http://placehold.it/380x300" alt="<?php echo $item->post_title; ?>" />

					</a>

				</div>

				<h1>

					<a href="<?php echo get_permalink($item->ID); ?>"><?php echo $item->post_title; ?></a>

				</h1>

				<footer>

					<time datetime="">September 16, 2015</time>

				</footer>

				<div class="more">

					<a href="<?php echo get_permalink($item->ID); ?>">Read More</a>

				</div>

			</article>

		<?php endforeach; ?>

	</div>

</div>