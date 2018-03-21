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
		<main id="main" class="site-main p-about" role="main">
			<header class="title">
				<h1 class="bold">About <span>Us</span></h1>
				<div class="banner-container">
					<img src="<?php echo wp_make_link_relative('http://localhost/greyhaven/wp-content/themes/fellowfeather/images/budgies-aboutus.jpg'); ?>" alt="aboutus" id="banner-about-us">
					<div class="banner-title"><h3>Parrot Rescue</h3></div>
					<div class="banner-description"><p>Greyhaven Exotic Bird Sanctuary is a registered non-profit society whose purpose is to protect and enhance the quality of life for exotic birds.</p></div>
				</div>
			</header>

			<section class="container">
				<div class="organization">
					<div></div>
					<div>
						<h3>Our Organization</h3>
						<p>Greyhaven Exotic Bird Sanctuary is a registered non-profit society whose purpose is to protect and enhance the quality of life for exotic birds.</p>
						<p>Greyhaven actively promotes avian welfare and awareness in the community through educational seminars and presentations to local schools, colleges, clubs, and other organizations. Our goal to help people understand the level of devotion and commitment it takes to share one’s home with a companion bird.</p>
						<p>No member of Greyhaven receives monetary remuneration, including its Board of Directors. Our organization is solely operated by volunteers who generously devote their valuable time to the well being of the birds that are under the care and protection of Greyhaven. We are strongly committed to the welfare of our birds, and dedicate each and every day to providing the highest level of care.</p>
						<p>We rely entirely on donations and fundraising to defray costs. The challenge for Greyhaven is to find the resources to care for the ever-increasing number of birds entering its facility. Medical expenses, food, cages, toys and essential equipment are ongoing expenses.</p>
					</div>
				</div>
				<div class="mission">
					<h3>Our Mission</h3>
					<p>Greyhaven Exotic Bird Sanctuary is a volunteer-run, non-profit society whose purpose is to provide rescue and protection for parrots. Through our adoption program, we strive to place parrots in new loving homes.  We provide education and support to parrot guardians and the general public. We oppose the breeding and selling of parrots through pet stores, bird marts or via the internet.</p>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
