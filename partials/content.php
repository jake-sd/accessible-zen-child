<?php
/**
 * The template part used for displaying content for the theme.
 *
 * @package accessiblezen
 * @since accessiblezen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_sticky() ) : ?>
		<?php the_post_thumbnail(); ?>
		<span class="title"><?php _e( 'Featured', 'accessiblezen' ); ?></span>
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php else : ?>	
		<?php the_post_thumbnail(); ?>
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php endif; ?>
		<?php if ( 'post' == get_post_type() ) : ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_category() || is_tag() || is_author() || is_day() || is_month() || is_year() || is_search() ) : // Only display Excerpts for certain pages ?>
	<div class="entry-summary">
		
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

		<ul class="city">
			<?php
			// prints a list of links from a taxonomy
	    		wp_list_categories( $args = array(
	    			'taxonomy' => 'cities', // set custom taxonomy
	    			'title_li' => '',
	    			) 
	    		); 
			?>
		</ul>
		<ul class="city">
			<?php
			// prints a list of links from a taxonomy
	    		wp_list_categories( $args = array(
	    			'taxonomy' => 'states', // set custom taxonomy
	    			'title_li' => '',
	    			) 
	    		); 
			?>
		</ul>
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
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
				$terms = rtrim( trim( str_replace( '<br />|',  $separator, $terms ) ), $separator );

			// display post categories
			echo  $terms;
		} ?>
	</p>

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


		<?php if (is_archive() ) { ?>
			&nbsp;
		<?php } else { ?>
		
		<?php } ?>
		<?php
		if ( get_theme_mod( 'accessiblezen_post_content' ) == '' || 'option2' ) :
		the_content('Continue reading ' . the_title('', '', false) . '');
		else :
		the_excerpt();
		endif;
		?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'accessiblezen' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php //accessiblezen_posted_on(); ?>
		<?php edit_post_link( __( 'Edit', 'accessiblezen' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->