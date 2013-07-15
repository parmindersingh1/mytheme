<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<div class="sep">&nbsp;</div>
<?php if (have_comments()) { ?>
  <div id="commentspost"><a name="commentspost"></a>
	<h2 class="title"><?php comments_number( __('No Comments', 'wpzoom'), __('1 Comment', 'wpzoom'), __('% Comments', 'wpzoom')); ?></h2>
	<ol class="normalComments"><?php wp_list_comments('type=all&avatar_size=40');?></ol>
	</div><!-- end #commentspost -->

<?php if ('closed' == $post->comment_status) : ?>
<?php endif; ?>
	
 <?php } 
 else { // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) { ?>
		<!-- If comments are open, but there are no comments. -->
<div id="commentspost">
	<h2 class="title">0 <?php _e('Comments', 'wpzoom'); ?></h2>
  <p><?php _e('You can be the first one to leave a comment', 'wpzoom'); ?>.</p>
</div>
	 <?php } else { // comments are closed ?>
		<!-- If comments are closed. -->
	<?php } ?>
<?php } ?>

<?php if ('open' == $post->comment_status) : ?>

<div class="sep">&nbsp;</div>

<div id="respond">
<div class="sep">&nbsp;</div>
<h2 class="title"><?php comment_form_title( __('Leave a Comment', 'wpzoom'), __('Leave a Reply to %s', 'wpzoom') ); ?></h2>
<div class="cleaner">&nbsp;</div>
<div class="cancel-comment-reply"><p><?php cancel_comment_reply_link(); ?></p></div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php _e('You must be', 'wpzoom'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php _e('logged in', 'wpzoom'); ?></a> <?php _e('to post a comment.', 'wpzoom'); ?></p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p><?php _e('Logged in as', 'wpzoom'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account"><?php _e('Log out', 'wpzoom'); ?> &raquo;</a></p>

<?php else : ?>
<div id="formLabels">
<label for="author"><?php _e('Name', 'wpzoom'); ?> <?php if ($req) echo "(required)"; ?>:</label>
<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> /><br />

<label for="email"><?php _e('E-Mail', 'wpzoom'); ?> <?php if ($req) echo "(required)"; ?>:</label>
<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> /><br />

<label for="url"><?php _e('Website', 'wpzoom'); ?>:</label>
<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" /><br />
</div>
<?php endif; ?>
<div id="formContent">
<label for="comment"><?php _e('Comment', 'wpzoom'); ?>:</label>
<textarea name="comment" id="comment" tabindex="4" cols="140" rows="8"></textarea><br />
<input name="submit" type="submit" id="submit" value="<?php _e('Add Comment', 'wpzoom'); ?>" />
</div>
<div class="cleaner">&nbsp;</div>
<div class="sep sepBottom">&nbsp;</div>
<?php comment_id_fields(); ?>
<?php do_action('comment_form', $post->ID); ?>
</form>
<?php endif; // If registration required and not logged in ?>
</div>
<?php endif; // if you delete this the sky will fall on your head ?>