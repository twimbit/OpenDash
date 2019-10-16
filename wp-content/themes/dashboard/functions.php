<?php

/* require acf and cpt ui configuration files */
require_once dirname(__FILE__) . '/plugin_conf/acf_conf.php';
require_once dirname(__FILE__) . '/plugin_conf/cpt_conf.php';


/* Plugin required file */
require_once dirname(__FILE__) . '/assets/lib/inc/class-tgm-plugin-activation.php';
add_action('tgmpa_register', 'enterprise_register_required_plugins');

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
        add_post_meta($v_id, 'viewed', '1', true);
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
            <div class="podcast-box" style="position:relative;">
                <amp-audio width="auto" height="50" src="<?php echo $url; ?>">
                    <div fallback>Your browser doesn’t support HTML5 audio</div>
                </amp-audio>
            </div>
            <div class="video-about">
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
                                                newPost($in_id);
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
<?php }
    die();
}
add_action('wp_ajax_infinite_scroll', 'wp_infinitepaginate'); // for logged in user
add_action('wp_ajax_nopriv_infinite_scroll', 'wp_infinitepaginate'); // if user not logged in


/* Restoring update id for chat */
function updateRestoreId()
{
    $id = $_POST['id'];
    $restore_id = $_POST['restore_id'];
    echo $restore_id;
    // update user - setting new email and surname
    global $pc_users;
    $data = array(
        'surname'     => $restore_id
    );
    $result = $pc_users->update_user($id, $data);
    if (!$result) {
        // an error occurred - check related properties  
        return http_response_code(401);
    } else {
        // success
        return http_response_code(201);
    }
    die();
}
add_action('wp_ajax_update_restore_id', 'updateRestoreId'); // for logged in user
add_action('wp_ajax_nopriv_update_restore_id', 'updateRestoreId'); // if user not logged in

/* Saving pc users last login time */
function last_login_time($user_id)
{
    global $pc_meta;
    $userLastLoginTime = strtotime(pc_user_logged('last_access'));
    $pc_meta->add_meta($user_id, 'last_login', $userLastLoginTime);
}
add_action('pc_user_logout', 'last_login_time');


/* Checking a post is new */
function newPost($post_id)
{
    global $pc_meta;
    $userLastLoginTime = $pc_meta->get_meta(pc_user_logged('id'), 'last_login');
    $postCreateTime = get_the_time($d = 'U', $post_id);
    if ($postCreateTime >= $userLastLoginTime) {
        echo 'visible';
    } else {
        echo 'hidden';
    }
}

/* Registering widget */
if (function_exists('register_sidebar'))
    register_sidebar(
        array(
            'name' => 'Name of Widgetized Area',
            'before_widget' => '<div class = "widgetizedArea">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );


/* get post array */
function getPostArray($type, $queriedObject)
{
    $args = array(
        'post_type' => $type,
        'cat' => $queriedObject
    );
    return get_posts($args);
}


function enterprise_register_required_plugins()
{
    /*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
    $plugins = array(


        // Custom Post Type UI
        array(
            'name'      => 'Custom Post Type UI',
            'slug'      => 'custom-post-type-ui',
            'required'  => true,
        ),

        // acf pro plugin installation
        array(
            'name'               => 'Advanced Custom Fields PRO', // The plugin name.
            'slug'               => 'advanced-custom-fields-pro', // The plugin slug (typically the folder name).
            'source'             => get_template_directory() . '/assets/lib/plugins/acf-pro.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),

        // acf pro plugin installation
        array(
            'name'               => 'PrivateContent', // The plugin name.
            'slug'               => 'private-content', // The plugin slug (typically the folder name).
            'source'             => get_template_directory() . '/assets/lib/plugins/private-content.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),

        // Amp plugin installation
        array(
            'name'               => 'Amp-plugin', // The plugin name.
            'slug'               => 'Amp-plugin', // The plugin slug (typically the folder name).
            'source'             => get_template_directory() . '/assets/lib/plugins/amp.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),

        // Gutenberg plugin install
        array(
            'name'      => 'Gutenberg',
            'slug'      => 'gutenberg',
            'required'  => true,
        ),

        // Custom Post Type UI
        array(
            'name'      => 'Visualizer: Tables and Charts Manager for WordPress',
            'slug'      => 'visualizer',
            'required'  => true,
        ),

    );

    /*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
    $config = array(
        'id'           => 'enterprise',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => true,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
    );

    tgmpa($plugins, $config);
}