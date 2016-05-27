<?php
/**
 * Template Name: Home
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="home-toc">
				<div class="home-toc-item">
					<div class="home-toc-icon">
						<i class="fa fa-bone"></i>
					</div>
					<p>If you live on the island or abroad, we have plenty of dogs that need new homes.</p>
					<ul>
						<li><a href="<?php site_url(); ?>">View adoptions</a></li>
						<li><a href="<?php site_url(); ?>">Before you adopt</a></li>
						<li><a href="<?php site_url(); ?>">Adopting from outside of Spain</a></li>
					</ul>
				</div>
				<div class="home-toc-item">
					<div class="home-toc-icon">
						<i class="fa fa-heart"></i>
					</div>
					<p>We are completely volunteer-powered and all donations go to the benefit of the welfare of the dogs.</p>
					<ul>
						<li><a href="<?php site_url(); ?>">Donate today</a></li>
						<li><a href="<?php site_url(); ?>">Become a member</a></li>
						<li><a href="<?php site_url(); ?>">Sponsor a dog</a></li>
				</div>
				<div class="home-toc-item">
					<div class="home-toc-icon">
						<i class="fa fa-people"></i>
					</div>
					<p>We're in need of volunteers for a number of tasks, see how you can help below:</p>
					<ul>
						<li><a href="<?php site_url(); ?>">Volunteer at the shelter</a></li>
						<li><a href="<?php site_url(); ?>">Foster a dog at your home</a></li>
						<li><a href="<?php site_url(); ?>">Run a local business?</a></li>
						<li><a href="<?php site_url(); ?>">Flying out of Fuerteventura?</a></li>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
