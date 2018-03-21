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
		<main id="main" class="site-main p-contact" role="main">
			<header class="title">
				<h1>Contact <span class="bold">Us</span></h1>
			</header>

			<section class="container">
				<div class="left-column">
					<form class="form-container">
						<p>
							<label>Name</label>
							<input type="text" name="txt_name">
						</p>
						<p>
							<label>Email</label>
							<input type="text" name="txt_email">
						</p>
						<p>
							<label>Subject</label>
							<input type="text" name="txt_subject">
						</p>
						<p>
							<label>Message</label>
							<textarea rows="5"></textarea>
						</p>
						<p>
							<input type="submit" name="submit" value="SUBMIT">
						</p>
					</form>
				</div>
				<div class="right-column">
					<div class="address-box">
						<p>For safety, we don't show our shelter address here</p>
						<span class="mailing">MAILING ADDRESS ONLY:</span>
						<div class="address">
							<p>Mailing Box- 441,</p>
							<p>800–15355 – 24th Avenue</p>
							<p>Surrey BC Canada V4A 2H9</p>
							<p class="note">*this is not the shelter address*</p>
							<p>Phone: <span itemprop="telephone"><a href="tel:+16048787212">604-878-7212</a></span></p>
							<p>Email: <a href="mailto:info@greyhaven.bc.ca" />info@greyhaven.bc.ca </a></p>
							<p>Non-Profit Registration Number: 898953419 RR 0001</p>
						</div>
					</div>
				</div>
			</section>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
