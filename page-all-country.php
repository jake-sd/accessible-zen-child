<?php
/*
Template Name: Countries
*/
get_header(); ?>

		<div id="primary" class="content-area cf">
			<main id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'partials/content', 'page' ); ?>

					<div class="custom-post-categories">
						<?php 
							//list terms in a given taxonomy using wp_list_categories

							$taxonomy     = 'countries';
							$orderby      = 'name'; 
							$show_count   = 0;      // 1 for yes, 0 for no
							$pad_counts   = 0;      // 1 for yes, 0 for no
							$hierarchical = 1;      // 1 for yes, 0 for no
							$title        = '';

							$args = array(
							  'taxonomy'     => $taxonomy,
							  'orderby'      => $orderby,
							  'show_count'   => $show_count,
							  'pad_counts'   => $pad_counts,
							  'hierarchical' => $hierarchical,
							  'title_li'     => $title
							);
						?>
						<ul class="no-bullet">
							<?php wp_list_categories( $args ); ?>
						</ul>
					</div>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() )
							comments_template();
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #content -->
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>