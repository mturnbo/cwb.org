<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package codingwhileblack
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>

				<div class="section1">
					<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
					labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
					ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
					dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
					deserunt mollit anim id est laborum.
					</p>
				</div>

				<hr class="paddedLine" />

				<div class="section1">
					<div style="display:inline-block">Lorem ipsum dolor sit amet</div>
					<div style="display:inline-block"><input type="text" style="width:400px;" /></div>
					<div style="display:inline-block"><input type="button" value="Submit" /></div>
				</div>

				<hr class="paddedLine" />

				<div class="section1">
					<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
					labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
					</p>
					<p class="centered"><a href="#">More about us</a></p>
				</div>

				<div class="section2 centered">
					<div class="elements1">
						<img src="http://placehold.it/200x100" alt="" />
						<h3>New? Start here </h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>

					<div class="elements1">
						<img src="http://placehold.it/200x100" alt="" />
						<h3>Join the Program</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>

					<div class="elements1">
						<img src="http://placehold.it/200x100" alt="" />
						<h3>Get involved</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>

					<div class="elements1">
						<img src="http://placehold.it/200x100" alt="" />
						<h3>Resource Directory</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>

				</div>

				<hr class="paddedLine" />

				<h2 class="centered">Our Projects</h2>

				<hr />

				<div>
					<div class="tableProjectText" style="padding-right:150px;">
						<span class="projectTitle">CodingWhileBlack.com</span>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
						ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
						dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
						deserunt mollit anim id est laborum.
						</p>
						<button>Visit Site</button>
					</div>
					<div class="tableProjectImage">
						<img src="http://placehold.it/300x250" alt=""  />
					</div>
				</div>

				<hr />

				<div>
					<div class="tableProjectImage">
						<img src="http://placehold.it/300x250" alt=""  />
					</div>
					<div class="tableProjectText" style="padding-left:150px;">
						<span class="projectTitle">WiseBlack.com</span>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
						ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
						dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
						deserunt mollit anim id est laborum.
						</p>
						<div align="right">
						<button>Visit Site</button>
						</div>
					</div>
				</div>

				<hr />

				<div>
					<div class="tableProjectText">
						<span class="projectTitle">BridgeWithBen.org</span>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
						ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
						dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
						deserunt mollit anim id est laborum.
						</p>
						<button>Visit Site</button>
					</div>
					<div class="tableProjectImage">
						<img src="http://placehold.it/300x250" alt=""  />
					</div>
				</div>

				<hr class="paddedLine" />

				<div class="centered">
					<h2>JOIN THE REVOLUTION</h2>
					<p>Lorem ipsum dolor sit amet</p>
					<button>Visit Site</button>
				</div>

				<hr class="paddedLine" />

				<div style="width:100%;">
					<div style="display:table-cell; width:50%;">
						<h3>From Our Blog</h3>
						<div>
							<div style="display:table-cell; width:100px;">
								<img src="http://placehold.it/100x100" alt=""  />
							</div>
							<div style="display:table-cell; vertical-align:top;">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<p>August 12, 2005</p>
							</div>
						</div>
						<div>
							<div style="display:table-cell; width:100px;">
								<img src="http://placehold.it/100x100" alt=""  />
							</div>
							<div style="display:table-cell; vertical-align:top;">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<p>August 12, 2005</p>
							</div>
						</div>
						<div>
							<div style="display:table-cell; width:100px;">
								<img src="http://placehold.it/100x100" alt=""  />
							</div>
							<div style="display:table-cell; vertical-align:top;">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<p>August 12, 2005</p>
							</div>
						</div>
					</div>
					<div style="display:table-cell; width:50%;">
						<h3>From Our Calendar</h3>
						<div>
							<div style="display:table-cell; width:100px;">
								<img src="http://placehold.it/100x100" alt=""  />
							</div>
							<div style="display:table-cell; vertical-align:top;">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<p>August 12, 2005</p>
							</div>
						</div>
						<div>
							<div style="display:table-cell; width:100px;">
								<img src="http://placehold.it/100x100" alt=""  />
							</div>
							<div style="display:table-cell; vertical-align:top;">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<p>August 12, 2005</p>
							</div>
						</div>
						<div>
							<div style="display:table-cell; width:100px;">
								<img src="http://placehold.it/100x100" alt=""  />
							</div>
							<div style="display:table-cell; vertical-align:top;">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<p>August 12, 2005</p>
							</div>
						</div>
					</div>
				</div>

				<hr class="paddedLine" />

				<div class="section1">

					<div style="display:table; width:100%;">
						<div style="display:table-cell; width:60%;">
							Thanks to our partners!  We couldn't do it without you!
						</div>
						<div style="display:table-cell; width:40%; text-align:right;">
							<button>Learn About Partnership</button>
						</div>
					</div>

					<div style="display:table; width:100%;">
						<div style="display:table; margin:auto;">
							<div style="display:table-cell; padding:15px;"><img src="http://placehold.it/120x60" alt="" /></div>
							<div style="display:table-cell; padding:15px;"><img src="http://placehold.it/120x60" alt="" /></div>
							<div style="display:table-cell; padding:15px;"><img src="http://placehold.it/120x60" alt="" /></div>
							<div style="display:table-cell; padding:15px;"><img src="http://placehold.it/120x60" alt="" /></div>
							<div style="display:table-cell; padding:15px;"><img src="http://placehold.it/120x60" alt="" /></div>
						</div>
						<div style="display:table; margin:auto;">
							<div style="display:table-cell; padding:15px;"><img src="http://placehold.it/120x60" alt="" /></div>
							<div style="display:table-cell; padding:15px;"><img src="http://placehold.it/120x60" alt="" /></div>
							<div style="display:table-cell; padding:15px;"><img src="http://placehold.it/120x60" alt="" /></div>
							<div style="display:table-cell; padding:15px;"><img src="http://placehold.it/120x60" alt="" /></div>
							<div style="display:table-cell; padding:15px;"><img src="http://placehold.it/120x60" alt="" /></div>
						</div>
					</div>

				</div>

				<hr class="paddedLine" />

			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
