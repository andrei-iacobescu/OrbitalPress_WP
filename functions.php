<?php
require get_template_directory() . '/comment-helper.php';


function orbitalpress_files() {
    
    wp_enqueue_script('popper_js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js', null, null, true);
    wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', null, null, true);
    wp_enqueue_script('slick_js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', null, null, true);
    
    wp_enqueue_script('orbitalpress_main_js', get_theme_file_uri('/js/script.js'), NULL, '1.0', true);

    
    wp_enqueue_style('animateCss', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
    wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
    wp_enqueue_style('slick_css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css');
    wp_enqueue_style('news_category_navbar', get_theme_file_uri('/css/news-category-navbar.css'));
    wp_enqueue_style('news_post', get_theme_file_uri('/css/news-post.css'));
    wp_enqueue_style('orbitalpress_main_style', get_stylesheet_uri());
    wp_enqueue_style('orbitalpress_custom_style', get_theme_file_uri('/custom.css'));
}






add_action('wp_enqueue_scripts', 'orbitalpress_files');




function orbitalpress_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocation', 'Footer Menu Location');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'orbitalpress_features');

// add_theme_support('admin-bar', array( 'callback' => '__return_false'));


// add_filter('show_admin_bar', '__return_false');




function custom_excerpt_length($length) {
    return 15;
}
add_filter('excerpt_length', 'custom_excerpt_length', 50);




function custom_excerpt_more($more) {
    return '';
}
add_filter('excerpt_more', 'custom_excerpt_more');


function custom_get_archive_link() {
    return '/category/' . strtolower(single_post_title('', false));

}


function get_breadcrumb()
{
    echo '<a href="' . home_url() . '" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
        if (is_single()) {
            echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
            the_title();
        }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}








































// Custom Fields Functions



// News Item Thumb Blog Page - Display Image ID Return
function news_item_image_thumb() {
    $image = get_field('news_item_image_thumbnail');
    $size = 'large';
    if ($image) {
        echo wp_get_attachment_image($image, $size);
    }
}

function news_item_image_thumb_thumbsize()
{
    $image = get_field('news_item_image_thumbnail');
    $size = 'thumb';
    if ($image) {
        echo wp_get_attachment_image($image, $size);
    }
}



// News Item Date Blog Page
function news_date() {
    the_field('news_date');
}


// Page.php Custom Tagline Post Display
function custom_post_tag() {
    if (is_singular()) {
        echo get_the_tag_list(single_tag_title());
    }
}




//  GET CATEGORY TAGS

function get_tags_in_use($category_ID, $type = 'name') {
    // Set up the query for our posts
    $my_posts = new WP_Query(array(
        'cat' => $category_ID, // Your category id
        'posts_per_page' => -1 // All posts from that category
    ));

    // Initialize our tag arrays
    $tags_by_id = array();
    $tags_by_name = array();
    $tags_by_slug = array();

    // If there are posts in this category, loop through them
    if ($my_posts->have_posts()) : while ($my_posts->have_posts()) : $my_posts->the_post();

            // Get all tags of current post
            $post_tags = wp_get_post_tags($my_posts->post->ID);

            // Loop through each tag
            foreach ($post_tags as $tag) :

                // Set up our tags by id, name, and/or slug
                $tag_id = $tag->term_id;
                $tag_name = $tag->name;
                $tag_slug = $tag->slug;

                // Push each tag into our main array if not already in it
                if (!in_array($tag_id, $tags_by_id))
                array_push($tags_by_id, $tag_id);

                if (!in_array($tag_name, $tags_by_name))
                array_push($tags_by_name, $tag_name);

                if (!in_array($tag_slug, $tags_by_slug))
                array_push($tags_by_slug, $tag_slug);

            endforeach;
        endwhile;
    endif;

    // Return value specified
    if ($type == 'id')
    return $tags_by_id;

    if ($type == 'name')
    return $tags_by_name;

    if ($type == 'slug')
    return $tags_by_slug;
}

// DISPLAY CATEGORY TAGS

function tag_cloud_by_category($category_ID) {
    // Get our tag array
    $tags = get_tags_in_use($category_ID, 'id');

    // Start our output variable
    echo '<div class="tags">';

    // Cycle through each tag and set it up
    foreach ($tags as $tag) :
        // Get our count
        $term = get_term_by('id', $tag, 'post_tag');
        $count = $term->count;

        // Get tag name
        $tag_info = get_tag($tag);
        $tag_name = $tag_info->name;

        // Get tag link
        $tag_link = get_tag_link($tag);

        // Set up our font size based on count
        // $size = 8 + $count;

        echo '<span>';
        echo '<a href="' . $tag_link . '">' . $tag_name . '</a>';
        echo ' </span>';
        

    endforeach;

    echo '</div>';
}











add_action(
    'pre_get_posts',
    function ($q) {
        if (
            !is_admin() // Very important, otherwise back end queries will be affected as well
            && $q->is_main_query() // Very important, we just need to modify the main query
            && $q->is_category() // Only target category pages
        ) {

            $q->set('posts_per_page', 2);
        }
    }
);







// Get Posts Count By category
function custom_posts_count($id) {
    $category = get_category($id);
    $count = $category->category_count;
    echo $count;
}










































// Show All Post Meta Keys and Values for a Post


// add_action('wp_head', 'output_all_postmeta');
// function output_all_postmeta()
// {

//     $postmetas = get_post_meta(get_the_ID());

//     foreach ($postmetas as $meta_key => $meta_value) {
//         echo $meta_key . ' : ' . $meta_value[0] . '<br/>';
//     }
// }













/**
 * Show Recent Comments
 *
 * @author Baki Goxhaj
 * @link http://wplancer.com/how-to-display-recent-comments-without-using-a-plugin-or-widget/ 
 *
 * @param string/integer $no_comments
 * @param string/integer $comment_len
 * @param string/integer $avatar_size
 * 
 * @echo string $comm
 */
function bg_recent_comments($no_comments = 1, $comment_len = 80, $avatar_size = 48)
{
    $comments_query = new WP_Comment_Query();
    $comments = $comments_query->query(array('number' => $no_comments));
    $comm = '';
    if ($comments) : foreach ($comments as $comment) :
            $comm .= '<a class="name" style="font-weight: 400;" ">';
            // $comm .= get_avatar($comment->comment_author_email, $avatar_size);
            $comm .= get_comment_author($comment->comment_ID) . '</a> ';
            // $comm .= '<p>' . strip_tags(substr(apply_filters('get_comment_text', $comment->comment_content), 0, $comment_len)) . '...</p></li>';
        endforeach;
    else :
        $comm .= 'No comments.';
    endif;
    echo $comm;
}