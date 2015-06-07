<?php
/**
 * The template part used for displaying content for single pages.
 *
 * @package accessiblezen
 * @since accessiblezen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_post_thumbnail(); ?>
		<h1 class="entry-title">
			<?php the_title(); ?>
			<?php if (in_category('41') ) { ?>
				<span class="festival">(Festival)</span>
			<?php } ?>
		</h1>

	</header><!-- .entry-header -->

	<div class="entry-content">

	<p>
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
	</p>
		
		<?php if(get_field('festival_dates')) {
		echo '<p><strong>Festival Dates</strong><br>';
			echo get_field('festival_dates') . '</p>';
		} ?>

		<?php if(get_field('festival_url')) { ?>
			<p>
				<a href="<?php echo get_field('festival_url'); ?>" title="Festival URL" target="_blank">
					Link to festival accessibility page
				</a>
			</p>
		<?php } ?>

		<p><strong>Accessibility</strong><br>
		<?php if(get_field('accessibility')) {
			echo get_field('accessibility') . '</p>';
		} ?>

		<p><strong>Inaccessibility</strong><br>
		<?php if(get_field('inaccessibility')) {
			echo get_field('inaccessibility') . '</p>';
		} ?>

		<p><strong>Bathroom Accessibility</strong><br>
		<?php if(get_field('bathroom')) {
			echo get_field('bathroom') . '</p>';
		} ?>

		<?php if(get_field('website')) { ?>
		<p><strong>Website</strong><br>
			<a href="<?php echo get_field('website'); ?>" title="<?php the_title(); ?>" target="_blank">
				<?php echo get_field('website'); ?>
			</a>
		</p>
		<?php } ?>

		<?php if(get_field('address')) { ?>
			<p><strong>Address</strong><br>
				<?php echo get_field('address'); ?> <br>
		<?php } ?>
				<?php if(get_field('google_map')) { ?>
					<a href="<?php echo get_field('google_map'); ?>" title="<?php the_title(); ?>" target="_blank">
						Google Map
					</a>
				<?php } ?> 
			</p>
		

		<?php if(get_field('phone')) { ?>
			<p><strong>Phone</strong><br>
				<?php echo get_field('phone'); ?>
			</p>
		<?php } ?>

		<?php if(get_field('email')) { ?>
			<p><strong>Email</strong><br>
				<a href="mailto:<?php echo get_field('email'); ?>" title="email <?php the_title(); ?>" target="_blank">
					<?php echo get_field('email'); ?>
				</a>
			</p>
		<?php } ?>
		
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'accessiblezen' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php accessiblezen_posted_on(); ?>
		<?php /* accessiblezen_cats_and_tags(); */ ?>
		<?php edit_post_link( __( 'Edit', 'accessiblezen' ), '<span class="edit-link">', '</span>' ); ?>
		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'partials/author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->