<?php

/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage OrbitalPress
 * @since OrbitalPress 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if (post_password_required())
    return;
?>

<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            // printf(
            //     _nx('One thougdddht on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number(), 'comments title', 'twentythirteen'),
            //     number_format_i18n(get_comments_number()),
            //     '<span>' . get_the_title() . '</span>'
            // );
            ?>
        </h2>

        <ul class="comment-list">
            <?php
            wp_list_comments(array(
                'style'       => 'ul',
                'short_ping'  => true,
                'callback' => 'better_comments',
                'avatar_size' => 74,
            ));
            ?>
        </ul><!-- .comment-list -->

        <?php
        // Are there comments to navigate through?
        if (get_comment_pages_count() > 1 && get_option('page_comments')) :
        ?>
            <nav class="navigation comment-navigation" role="navigation">
                <h1 class="screen-reader-text section-heading"><?php _e('Comment navigation', 'orbitalpress'); ?></h1>
                <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'orbitalpress')); ?></div>
                <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'orbitalpress')); ?></div>
            </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation 
        ?>

        <?php if (!comments_open() && get_comments_number()) : ?>
            <p class="no-comments"><?php _e('Comments are closed.', 'orbitalpress'); ?></p>
        <?php endif; ?>

    <?php endif;  //have_comments() 
    ?>

    <?php

    // Declare Vars
    $comment_send = 'Send';
    $comment_reply = 'Leave a Message';
    $comment_reply_to = 'Reply';

    $comment_author = 'Name';
    $comment_email = 'E-Mail';
    $comment_body = 'Comment';
    $comment_url = 'Website';
    $comment_cookies_1 = ' By commenting you accept the';
    $comment_cookies_2 = ' Privacy Policy';

    // $comment_before = 'Registration isn\'t required.';

    // $comment_cancel = 'Cancel Reply';

    //Array
    // $comments_args = array(
    //     //Define Fields
    //     'fields' =>  apply_filters('comment_form_default_fields', array(
    //         //Author field
    //         'author' => '<div class="form-group">' . '<label for="formGroupExampleInput">' . $comment_author . '</label>' . '<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">' . '</div>',
    //     )),
    //     // Change the title of send button
    //     'label_submit' => __($comment_send),
    //     // Change the title of the reply section
    //     'title_reply' => __($comment_reply),
    //     // Change the title of the reply section
    //     'title_reply_to' => __($comment_reply_to),
    //     //Cancel Reply Text
    //     'cancel_reply_link' => __($comment_cancel),
    //     // Redefine your own textarea (the comment body).
    //     'comment_field' => '<p class="comment-form-comment"><br /><textarea id="comment" name="comment" aria-required="true" placeholder="' . $comment_body . '"></textarea></p>',
    //     //Message Before Comment
    //     'comment_notes_before' => __($comment_before),
    //     // Remove "Text or HTML to be displayed after the set of comment fields".
    //     'comment_notes_after' => '',
    //     //Submit Button ID
    //     'id_submit' => __('comment-submit'),
    // );
    
    
    
    
    
    
    
    comment_form(array(
        'fields' => array(
            'author' =>
            '<div class="form-group">' . '<label for="formGroupExampleInput">' . '</label>' . '<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">' . '</div>',
        )
    ));
    // apply_filters('comment_form_default_fields', $comment_args); ?>
    
</div><!-- #comments -->