<?php
function cptui_register_my_cpts()
{

    /**
     * Post Type: Millestones.
     */

    $labels = array(
        "name" => __("Millestones", "custom-post-type-ui"),
        "singular_name" => __("Millestone", "custom-post-type-ui"),
    );

    $args = array(
        "label" => __("Millestones", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "timeline", "with_front" => true),
        "query_var" => true,
        "supports" => array("custom-fields", "revisions"),
        "taxonomies" => array("category", "post_tag"),
    );

    register_post_type("timeline", $args);

    /**
     * Post Type: Locations.
     */

    $labels = array(
        "name" => __("Locations", "custom-post-type-ui"),
        "singular_name" => __("location", "custom-post-type-ui"),
    );

    $args = array(
        "label" => __("Locations", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "map", "with_front" => true),
        "query_var" => true,
        "menu_icon" => "dashicons-location-alt",
        "supports" => array("custom-fields", "revisions"),
        "taxonomies" => array("category", "post_tag"),
    );

    register_post_type("map", $args);

    /**
     * Post Type: Contacts.
     */

    $labels = array(
        "name" => __("Contacts", "custom-post-type-ui"),
        "singular_name" => __("contact", "custom-post-type-ui"),
    );

    $args = array(
        "label" => __("Contacts", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "contact", "with_front" => true),
        "query_var" => true,
        "menu_icon" => "dashicons-smartphone",
        "supports" => array("custom-fields", "revisions"),
        "taxonomies" => array("category", "post_tag"),
    );

    register_post_type("contact", $args);

    /**
     * Post Type: Links.
     */

    $labels = array(
        "name" => __("Links", "custom-post-type-ui"),
        "singular_name" => __("link", "custom-post-type-ui"),
    );

    $args = array(
        "label" => __("Links", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "link", "with_front" => true),
        "query_var" => true,
        "menu_icon" => "dashicons-admin-links",
        "supports" => array("custom-fields", "revisions"),
        "taxonomies" => array("category", "post_tag"),
    );

    register_post_type("link", $args);

    /**
     * Post Type: Podcasts.
     */

    $labels = array(
        "name" => __("Podcasts", "custom-post-type-ui"),
        "singular_name" => __("podcast", "custom-post-type-ui"),
    );

    $args = array(
        "label" => __("Podcasts", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "podcast", "with_front" => true),
        "query_var" => true,
        "menu_icon" => "dashicons-microphone",
        "supports" => array("title", "editor", "thumbnail", "custom-fields", "revisions", "author"),
        "taxonomies" => array("category", "post_tag"),
    );

    register_post_type("podcast", $args);

    /**
     * Post Type: Videos.
     */

    $labels = array(
        "name" => __("Videos", "custom-post-type-ui"),
        "singular_name" => __("video", "custom-post-type-ui"),
    );

    $args = array(
        "label" => __("Videos", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "video", "with_front" => true),
        "query_var" => true,
        "menu_icon" => "dashicons-video-alt",
        "supports" => array("title", "editor", "thumbnail", "custom-fields", "revisions", "author"),
        "taxonomies" => array("category", "post_tag"),
    );

    register_post_type("video", $args);

    /**
     * Post Type: Archive.
     */

    $labels = array(
        "name" => __("Archive", "custom-post-type-ui"),
        "singular_name" => __("archive", "custom-post-type-ui"),
    );

    $args = array(
        "label" => __("Archive", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "archive", "with_front" => true),
        "query_var" => true,
        "menu_icon" => "dashicons-media-archive",
        "supports" => array("title", "editor", "thumbnail", "custom-fields", "revisions", "author"),
        "taxonomies" => array("category", "post_tag"),
    );

    register_post_type("archive", $args);

    /**
     * Post Type: Webinar.
     */

    $labels = array(
        "name" => __("Webinar", "custom-post-type-ui"),
        "singular_name" => __("webinar", "custom-post-type-ui"),
    );

    $args = array(
        "label" => __("Webinar", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "webinar", "with_front" => true),
        "query_var" => true,
        "menu_icon" => "dashicons-video-alt3",
        "supports" => array("title", "editor", "thumbnail", "custom-fields", "revisions", "author"),
        "taxonomies" => array("category", "post_tag"),
    );

    register_post_type("webinar", $args);

    /**
     * Post Type: Gallery.
     */

    $labels = array(
        "name" => __("Gallery", "custom-post-type-ui"),
        "singular_name" => __("gallery", "custom-post-type-ui"),
    );

    $args = array(
        "label" => __("Gallery", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "gallery", "with_front" => true),
        "query_var" => true,
        "menu_icon" => "dashicons-format-gallery",
        "supports" => array("title", "editor", "thumbnail"),
        "taxonomies" => array("category", "post_tag"),
    );

    register_post_type("gallery", $args);

    /**
     * Post Type: Tabs.
     */

    $labels = array(
        "name" => __("Tabs", "custom-post-type-ui"),
        "singular_name" => __("tab", "custom-post-type-ui"),
    );

    $args = array(
        "label" => __("Tabs", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "tab", "with_front" => true),
        "query_var" => true,
        "menu_icon" => "dashicons-welcome-add-page",
        "supports" => array("thumbnail", "custom-fields", "revisions"),
        "taxonomies" => array("category", "post_tag"),
    );

    register_post_type("tab", $args);

    /**
     * Post Type: Updates.
     */

    $labels = array(
        "name" => __("Updates", "custom-post-type-ui"),
        "singular_name" => __("Update", "custom-post-type-ui"),
    );

    $args = array(
        "label" => __("Updates", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "update", "with_front" => true),
        "query_var" => true,
        "menu_icon" => "dashicons-update",
        "supports" => array("title", "editor", "thumbnail", "custom-fields", "revisions", "author"),
        "taxonomies" => array("category", "post_tag"),
    );

    register_post_type("update", $args);

    /**
     * Post Type: cigna_dashboard.
     */

    $labels = array(
        "name" => __("cigna_dashboard", "custom-post-type-ui"),
        "singular_name" => __("cigna_dashboard", "custom-post-type-ui"),
    );

    $args = array(
        "label" => __("cigna_dashboard", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => false,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "cigna_dashboard", "with_front" => true),
        "query_var" => true,
        "supports" => array("thumbnail"),
    );

    register_post_type("cigna_dashboard", $args);

    /**
     * Post Type: Insights.
     */

    $labels = array(
        "name" => __("Insights", "custom-post-type-ui"),
        "singular_name" => __("Insight", "custom-post-type-ui"),
    );

    $args = array(
        "label" => __("Insights", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "insights", "with_front" => true),
        "query_var" => true,
        "menu_icon" => "dashicons-chart-line",
        "supports" => array("title", "editor", "thumbnail", "excerpt"),
        "taxonomies" => array("category", "post_tag"),
    );

    register_post_type("insights", $args);
}

add_action('init', 'cptui_register_my_cpts');
