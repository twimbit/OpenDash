<?php
get_header();
$db_type = get_field('dashboard', get_queried_object());
$category_title = get_field('category_title', get_queried_object());
$theme_color = get_field('theme_botton', get_queried_object());
$color = json_decode($theme_color, false);
?>

<style>
    :root {
        --body-color: <?php echo $color->body; ?>;
        --secondary-color: <?php echo $color->secondary_color; ?>;
        --sidebar-header-color: <?php echo $color->sidebar_header; ?>;
        --sidebar-body-color: <?php echo $color->sidebar_body; ?>;
        --header-color: <?php echo $color->header; ?>;
        --scroll-color: <?php echo $color->scroll; ?>;
        --scroll-track-color: <?php echo $color->scroll_track; ?>;
        --minimize-tabs-color: <?php echo $color->minimize_tabs; ?>;
        --notification-color: <?php echo $color->notification; ?>;
        --sidebar-content-heading-color: <?php echo $color->sidebar_content_heading; ?>;
        --sidebar-plus-color: <?php echo $color->sidebar_plus_sign; ?>;
    }

    .sidebar-header {
        background-color: var(--sidebar-header-color);
        color: var(--sidebar-content-header-color);
    }

    .ampstart-dropdown>section>header:before {
        color: var(--sidebar-plus-color);
    }

    .sample-sidebar {
        background-color: var(--sidebar-body-color);
    }

    #wrapper {
        background: var(--body-color);
    }

    .ext-main {
        background-color: var(--secondary-color) !important;
    }

    .social-icon:hover,
    .social-icon:active,
    .social-icon:focus {
        background-color: var(--secondary-color);
    }

    .nav-tabs .nav-link.active {
        background-color: var(--secondary-color);
    }

    .cbp_tmtimeline>li .cbp_tmicon {
        border: 2px solid var(--secondary-color);
    }

    .cbp_tmtimeline:before {
        background: var(--secondary-color);
    }

    ::-webkit-scrollbar-thumb {
        background: var(--scroll-color);
    }

    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px var(--scroll-track-color);
    }

    ::-webkit-scrollbar-thumb:hover {
        background-color: var(--secondary-color);
    }

    .right-tools {
        background-color: var(--secondary-color);
    }

    .ui-dialog .ui-dialog-titlebar {
        background-color: var(--secondary-color);
    }

    .chart-container {
        border: 0.5px solid #cccccc4a;
    }

    .visualizer-front svg>rect {
        fill: #0000005c;
    }

    .pace .pace-activity {
        border: solid 2px transparent;
        border-top-color: #f16c70;
        border-left-color: #f16c70;
    }
</style>
<?php
get_template_part("dashboard/dashboard", $db_type);
get_footer(); ?>