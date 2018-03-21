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
		<main id="main" class="site-main p-membership" role="main">
      <header class="title-header">
        <h1 class="title"><span class="bold">Membership</span> Matters</h1>
      </header>

			<section class="container">
        <p>
          Becoming a member is so important to the life of our organization! It helps support us when we apply for grants,
          it provides a strong network of like-minded bird lovers and most of all it helps the birds!
        </p>
        <p>
          We rely on caring compassionate bird lovers like you for 95% of our funding.
          Your support is very important to our work and your assistance helps our bird friends every day.
        </p>
        <p>
          Memberships are valid for one calendar year.
        </p>
        <h2>Member’s benefits include:</h2>
        <div>
          <ul class="o-info-list">
            <li>Subscription to our quarterly newsletter “The Squawk Box”</li>
            <li>Gain knowledge about exotic bird keeping from other Members and Volunteers</li>
            <li>Be invited to all Greyhaven functions where you can meet others who share a love for birds</li>
            <li>Members in good standing have the right to attend and vote at Annual General Meetings</li>
            <li>The higher amount of members we have – the more likely we are to get grants and other applied for funds</li>
          </ul>
        </div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
