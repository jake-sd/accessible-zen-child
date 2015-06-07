<?php
/**
 * The template for displaying Category pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package accessiblezen
 * @since accessiblezen 1.0
 */

get_header(); ?>

		<section id="primary" class="content-area cf">
			<main id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="festivals-cat-title">
						<?php accessiblezen_archive_page_title_etc(); ?>
					</h1>
					<?php accessiblezen_term_description(); ?>
				</header><!-- .page-header -->

				<?php rewind_posts(); ?>

				<?php accessiblezen_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<ul class="no-bullet">
						<li>
							<h4>
								<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
							</h4>

								<?php
									$taxonomy = 'cities';

									// get the term IDs assigned to post.
									$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
									// separator between links
									$separator = ', ';

									if ( !empty( $post_terms ) && !is_wp_error( $post_terms ) ) {

										$term_ids = implode( ',' , $post_terms );
										$terms = wp_list_categories( 'title_li=&style=none&echo=0&taxonomy=' . $taxonomy . '&include=' . $term_ids );
										$terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );

									// display post categories
									echo  $terms;
								} ?>
							|
								<?php
									$taxonomy = 'states';

									// get the term IDs assigned to post.
									$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
									// separator between links
									$separator = ', ';

									if ( !empty( $post_terms ) && !is_wp_error( $post_terms ) ) {

										$term_ids = implode( ',' , $post_terms );
										$terms = wp_list_categories( 'title_li=&style=none&echo=0&taxonomy=' . $taxonomy . '&include=' . $term_ids );
										$terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );

									// display post categories
									echo  $terms;
								} ?>
						</li>
					</ul>

				<?php endwhile; ?>

				<?php accessiblezen_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'partials/no-results', 'archive' ); ?>

			<?php endif; ?>

			</main><!-- #content -->
		</section><!-- #primary .content-area -->

<?php get_footer(); ?>