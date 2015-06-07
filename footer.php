<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after.
 *
 * @package accessiblezen
 * @since accessiblezen 1.0
 */
?>

	<?php get_sidebar(); ?>
	</div><!-- #main -->

	<footer id="colophon" class="site-footer cf" role="contentinfo">
		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav role="navigation" class="main-navigation cf">
				<h1 class="screen-reader-text"><?php _e( 'Main Menu', 'accessiblezen' ); ?></h1>

				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class'      => 'nav', 'depth' => 1 ) ); ?>
			</nav><!-- .main-navigation -->
		<?php endif; ?>
		
		<?php if ( has_nav_menu( 'secondary' ) ) : ?>	
			<nav role="navigation" class="secondary-navigation cf">
				<h1 class="screen-reader-text"><?php _e( 'Secondary Menu', 'accessiblezentopmenu' ); ?></h1>

				<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class'      => 'nav', 'depth' => 1 ) ); ?>
			</nav><!-- .secondary-navigation -->
		<?php endif; ?>
		
		<div class="site-info cf">
			<?php accessiblezen_credits(); ?>
			<p>Built &amp; Maintained in DC by: <a href="https://twitter.com/SeanJGray" title="SeanJGray" target="_blank">Sean Gray</a> &amp; <a href="http://twitter.com/jsequential" title="jsequential" target="_blank">Jake Reid</a></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
	<div class="skip-container cf">
		<a class="skip-link" href="#page"><?php _e( '&uarr; Back to the Top', 'accessiblezen' ); ?></a>
	</div><!-- .skip-container -->
</div><!-- #page .hfeed .site -->
<script src="<?php bloginfo('template_directory'); ?>/js/main-navigation.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58564351-1', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_footer(); ?>

</body>
</html>