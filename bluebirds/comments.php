<?php 

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h4 class="comments-heading">
			<?php
			$bluebirds_comment_count = get_comments_number();
			if ( '1' === $bluebirds_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One Comment on &ldquo;%1$s&rdquo;', 'bluebirds' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s Comment on &ldquo;%2$s&rdquo;', $bluebirds_comment_count, 'comments title', 'bluebirds' ) ),
					number_format_i18n( $bluebirds_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h4><!-- .comments-title -->

		<?php the_comments_navigation(); ?>
		<div class="content">
		<ul>
			<?php
			wp_list_comments(
				array(
					'style'      => 'li',
					'short_ping' => true,
					'avatar_size'=> 80,
					'reverse_children' => true,
					'callback'   => 'bluebirds_custom_comments',
				)
			);
			?>
		</ul><!-- .comment-list -->
		</div>	
		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'bluebirds' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

//Declare Vars
$comment_send = __('Confirm','bluebirds');
$comment_reply = __('Leave a Comment','bluebirds');
$comment_reply_to = __('Reply','bluebirds');
 
$comment_author = __('Name','bluebirds');
$comment_email = __('E-Mail','bluebirds');
$comment_body = __('Comment','bluebirds');
$comment_url = __('Website','bluebirds');
$comment_cookies_1 = __(' By commenting you accept the','bluebirds');
$comment_cookies_2 = __(' Privacy Policy','bluebirds');
 
$comment_before = __('Registration isn\'t required.','bluebirds');
 
$comment_cancel = __('Cancel Reply','bluebirds');
 
//Array
$comments_args = array(
    //Define Fields
    'fields' => array(
        //Author field
        'author' => '<div class="col-md-6 col-sm-12"><br /><input id="author" name="author" aria-required="true" placeholder="' . $comment_author .'"></div>',
        //Email Field
        'email' => '<div class="col-md-6 col-sm-12"><br /><input id="email" name="email" placeholder="' . $comment_email .'"></div>',
        //URL Field
        'url' => '<div class="col-md-6 col-sm-12"><br /><input id="url" name="url" placeholder="' . $comment_url .'"></div>',
        //Cookies
        'cookies' => '<div class="col-md-6 col-sm-12"><br /> ' . $comment_cookies_1 . '<a href="' . get_privacy_policy_url() . '">' . $comment_cookies_2 . '</a> </div>',
    ),
    // Change the title of send button
    'label_submit' => $comment_send,
    // Change the title of the reply section
    'title_reply' => $comment_reply,
    // Change the title of the reply section
    'title_reply_to' => $comment_reply_to,
    //Cancel Reply Text
    'cancel_reply_link' => $comment_cancel,
    // Redefine your own textarea (the comment body).
    'comment_field' => '<div class="col-md-6 col-sm-12"><br /><textarea id="comment" name="comment" aria-required="true" placeholder="' . $comment_body .'"></textarea></div>',
    //Message Before Comment
    'comment_notes_before' => $comment_before,
    // Remove "Text or HTML to be displayed after the set of comment fields".
    'comment_notes_after' => '',
    //Submit Button ID
    'id_submit' => 'comment-submit',
	// Container Class
	'class_container' => 'submit-comment',
	// Submit Button Field Class
	'submit_field' => '<div class="col-md-6 col-sm-12">%1$s %2$s</div>'

);

comment_form( $comments_args );
	?>

</div>