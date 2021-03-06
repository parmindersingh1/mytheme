<?php
/**
 * Template Name: Page Template, Right Sidebar
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 
 */

get_header(); ?>
      	<div id="main_right_sidebar" class="wrapper">

	<div id="primary_right_sidebar" class="site-content">
		<div id="content_right_sidebar" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>				
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar('right'); ?>
</div><!-- #main_right_sidebar -->
<?php get_footer(); ?>
