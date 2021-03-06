<?php
/**
 * The template for displaying the comments.
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/comment-template/
 */

global $mate_use_comments;
if($mate_use_comments){ /* START USE COMMENTS */

// don't load it if you can't comment
if ( post_password_required() ) {
    return;
}

// You can start editing here.

?>

<?php if ( have_comments() ) : ?>

    <h3 id="comments-title" class="h2">
        <?php comments_number( __( '<span>No</span> Comments', 'mate' ), __( '<span>One</span> Comment', 'mate' ), __( '<span>%</span> Comments', 'mate' ) );?>
    </h3>

    <section class="commentlist">

        <?php wp_list_comments( array(
                    'style'             => 'div',
                    'short_ping'        => true,
                    'avatar_size'       => 40,
                    'callback'          => 'mate_comments',
                    'type'              => 'all',
                    'reply_text'        => __('Reply', 'mate'),
                    'page'              => '',
                    'per_page'          => '',
                    'reverse_top_level' => null,
                    'reverse_children'  => '',
                    'format'            => 'HTML5'
                    )
                );
            ?>

    </section>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

    <nav class="navigation comment-navigation">

        <div class="comment-nav-prev"><?php previous_comments_link( __( '&larr; Previous Comments', 'mate' ) ); ?></div>
        <div class="comment-nav-next"><?php next_comments_link( __( 'More Comments &rarr;', 'mate' ) ); ?></div>

    </nav>

    <?php endif; ?>

    <?php if ( ! comments_open() ) : ?>

        <p class="no-comments"><?php _e( 'Comments are closed.' , 'mate' ); ?></p>

    <?php endif; ?>

<?php endif; ?>

<?php comment_form();

} /* END USE COMMENTS */