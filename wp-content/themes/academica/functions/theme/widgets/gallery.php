<?php
class WPZOOM_Category_Gallery extends WP_Widget {
	function WPZOOM_Category_Gallery() {
		$widget_ops = array('classname' => 'wpzoom_category_widget', 'description' => 'Special widget. Shows only thumbnails for posts from a category (or all categories).' );
		$this->WP_Widget('wpzoom_category_g', 'WPZOOM: Posts Gallery', $widget_ops);
	}
 
	function widget($args, $instance) {
		extract($args, EXTR_SKIP);
 
		echo'<div class="sep">&nbsp;</div>';
    
    echo $before_widget;
		$title = empty($instance['title']) ? '&nbsp;' : apply_filters('widget_title', $instance['title']);
		$category = empty($instance['category']) ? '&nbsp;' : apply_filters('widget_category', $instance['category']);
		$amount = empty($instance['amount']) ? '&nbsp;' : apply_filters('widget_amount', $instance['amount']);

		if ($category != 'recent')
		{
		  $scategory = "&cat=$category";
    	$cat = get_category($category,false);
      $catlink = get_category_link($category);
    }
  
	echo "$before_title";
	if (strlen($title) > 1 && $title != '&nbsp;' && $category != 'recent') { echo "<a href=\"$catlink\" rel=\"nofollow\">$title &raquo;</a>"; }
	elseif ($category == 'recent') { echo "$title"; }
	echo "$after_title";
	?>
			<ul class="gallery">
			<?php 

				$recent = query_posts("showposts=$amount&cat=$category&orderby=id&order=DESC");
				$i = 0;
				while( have_posts() ) : the_post(); $i++; 
					global $post;
					
					?>

	            <li<?php if ($i == 6) {echo' class="last"';} ?>>
	            
				<?php
				get_the_image( array( 'size' => 'loop-gallery', 'width' => 75, 'height' => 55, 'before' => '', 'after' => '' ) );
				?>
	
	            </li>

			<?php endwhile;	wp_reset_query(); ?>
			</ul>
        
        <div class="clear">&nbsp;</div>
<?php 
// end widget output
    echo $after_widget;
    
	}
 
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['category'] = strip_tags($new_instance['category']);
		$instance['amount'] = strip_tags($new_instance['amount']);
		return $instance;
	}
 
	function form($instance) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'category' => '', 'amount' => '') );
		$title = strip_tags($instance['title']);
		$category = strip_tags($instance['category']);
		$amount = strip_tags($instance['amount']);
?>
			<p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label><input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></p>
      <p><label for="<?php echo $this->get_field_id('category'); ?>">Choose category:</label><select id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>">
      <option value="recent"> - Recent in all categories - </option>

			<?php
				$categories = get_categories('hide_empty=0');
				
				foreach ($categories as $cat) {
 	$option = '<option value="'.$cat->term_id;
  if ($cat->term_id == $category) { $option .='" selected="selected';}
  $option .= '">';
	$option .= $cat->cat_name;
	$option .= ' ('.$cat->category_count.')';
	$option .= '</option>';
	echo $option;
	}
			?>
		</select></p>
      <p><label for="<?php echo $this->get_field_id('amount'); ?>">Show posts:</label><br /><select id="<?php echo $this->get_field_id('amount'); ?>" name="<?php echo $this->get_field_name('amount'); ?>">
<?php
$numbers = array( "6", "12", "18", "24", "30");
				foreach ($numbers as $num ) {
					$option = '<option value="' . $num . '" ' . ( $amount == $num? " selected=\"selected\"" : "") . '>';
						$option .= $num;
					$option .= '</option>';
					echo $option;
				}
?> 
      </select></p>
<?php
	}
}
register_widget('WPZOOM_Category_Gallery'); // 
?>