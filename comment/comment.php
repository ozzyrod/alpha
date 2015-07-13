<?php
/**
 * A template part for displaying a comment.
 *
 * @package     Alpha
 * @subpackage  CareLib
 * @copyright   Copyright (c) 2015, WP Site Care, LLC
 * @license     GPL-2.0+
 * @since       1.0.0
 */
?>
<li <?php alpha_attr( 'comment' ); ?>>

	<?php echo get_avatar( $comment, 48 ); ?>

	<article class="comment-container">

		<header class="comment-meta">
			<cite <?php alpha_attr( 'comment-author' ); ?>><?php comment_author_link(); ?></cite>
			<a <?php alpha_attr( 'comment-permalink' ); ?>>
				<time <?php alpha_attr( 'comment-published' ); ?>>
					<?php
					printf(
						esc_attr__( '%s ago', 'alpha' ),
						human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) )
					);
					?>
				</time>
			</a>
			<?php edit_comment_link(); ?>
		</header><!-- .comment-meta -->

		<div <?php alpha_attr( 'comment-content' ); ?>>
			<?php if ( ! $comment->comment_approved ) : ?>
				<p class="alert">
					<?php esc_attr_e( 'Your comment is awaiting moderation.', 'alpha' ); ?>
				</p>
			<?php endif; ?>
			<?php comment_text(); ?>
		</div><!-- .comment-content -->

		<?php if ( alpha_get_comment_reply_link() ) : ?>
			<footer class="comment-meta">
				<?php alpha_comment_reply_link(); ?>
			</footer><!-- .comment-meta -->
		<?php endif; ?>

	</article>
