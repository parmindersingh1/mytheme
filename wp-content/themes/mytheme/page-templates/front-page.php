<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 */

get_header(); ?>
  <div class="banner">
                     <div class="banner_menu"> 
<a class="banner_menu1" href="/principals-welcome">Principals Welcome</a>
<a class="banner_menu1" href="/newsletters">Newsletters</a>
<a class="banner_menu1" href="/plans-and-reports">Plans-and-reports</a>
<a class="banner_menu1" href="/employment">Employment</a>
<a class="banner_menu1" href="/calendar">Calendar</a>
<div class="clr"></div>

                     </div>
                   <div id="slider">
                <?php echo do_shortcode("[metaslider id=28]"); ?>                         
                    </div>
                </div>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-page-image">
						<?php the_post_thumbnail(); ?>
					</div><!-- .entry-page-image -->
				<?php endif; ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_sidebar('front'); ?>
<?php get_footer(); ?>