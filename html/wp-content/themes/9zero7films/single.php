<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="hentry">

			<h1><?php the_title(); ?></h1>

			<div class="content">

				<div class="primary">

					<?php if( have_rows('article_content') ): ?>

						<?php while ( have_rows('article_content') ) : the_row(); ?>

							<!-- Text -->

							<?php if( get_row_layout() == 'article_text_block' ): ?>

								<div class="matrix-text">

									<?php the_sub_field('article_text'); ?>

								</div>

							<!-- Image -->

							<?php elseif( get_row_layout() == 'article_image_block' ): ?>

								<div class="matrix-image">

									<img src="<?php the_sub_field('article_image'); ?>" alt="" />

								</div>

							<!-- Video -->

							<?php elseif( get_row_layout() == 'article_video_block' ): ?>

								<div class="matrix-video">

									<p>Hi, I'm a new video block.</p>

								</div>

							<!-- Testimonial -->

							<?php elseif( get_row_layout() == 'article_testimonial_block' ): ?>

								<div class="matrix-testimonial">

									<p>Hi, I'm a new testimonial block.</p>

								</div>

							<?php endif; ?>

						<?php endwhile; ?>

					<?php else: ?>

						<p>No layouts found.</p>

					<?php endif; ?>





					<div class="matrix-image">

						<figure>

							<img src="http://placehold.it/900x506" alt="Description of image." />

							<figcaption>

								<span class="label">Description:</span> A very nice description of the image above.

							</figcaption>

						</figure>

					</div>

					<div class="matrix-text">

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam feugiat lorem at justo pellentesque, ac molestie nisi scelerisque. <a href="http://9zero7films.dev/">Malesuada eu sapien</a>. Maecenas id pulvinar sapien, sit amet porttitor enim. Pellentesque augue ligula, dapibus id interdum at, tempor ut diam. Aenean elit sapien, vestibulum egestas lorem vitae, ultricies finibus neque.</p>

						<ol>

							<li>Suspendisse ligula felis, pellentesque in leo vitae, bibendum sagittis metus.</li>
							<li>Quisque eget quam ligula.</li>
							<li>Vivamus a malesuada augue.</li>

						</ol>

						<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam aliquet, dui vitae eleifend commodo, odio lectus euismod purus, at suscipit urna dui vel urna.</p>

						<h2>Sed eget sagittis ex, quis fermentum nibh pellentesque eleifend lectus id lacinia venenatis.</h2>

						<p>Suspendisse egestas nisi et fermentum luctus. Mauris sit amet nunc at sem auctor aliquam at a orci. Etiam vel nisi ultricies urna placerat faucibus at vitae diam. Duis sed cursus diam. Maecenas non tempus erat. Sed ut semper ante. <strong>Proin dignissim, est vitae ullamcorper blandit</strong>, erat nulla laoreet erat, quis euismod nulla augue vel velit.</p>

						<p>Sed rutrum nibh ut viverra semper. Quisque lobortis ultricies facilisis. Nulla mauris neque, luctus sed sapien vitae, imperdiet laoreet lacus. Vivamus ex lectus, porta a velit a, ullamcorper auctor massa. Aenean vulputate erat at congue efficitur. Nullam varius egestas ex. <em>Fusce imperdiet tellus et luctus suscipit</em>. Nulla ut dui a massa mollis tincidunt. Pellentesque eu sem eu purus pellentesque feugiat non quis est. Nulla pretium, eros et faucibus molestie, nisi justo faucibus lacus, et venenatis ex augue nec nunc. Nunc id nunc massa.</p>

						<ul>

							<li>Suspendisse ligula felis, pellentesque in leo vitae, bibendum sagittis metus.</li>
							<li>Quisque eget quam ligula.</li>
							<li>Vivamus a malesuada augue.</li>

						</ul>

						<p>Nulla venenatis condimentum est, sed efficitur purus congue id. Vivamus a malesuada augue. Donec consequat interdum nisi nec laoreet. Morbi ultrices varius dui, vitae pulvinar nibh ornare sed. Donec semper gravida neque scelerisque bibendum. In eu rutrum mi. Quisque luctus tellus ut sem maximus vehicula. Nunc vel varius nisi, vitae venenatis erat. Cras mollis interdum enim, ac pretium ligula feugiat eu. In sed lectus ut ipsum euismod sodales eget sed augue.</p>

						<h3>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</h3>

					</div>

					<div class="matrix-image left">

						<img src="http://placehold.it/240x210" alt="Description of image." />

					</div>

					<div class="matrix-text">

						<p>Ut mattis non enim quis pretium. Suspendisse blandit mollis libero sit amet commodo. Quisque sagittis iaculis risus congue rhoncus. Mauris fermentum elit sit amet nunc ullamcorper, non iaculis eros suscipit. Ut facilisis accumsan nunc. Vivamus finibus ut erat ut mollis. Quisque sed lacus enim. Nulla facilisi. Suspendisse non faucibus neque. Quisque lacus elit, sodales a laoreet sollicitudin, elementum sit amet tellus. Quisque metus lorem, ornare non aliquam sit amet, gravida et est. Maecenas quis malesuada ante. Mauris ac neque sit amet justo varius pulvinar quis et enim. Proin aliquet eget enim non ornare. Suspendisse cursus risus nec enim suscipit commodo ac a ligula.</p>

						<p>Suspendisse ligula felis, pellentesque in leo vitae, bibendum sagittis metus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean congue erat in mauris viverra eleifend in eget nunc. Aliquam orci erat, blandit quis lorem quis, pellentesque placerat justo. Sed arcu nunc, lacinia quis magna vel, tempor tempus urna. In sit amet mi dapibus, consectetur lorem ac, aliquet metus. Morbi faucibus vitae purus sit amet varius.</p>

						<p>Etiam ut tincidunt sapien, eu gravida enim vivamus congue leo tellus, id pellentesque justo finibus at. Maecenas rhoncus magna eget quam bibendum, ut iaculis massa facilisis. Sed sed condimentum tortor, eget tristique mauris. Morbi eu imperdiet nunc. In interdum non ipsum sit amet molestie. Aenean vel eros ornare, ornare elit et, tincidunt quam. Sed ac erat et nulla aliquam euismod eget eget quam. Quisque eget quam ligula. Suspendisse euismod dui vitae euismod tincidunt. Morbi accumsan purus sit amet mattis laoreet.</p>

						<p>Suspendisse vitae nibh elementum sapien cursus hendrerit. Mauris varius tortor maximus, gravida lorem nec, commodo massa. Pellentesque malesuada erat quis lacus aliquet lacinia. Quisque vel est a augue porta scelerisque vitae vel risus. Pellentesque nec nisl luctus, dapibus orci a, ornare est.</p>

					</div>

					<div class="matrix-blockquote">

						<blockquote>Duis finibus, ante eu laoreet pulvinar, mauris nulla vulputate neque, nec lacinia mauris est in ipsum. Proin vestibulum blandit odio a pharetra. Pellentesque sed nulla ut arcu vestibulum facilisis. Ut vitae congue risus. Quisque mattis leo non ornare viverra. Aliquam eget massa neque. Cras nec placerat magna.</blockquote>

					</div>

					<div class="matrix-text">

						<p>Duis eu pellentesque neque, non ullamcorper lectus. Etiam ut tellus congue turpis bibendum accumsan. Etiam non condimentum neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean tempus ipsum purus, vel consequat sapien feugiat ac. Maecenas vestibulum est vel arcu vestibulum, a tempor nulla maximus. Vivamus hendrerit dolor consequat dignissim dignissim.</p>

						<p>Maecenas eu fringilla nisl, nec hendrerit est. Maecenas quis nibh eget ipsum bibendum facilisis. Proin dapibus diam eget rhoncus efficitur. Duis mollis ante at bibendum pharetra. Praesent ultricies mollis accumsan. Nunc feugiat quis velit eget commodo. Praesent ultricies iaculis erat, nec fermentum est pharetra non. Nulla facilisi. Sed sollicitudin mauris ac magna scelerisque vulputate. Etiam sit amet nisi vel eros finibus sodales. Nullam egestas fringilla eros a aliquet. Mauris et mollis erat, in eleifend turpis.</p>

					</div>

					<div class="matrix-image right">

						<img src="http://placehold.it/240x210" alt="Description of image." />

					</div>

					<div class="matrix-text">

						<p>Vivamus sit amet neque ut arcu maximus gravida. Mauris sodales quam vel finibus auctor. Vestibulum eget nulla turpis. Cras eros augue, semper nec malesuada vel, elementum sed sem. Aenean ac maximus ex, mattis dictum enim. Sed ultrices leo in tellus iaculis imperdiet. Morbi auctor arcu nec elit interdum dapibus. Integer sed leo odio. Aliquam nec ultricies risus, vel porta lectus. Sed accumsan placerat leo, at aliquam felis rhoncus aliquam. Curabitur in sodales massa. Aenean dui est, commodo ac venenatis et, aliquam eu neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse interdum enim quis volutpat sollicitudin. Morbi bibendum est non egestas rhoncus. Cras tempor sagittis nibh sit amet pharetra.</p>

						<p>Quisque sagittis, libero in sagittis imperdiet, magna felis tincidunt erat, sit amet sagittis libero risus sed diam. Etiam vestibulum non purus in gravida. Nulla facilisi. Nunc lectus purus, gravida quis ligula vehicula, pulvinar venenatis nibh. Aenean hendrerit eleifend lacus, vel ultrices nisi ultricies eget. Mauris neque quam, laoreet varius maximus id, auctor sit amet ante. Maecenas sed felis sit amet risus varius rutrum nec eu enim. Ut commodo sollicitudin purus ut auctor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras volutpat tristique neque sit amet pulvinar. Cras sed sem ac dolor ornare sagittis. Morbi augue augue, gravida vitae mi sit amet, ornare tempor libero. Donec sagittis fermentum magna eget aliquam. Etiam fermentum mi a lacinia varius.</p>

						<p>Morbi venenatis velit non interdum bibendum. Phasellus iaculis ornare elementum. Vivamus ac imperdiet ligula, eget ultrices diam. Vivamus sed tincidunt turpis. Integer eu auctor eros. Nullam finibus laoreet venenatis. Nunc ac sem cursus, faucibus sem a, aliquam turpis. Praesent bibendum magna vitae pulvinar fermentum. Mauris at sollicitudin orci, sed tempus leo. Fusce quis magna tristique, eleifend metus sed, sodales sapien. Suspendisse sit amet massa consequat nulla lacinia sagittis.</p>

					</div>

					<div class="matrix-video">

						<iframe width="900" height="506" src="https://www.youtube.com/embed/6FN1Y-Mbsr4?rel=0" frameborder="0" allowfullscreen></iframe>

					</div>

					<div class="matrix-text">

						<p>In ullamcorper ac eros eu efficitur. Donec a orci orci. Suspendisse egestas lacus in risus feugiat, eget maximus mauris condimentum. Duis ut ante et diam feugiat tincidunt. Morbi nec velit vitae sapien elementum sagittis. Fusce sed luctus massa, quis mollis dolor. Suspendisse facilisis orci et maximus feugiat. Sed quis congue erat. Cras porta efficitur magna, dictum sagittis urna laoreet semper. Etiam ac nunc orci.</p>

						<h4>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</h4>

						<p>Vestibulum eget pretium elit. Pellentesque nec tempor augue. In velit ipsum, porttitor et vulputate et, sollicitudin ac mi. Aliquam placerat non magna quis auctor. Sed sagittis nisi vitae lectus semper, id semper quam consequat. Nulla posuere, ex in iaculis ultricies, nulla libero sollicitudin dui, ut tristique orci leo ut tortor. Fusce laoreet tincidunt lacus id posuere. Donec et metus sit amet diam lobortis aliquet. Aenean eget vestibulum mauris. Sed id est lacus. Aenean sed congue diam. Nullam pretium dictum elit non tempus. Suspendisse potenti. Pellentesque mattis lorem vitae dolor porttitor, vitae condimentum magna vulputate. Pellentesque bibendum lorem ut lorem dictum, ut venenatis orci tempus.</p>

						<p>Aliquam id augue lobortis, pellentesque leo sit amet, bibendum est. Morbi quis ex nec eros efficitur imperdiet vitae id dolor. Pellentesque et lectus vitae augue pretium lobortis. Fusce ante orci, rutrum non ultrices sit amet, pellentesque vitae lacus. Proin at mattis risus. Suspendisse sem magna, ultrices at lectus at, laoreet lobortis tortor. Fusce viverra vestibulum dui id ultrices. Suspendisse eu rhoncus massa, eget sodales elit. Proin gravida dolor at sapien congue, sed vehicula nisi rutrum.</p>

					</div>

				</div>

				<div class="secondary">

					<footer>

						<div class="published-on">

							<span class="label">Published On:</span> <?php the_date('M. j, Y'); ?>

						</div>

						<div class="categories">

							<span class="label">Categories:</span>

							<?php

								$categories = get_the_category();

								$separator = ', ';

								$output = '';

								if($categories){

									foreach($categories as $category) {

										$output .= '<a href="'.get_category_link( $category->term_id ).'">'.$category->cat_name.'</a>'.$separator;

									}

									echo trim($output, $separator);

								}

							?>

						</div>

					</footer>

					<div class="share">

						<span class="label">Share:</span>

						<ul>

							<li class="facebook">

								<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" rel="external">Facebook</a>

							</li>

							<li class="google">

								<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" rel="external">Google</a>

							</li>

							<li class="twitter">

								<a href="https://twitter.com/home?status=Check%20out%20this%20article%20by%209ZERO7%20Films:%20<?php the_title(); ?> <?php the_permalink(); ?>" rel="external">Twitter</a>

							</li>

							<li class="mail">

								<a href="mailto:?subject=Reading Recommendation&amp;body=Check out this article: <?php the_title(); ?> <?php the_permalink() ?>.">Mail</a>

							</li>

						</ul>

					</div>

				</div>

			</div>

		</article>

	<?php endwhile; endif; ?>

	<?php get_template_part( 'inc/recent-news' ); ?>

<?php get_footer(); ?>