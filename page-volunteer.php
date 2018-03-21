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
		<main id="main" class="site-main p-volunteer" role="main">
      <header class="title-header">
        <h1 class="title"><span class="bold">Volunteers</span> Needed</h1>
        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>

				<ul class="o-info-list">
					<li>WPR bird care / cleaning – convenient Vancouver location close to transit </li>
					<li>For Greyhaven bird care / cleaning – South Delta </li>
					<li>For fundraising </li>
				</ul>
      </header>

			<section class="container">

				<h2>Volunteering can be a very rewarding and fun experience</h2>
				<div>
					<p> Our organization is solely operated by volunteers who generously devote
						their valuable time to the well being of the birds that are under the care and protection of Greyhaven.
						We are strongly committed to the welfare of our birds and dedicate each and every day to providing the highest level of care.
						No member of Greyhaven receives monetary remuneration, including the Board of Directors.
					</p>
					<P>
						Your contribution can help us continue doing our valuable work for homeless birds and work with in the community.
						Any time you could give would be greatly appreciated. We have various areas that we need help in.
					</P>
				</div>

				<h2>How to Become a Volunteer</h2>
				<div>
					<h4>Are you interested in becoming a Greyhaven volunteer?</h4>
					<h4>These are the basic steps that are taken if an individual is interested in becoming a volunteer.</h4>
					<ol>
						<li>Potential volunteers are asked to fill out a volunteer application.</li>
						<li>Applications are reviewed by a Director of Education.</li>
						<li>Volunteers accepted into the volunteer program are assigned to a volunteer position of interest.</li>
						<li>Candidates attend specific training sessions that pertain to their volunteer position.</li>
						<li>At the shelter volunteers will receive hands-on instruction, from experienced volunteers, until they become comfortable handling their responsibilities.</li>
					</ol>
				</div>

			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
