<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fellowfeather
 */

?>

<article class="c-adoption-post-preview" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		 ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div>
			<?php the_post_thumbnail(); ?>
		</div>
		<?php
			the_excerpt();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fellowfeather' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
    <a href="<?php echo get_permalink(); ?>" rel=""> MORE DETAILS</a>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
