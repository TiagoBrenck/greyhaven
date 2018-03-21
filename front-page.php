<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fellowfeather
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main p-front-page" role="main">
			<section class=recent-rescues-container>
				<?php echo do_shortcode('[smartslider3 slider=4]'); ?>
				<?php
	 		 	$recent_query = new WP_Query( array(
                                    'category_name' => 'recent-rescue',
                                    'posts_per_page' => '3',
                                    'orderby' => 'date',
                                ) );

                                ?>
                                <div class="post-container">
                                	<h1 class="title"><span class="bold">Recent</span> Birds</h1>
                                    <?php

                                    while ( $recent_query->have_posts() ) : $recent_query->the_post();

                                            get_template_part( 'template-parts/content', 'recent-rescue' );

                                    endwhile; // End of the loop.
                                    ?>
                                </div>
			</section>
			<section class=help-container>
				<?php
					get_template_part( 'template-parts/content', 'need-help' );
				?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
