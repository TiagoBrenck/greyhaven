<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fellowfeather
 */

?>

<article class="content-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="image-content">
			<?php the_post_thumbnail(); ?>
			<button>ADOPT ME</button>
		</div>
		<div class="info-content">
			<div class="info">
				<label>Name: <span><?php echo get_post_custom_values('name')[0]; ?></span></label>
				<label>Age: <span><?php echo get_post_custom_values('age')[0]; ?></span></label>
				<label>Specie: <span><?php echo get_post_custom_values('specie')[0]; ?></span></label>
				<label class="division"></label>
			</div>
			
			<div class="info">
				<label>Noise: <span><?php echo get_post_custom_values('noise')[0]; ?></span></label>
				<label>Talking: <span><?php echo get_post_custom_values('talking')[0]; ?></span></label>
				<label>Cuddling: <span><?php echo get_post_custom_values('cuddling')[0]; ?></span></label>
				<label class="division"></label>
			</div>
			<div class="info">
				<label>Bio:</label>
				<div class="bio">
					<?php
						the_content( sprintf(
							/* translators: %s: Name of current post. */
							wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'fellowfeather' ), array( 'span' => array( 'class' => array() ) ) ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						) );

					?>
				</div>
			</div>
		</div>	
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fellowfeather' ),
				'after'  => '</div>',
			) );

			
			  	
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
