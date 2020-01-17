<?php

// search filter
function searchfilter($query)
{
    if ($query->is_search && !is_admin()) {
        $query->set('post_type', array('post', 'video', 'amp_story', 'podcast', 'insights'));
    }
    return $query;
}
add_filter('pre_get_posts', 'searchfilter');

function theme_settings()
{
    // Add tag metabox to page
    register_taxonomy_for_object_type('post_tag', 'page');
    // Add category metabox to page
    register_taxonomy_for_object_type('category', 'page');
}
// Add to the admin_init hook of your theme functions.php file 
add_action('init', 'theme_settings');

// Featured image functionality.
function mytheme_post_thumbnails()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mytheme_post_thumbnails');

/* sending data through ajax in modals */
function wp_infinitepaginate()
{
    /* getting post type */
    $type = $_POST['type'];



    /* Ajax query for video post type */
    if ($type == "video") {
        $v_id = $_POST['id'];
        $v_post = get_post($v_id);
        $url = get_field('video_file', $v_post);
        // add_post_meta($v_id, 'viewed', '1', true);
?>
        <div class="vc-main-c">
            <div class="video-box" style="position:relative;">
                <div class="infinite">
                    <div class="pace pace-active">
                        <div class="pace-activity" style="display: block;"></div>
                    </div>
                </div>
                <amp-video autoplay src="<?php echo $url; ?>" layout="responsive" width="717" height="405" controls style="z-index:2">
                </amp-video>
            </div>
            <div class="video-about">
                <p class="video-titile"><?php echo $v_post->post_title; ?></p>
                <p class="video-date"><?php echo $v_post->post_date; ?></p>
                <p>
                    <?php echo $v_post->post_content; ?>
                </p>
            </div>
        </div>
    <?php
        /* Ajax query for podcast post type */
    } else if ($type == "podcast") {
        $pd_id = $_POST['id'];
        $pd_post = get_post($pd_id);
        $url = get_field('audio_file', $pd_post);
    ?>
        <div class="vc-main-c">
            <div class="podcast-box" style="position:relative;" hidden>
                <amp-audio width="auto" height="50" src="<?php echo $url; ?>">
                    <div fallback>Your browser doesn’t support HTML5 audio</div>
                </amp-audio>
            </div>
            <div class="podcast-about">
                <p class="video-titile"><?php echo $pd_post->post_title; ?></p>
                <p class="video-date"><?php echo $pd_post->post_date; ?></p>
                <p>
                    <?php echo $pd_post->post_content; ?>
                </p>
            </div>
        </div>

    <?php
        /* Ajax query for gallery post type */
    } else if ($type == "gallery") {
        $g_id = $_POST['id'];
        $gallery = get_post($g_id);
        $gallery_array = get_field('photos', $gallery);
    ?>
        <div class="vc-main-c">
            <div class="g-container">
                <amp-carousel layout="fill" type="slides">
                    <?php
                    foreach ($gallery_array as $val) {
                        $url = $val['sizes']['medium'];
                    ?>
                        <amp-img src="<?php echo $url; ?>" width="400" height="300" layout="responsive" alt=""></amp-img>
                    <?php } ?>
                </amp-carousel>
            </div>

            <div class="video-about">
                <p class="video-titile"><?php echo $gallery->post_title; ?></p>
                <p class="video-date"><?php echo $gallery->post_date; ?></p>
                <p>
                    <?php echo $gallery->post_content; ?>
                </p>
            </div>
        </div>
    <?php
        /* Ajax query for insight post type */
    } else if ($type == "insight") {
        $in_id = $_POST['id'];
        $in_post = get_post($in_id);
        $description = $in_post->post_content;
        $title = $in_post->post_title;
        $date = $in_post->post_date;
        $visualiser = get_field('visualizer', $in_post);
        $excerpt = $in_post->post_excerpt;
    ?>
        <div class="chart-ajax">
            <div class="in-upper-content">
                <div class="chart-div">
                    <div class="infinite">
                        <div class="pace pace-active">
                            <div class="pace-activity" style="display: block;"></div>
                        </div>
                    </div>
                    <?php
                    wp_head();
                    echo $visualiser;
                    ?>
                </div>
                <div class="in-title">
                    <ul>
                        <li class="in-title-1">
                            <?php echo $title; ?>
                        </li>
                        <li class="in-date">
                            <?php echo $date; ?>
                        </li>
                        <li class="in-about">
                            <?php echo $excerpt; ?>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="video-about">
                <p class="video-date"><?php echo $description;
                                        // newPost($in_id);
                                        ?></p>
            </div>
        </div>
        <?php wp_footer(); ?>

    <?php
        /* Ajax query for archive post type */
    } else if ($type == "archive") {
        $a_id = $_POST['id'];
        $a_post = get_post($a_id);
        $description = $a_post->post_content;
        $url = get_field('archive_file_url', $a_post);
    ?>
        <div class="archive-ajax">
            <div class="archive-download" style="display:none">
                <a href="#">Download
                    <i class="fa fa-download" aria-hidden="true">
                    </i>
                </a>
            </div>
            <div class="chart-div">
                <iframe src="<?php echo $url; ?>" frameborder="0" style="height:100%;width:100%;position:absolute"></iframe>
            </div>
            <div class="video-about">
                <p class="video-titile"><?php echo $a_post->post_title; ?></p>
                <p class="video-date"><?php echo $a_post->post_date; ?></p>
            </div>
        </div>
    <?php
        /* Ajax query for live post type */
    } else if ($type == "live") {
        $live_id = $_POST['id'];
        $live_post = get_post($live_id);
        $description = $live_post->post_content;
        $url = get_field('webinar_url', $live_post);
    ?>
        <div class="archive-ajax">
            <div class="chart-div">

            </div>
            <div class="video-about">
                <p class="video-titile"><?php echo $live_post->post_title; ?></p>
                <p class="video-date"><?php echo $live_post->post_date; ?></p>
            </div>
        </div>
    <?php
        /* Ajax query for story post type */
    } else if ($type == "story") {
        $story_id = $_POST['id'];
        $story_post = get_post($story_id);
        $url = get_the_permalink($story_post);
    ?>
        <div class="story-div">
            <iframe src="<?php echo $url; ?>" frameborder="0" style="min-height:100%;height:100%;width:100%"></iframe>
        </div>
    <?php } else if ($type == "contact") {
        $contact_string = $_POST['id'];
        $list = explode('-', $contact_string, 2);
        $contact_id = $list[0];
        $tab_id = $list[1];
        $tab = get_post($tab_id);
        $contact = get_field('contact_details', $tab)[$contact_id];
        $pic = $contact['contact_picture']['sizes']['thumbnail'];
        $insta = $contact['instagram'];
        $twitter = $contact['twitter'];
        $face = $contact['facebook'];
        $linkdin = $contact['linkdin'];
        $email = $contact['email'];

    ?>
        <div class="contact-ajax">
            <div class="img-contact">
                <div class="img">
                    <!-- Avatar -->
                    <amp-img src="<?php echo $pic; ?>" class="rounded-circle" alt="avatar"></amp-img>
                </div>
                <div class="member-ajax-contact">
                    <div class="member-ajax-name"><?php echo $contact['contact_name']; ?></div>
                    <div class="member-in-contact"><?php echo $contact['designation']; ?></div>
                    <div class="member-ajax-email"><?php echo $contact['email']; ?></div>
                    <div class="collapse-content" style="display: flex;
                                justify-content: flex-start;margin-left:0">
                        <p style="margin-bottom: 0px">
                            <?php if ($insta) { ?>
                                <a href="<?php echo $insta; ?>" class="social-link-member social-icon">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            <?php } ?>
                            <?php if ($twitter) { ?>
                                <a href="<?php echo $twitter; ?>" class="social-link-member social-icon">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            <?php } ?>
                            <?php if ($face) { ?>
                                <a href="<?php echo $face; ?>" class="social-link-member social-icon">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            <?php } ?>
                            <?php if ($linkdin) { ?>
                                <a href="<?php echo $linkdin; ?>" class="social-link-member social-icon">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            <?php } ?>
                            <?php if ($email) { ?>
                                <a href="<?php echo $email; ?>" class="social-link-member social-icon">
                                    <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 10px;
    transform: translate(-0.5px, -2px);"></i>
                                </a>
                            <?php } ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="member-ajax-wys">
                <?php echo $contact['contact_details']; ?>
            </div>
        </div>
    <?php
        /* Ajax query for story post type */
    }
    die();
}

// hud ajax calls
add_action('wp_ajax_infinite_scroll', 'wp_infinitepaginate'); // for logged in user
add_action('wp_ajax_nopriv_infinite_scroll', 'wp_infinitepaginate'); // if user not logged in


/* Metro modal creation function */
function wp_metroModal()
{
    /* getting post id */
    $id = $_POST['id'];
    $cat_id = $_POST['cat_id'];
    // $posts = get_posts(array('post_type' => array('post'), 'posts_per_page' => 1, 'paged' => 1, 'cat' => $cat_id));
    $current_post = get_post($id);
    $url = get_the_permalink($current_post);
    if ($current_post->post_type == "amp_story") {
    ?>
        <div class="story-div">
            <iframe src="<?php echo $url; ?>" frameborder="0" style="min-height:100%;height:100%;width:100%"></iframe>
        </div>
    <?php } else if ($current_post->post_type == "insights") {
        $in_post = get_post($id);
        $description = $in_post->post_content;
        $title = $in_post->post_title;
    ?>
        <div class="vc-main-c">
            <?php echo $description; ?>
        </div>
    <?php } else if ($current_post->post_type == "archive") {
        $current_post = get_post($id);
        $description = $current_post->post_content;
        $url = get_field('archive_file_url', $current_post);
    ?>
        <div class="archive-ajax">
            <div class="archive-download" style="display:none">
                <a href="#">Download
                    <i class="fa fa-download" aria-hidden="true">
                    </i>
                </a>
            </div>
            <div class="chart-div">
                <iframe src="<?php echo $url; ?>" frameborder="0" style="height:100%;width:100%;position:absolute"></iframe>
            </div>
            <div class="video-about">
                <p class="video-titile"><?php echo $current_post->post_title; ?></p>
                <p class="video-date"><?php echo $current_post->post_date; ?></p>
            </div>
        </div>
    <?php } else if ($current_post->post_type == "video") {
        $id = $_POST['id'];
        $current_post = get_post($id);
        $url = get_field('video_file', $current_post);
        // add_post_meta($id, 'viewed', '1', true);
    ?>
        <div class="vc-main-c">
            <div class="video-box" style="position:relative;">
                <div class="infinite">
                    <div class="pace pace-active">
                        <div class="pace-activity" style="display: block;"></div>
                    </div>
                </div>
                <amp-video autoplay src="<?php echo $url; ?>" layout="responsive" width="717" height="405" controls style="z-index:2">
                </amp-video>
            </div>
            <div class="video-about">
                <p class="video-titile"><?php echo $current_post->post_title; ?></p>
                <p class="video-date"><?php echo $current_post->post_date; ?></p>
                <p>
                    <?php echo $current_post->post_content; ?>
                </p>
            </div>
        </div>
    <?php } else if ($current_post->post_type == "podcast") {
        $current_post = get_post($id);
        $description = $current_post->post_content;
        $url = get_field('audio_file', $current_post);
    ?>
        <div class="vc-main-c">
            <div class="podcast-box" style="position:relative;">
                <amp-audio width="auto" height="50" src="<?php echo $url; ?>">
                    <div fallback>Your browser doesn’t support HTML5 audio</div>
                </amp-audio>
            </div>
            <div class="video-about">
                <p class="video-titile"><?php echo $current_post->post_title; ?></p>
                <p class="video-date"><?php echo $current_post->post_date; ?></p>
                <p>
                    <?php echo $current_post->post_content; ?>
                </p>
            </div>
        </div>
    <?php } else { ?>
        <div class="md-container">
            <?php
            $title = $current_post->post_title;
            $description = $current_post->post_content;
            $thumbnail = get_the_post_thumbnail_url($current_post, "thumbnail");
            ?>
            <div class="md-modal-content">
                <div class="md-title">
                    <h3><?php echo $title; ?></h3>
                </div>
                <div class="md-content">
                    <p><?php echo $description; ?></p>
                </div>
            </div>
        </div>
<?php }
    die();
}

add_action('wp_ajax_metroModal', 'wp_metroModal'); // for logged in user
add_action('wp_ajax_nopriv_metroModal', 'wp_metroModal'); // if user not logged in

// /* Adding acf options page */
// function register_acf_options_pages()
// {
//     if (function_exists('acf_add_options_page')) {

//         $home_page_widgets = acf_add_options_page(array(
//             'page_title'      => __('Dashboard'),
//             'menu_title'      => __('Metro ds'),
//             'menu_slug'     => 'dashboard',
//             'capability'    => 'edit_posts',
//             'show_in_graphql' => true,

//         ));
//     }
// }
// add_action('acf/init', 'register_acf_options_pages');

// // Update CSS within in Admin
// function admin_style()
// {
//     wp_enqueue_style('admin-styles', get_template_directory_uri() . '/assets/css/ds.css');
// }
// add_action('admin_enqueue_scripts', 'admin_style');


/* $term_id is a private content created category id*/
function pc_ucat_fields_custom($term_id)
{
    $cat_name = get_the_category_by_ID($term_id);
    if (!(get_option('page-' . $term_id))) {
        $post_details = array(
            'post_title'    => 'Group dashboard-' . $cat_name,
            // 'post_content'  => '
            // <!-- wp:columns -->
            // <div class="wp-block-columns"><!-- wp:column -->
            // <div class="wp-block-column"></div>
            // <!-- /wp:column -->

            // <!-- wp:column -->
            // <div class="wp-block-column"></div>
            // <!-- /wp:column -->

            // <!-- wp:column -->
            // <div class="wp-block-column"></div>
            // <!-- /wp:column --></div>
            // <!-- /wp:columns -->',

            'post_status'   => 'publish',
            'post_author'   => 0,
            'post_type' => 'ds_page',
            'post_category' => array($term_id)

        );

        /* Returning created page id */
        $page_id  = wp_insert_post($post_details);
        // getting page url
        //$page_url = get_the_permalink($page_id);

        // updating page id
        update_option('page-' . $term_id, $page_id);

        // updaing users in page
        $users_term = get_fields('term_' . $term_id)['ds_users'];
        update_field('ds_users', $users_term, get_post($page_id));
    } else {
        /* edit category */
        $page_content = get_field('select_category', $term_id);
        $page_id = get_option('page-' . $term_id);
        wp_update_post(array(
            'post_title'    => 'Group dashboard-' . $cat_name,
            'ID' => $page_id,
            'post_content'  => $page_content
        ));

        // updating users in page
        $users_term = get_fields('term_' . $term_id)['ds_users'];
        update_field('ds_users', $users_term, get_post($page_id));
    }
}

add_action('created_pg_user_categories', 'pc_ucat_fields_custom', 10, 2);
add_action('edited_pg_user_categories', 'pc_ucat_fields_custom', 10, 2);

// function my_plugin_allowed_block_types($allowed_block_types, $post)
// {
//     if ($post->post_type == 'ds_page') {
//         return array(
//             'core/columns',
//             'core/paragraph'
//         );
//     }
//     //return array('core/paragraph');
// }

// add_filter('allowed_block_types', 'my_plugin_allowed_block_types', 10, 2);


//// WPML compatibility - delete cat name string during deletion
function pc_cat_wpml_del_name_custom($term_id)
{

    if (get_option('page-' . $term_id)) {
        $page_id = get_option('page-' . $term_id);
        wp_delete_post($page_id, true);
    }
}
add_action('delete_term_taxonomy', 'pc_cat_wpml_del_name_custom');



