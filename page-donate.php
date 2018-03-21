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

	<div id="primary" class="index-content-area">
		<main id="main" class="site-main p-donate" role="main">
			<header class="title">
				<div class="ads">
	          <div class="teaser title-header">
	              <h1>WE <span class="bold">NEED</span> <br>YOUR <span class="bold">HELP</span></h1>
	          </div>
	      </div>
			</header>

			<section class="container">

				<?php
				// TO SHOW THE PAGE CONTENTS
				    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
				        <div class="entry-content-page">
				            <?php the_content(); ?> <!-- Page Content -->
				        </div><!-- .entry-content-page -->

				    <?php
					endwhile; //resetting the page loop
					wp_reset_query(); //resetting the page query
				?>

				<div class="button-area">
					<div>
						<a href="https://www.canadahelps.org/CharityProfilePage.aspx?CharityID=d77773"><img src="//www.canadahelps.org/image/DonateNowLink/en/Donate2.png" border="0" alt="Donate Now Through CanadaHelps.org!"/></a>
					</div>

					<div>
						<script type="text/javascript" src="https://chimp.net/widget/js/loader.js?NDAzNjYsbGFyZ2Usb3JhbmdlLEdyZXloYXZlbiBFeG90aWMgQmlyZCBTYW5jdHVhcnksQmVuZWZpY2lhcnk%3D" id="chimp-button-script"></script>
					</div>


				</div>
			</section>
			<div class="banner">
        <img src="<?php echo wp_make_link_relative('http://localhost/Greyhaven/wp-content/themes/fellowfeather/images/Amazon.jpg'); ?>">
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
