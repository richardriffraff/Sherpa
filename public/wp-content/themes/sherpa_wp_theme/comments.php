<?php
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly.  Thanks!');
		
	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected.  Enter the password to view comments.</p>
	<?php
		return;
	}		
?>


<section id="comments">
	<h2 class="title creighton"><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></h2>
	
<?php if (have_comments()) { ?>
	
	<ol>
		<?php wp_list_comments('type=comment') ?>
	</ol>
	
<?php } else { ?>
	
	<p>Why not be the first person to comment!</p>
	
<?php } ?>
	
	
</section>

<?php  if(comments_open()) : ?>
	
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" class="frmComment">
		<fieldset>
			<legend class="title creighton"><span>Leave a reply...</span></legend>	
			<dl class="clearfix">
				<dt><label for="frmName">Name:</label></dt>
				<dd><input type="text" name="author" title="Enter Your Name" class="textfield" id="frmName" value="Required" /></dd>
				<dt><label for="frmEmail">Email:</label></dt>
				<dd><input type="text" name="email" title="Enter Your Email Adress" class="textfield" id="frmEMail" value="Required (but not published)" /></dd>
				<dt><label for="frmWebsite">Website:</label></dt>
				<dd><input type="text" name="url" title="Enter Your Website Adress" class="textfield" id="frmWebsite" /></dd>
				<dt><label for="frmReply">Reply:</label></dt>
				<dd><textarea cols="4" rows="3" name="comment" class="textarea">Enter your reply...</textarea></dd>
			</dl>
			<button type="submit" class="btn btn1" title="Post Your Reply"><span>Post Your Reply</span><i></i></button>
		</fieldset>
	</form>
	
<?php else : ?>
	<p>Comments Are closed for the time being</p>
	
<?php endif; ?>

