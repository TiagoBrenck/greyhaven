<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fellowfeather
 */

?>

<article class="post recent-rescue-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
            <h3> <?php the_title(); ?> </h3>
	</header><!-- .entry-header -->

	<div class="entry-content">
		
		<?php
            the_post_thumbnail();
                        
			the_excerpt();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fellowfeather' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
        
        <footer>
            <a href="<?php the_permalink() ?>"> Read More </a>
        </footer>
	
</article><!-- #post-## -->
