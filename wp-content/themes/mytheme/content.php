<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'twentytwelve' ); ?>
		</div>
		<?php endif; ?>

          
		<header class="entry-header">
			<?php the_post_thumbnail(); ?>
                        <span class="entry-date"><?php echo get_the_date(); ?></span> 
			<?php if ( is_single() ) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>                         
			<?php else : ?>			     
                		<h1 class="entry-title">
				<?php the_title(); ?>
			</h1>
			                      
			<?php endif; // is_single() ?>
			<?php if ( comments_open() ) : ?>
				

			<?php endif; // comments_open() ?>
		</header><!-- .entry-header -->
       

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>

               <?php
                 if('gallery' == get_post_type())
                 {?>
                   <div class="entry-content" id="gallery-content" >
                <?php } 
                 else
                 {?>
                  <div class="entry-content" >
                <?php }
               ?>
                                        
					<?php the_content( __( 'read more <span class="meta-nav">»</span>', 'twentytwelve' ) ); ?>
<?php if ( is_single() ) : ?>
<?php if ( is_singular( 'post' )) : ?>
<a href="/wordpress/news/">View All</a>
<?php endif; // is_singlular() ?>
<?php endif; // is_single() ?>

<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
			
		<?php endif; ?>               




	</article><!-- #post -->
