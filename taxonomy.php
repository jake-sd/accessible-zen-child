<?php
/**
 * The template for displaying Custom Taxonomy Archive pages.
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

				<header class="page-header hentry">
					<h1 class="entry-title">
						<?php accessiblezen_archive_page_title_etc(); ?>
					</h1>
					<?php accessiblezen_term_description(); ?>
				</header><!-- .page-header -->

				<?php rewind_posts(); ?>

				<?php accessiblezen_content_nav( 'nav-above' ); ?>

				<p>
					Click on a venue to find out more information.
				</p>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<ul class="no-bullet">
						<li>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title(); ?>
							</a>
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