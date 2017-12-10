<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clemo
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */

$comments_args = array(
	'class_form'          => 'comment-form',
	'class_submit'        => 'submit btn btn-white',
	'label_submit'        => 'Send',
	'title_reply'         => 'Write a Reply or Comment',
	// remove "Text or HTML to be displayed after the set of comment fields"
	'comment_notes_after' => '',
	'comment_field'       => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
);


if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	if ( have_comments() ) : ?>
        <div class="comments-wrap">
            <h2 class="comments-title text-center mt50 pb50">
				<?php
				$comment_count = get_comments_number();
				if ( 1 === $comment_count ) {
					printf(
					/* translators: 1: title. */
						esc_html_e( 'One comment on &ldquo;%1$s&rdquo;', 'clemo' ),
						'<span>' . get_the_title() . '</span>'
					);
				} else {
					printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
						esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'clemo' ) ),
						number_format_i18n( $comment_count ),
						'<span>' . get_the_title() . '</span>'
					);
				}
				?>
            </h2><!-- .comments-title -->

			<?php the_comments_navigation(); ?>

            <ul class="comment-list list-unstyled">
				<?php
				wp_list_comments( array(
					'style'      => 'ul',
					'short_ping' => true,
				) );
				?>
            </ul><!-- .comment-list -->

			<?php the_comments_navigation();

			// If comments are closed and there are comments, let's leave a little note, shall we?
			if ( ! comments_open() ) : ?>
                <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'clemo' ); ?></p>
			<?php endif; ?>
        </div>

	<?php endif; // Check for have_comments().?>
    <div class="ml-4">
		<?php comment_form( $comments_args ); ?>
    </div>
</div><!-- #comments -->
