<?php
/**
 * The template part used for displaying content for the theme.
 *
 * @package accessiblezen
 * @since accessiblezen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<ul class="no-bullet">
		<li>
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</li>
	</ul>
</article><!-- #post-<?php the_ID(); ?> -->