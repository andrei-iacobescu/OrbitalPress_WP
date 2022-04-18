<?php
if (!function_exists('better_comments')) :
    function better_comments($comment, $args, $depth)
    {
?>
        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>" style="list-style-type: none;">
            <!-- Comment Item -->
            <div class="comment-item col-12">

                <div class="col-12  mobile">
                    <div class="comment">
                        <div class="media-object">

                            <?php echo get_avatar($comment, $size = '80', $default = ''); ?>
                            <div class="name">
                                <span class="comment-author"><?php echo get_comment_author() ?></span>
                                <span class="comment-date"><?php printf(/* translators: 1: date and time(s). */esc_html__('%1$s at %2$s', '5balloons_theme'), get_comment_date(),  get_comment_time()) ?></span>
                            </div>

                            <div class="reply ml-auto">

                                <span>
                                    <a href="#">
                                        <i class="fa-solid fa-reply"></i>
                                        <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                                    </a>
                                </span>
                            </div>

                        </div>
                        <div class="media">
                            <div class="comment"> <?php comment_text() ?></div>
                            <div class="thumbs">
                                <div class="like">
                                    <span>0</span>
                                    <a href="#"><i class="fa-solid fa-thumbs-up"></i></a>
                                </div>
                                <div class="dislike">
                                    <span>0</span>
                                    <a href="#"><i class="fa-solid fa-thumbs-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <!-- Divider -->
            <div class="divider"></div>

    <?php
    }
endif;
