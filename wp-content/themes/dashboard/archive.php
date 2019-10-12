<?php
$db_type = get_field('dashboard', get_queried_object());
$gradient_start = get_field('gradient_start', get_queried_object());
$gradient_end = get_field('gradient_end', get_queried_object());
$category_title = get_field('category_title', get_queried_object());
$primary_color = get_field('primary_color', get_queried_object());
$secondary_color = get_field('secondary_color', get_queried_object());
$theme_color = get_field('theme_color', get_queried_object());
?>
<style>
    #wrapper {
        background: -webkit-gradient(linear, left top, right top, from(<?php echo $gradient_start; ?>), to(<?php echo $gradient_end; ?>));
        background: gradient(linear, left top, right top, from(<?php echo $gradient_start; ?>), to(<?php echo $gradient_end; ?>));
    }

    .ext-main {
        background-color: <?php echo $primary_color; ?>;
    }

    .social-icon:hover,
    .social-icon:active,
    .social-icon:focus {
        background-color: <?php echo $secondary_color; ?> !important;
    }

    .nav-tabs .nav-link.active {
        background-color: <?php echo $secondary_color; ?>;
    }

    .cbp_tmtimeline>li .cbp_tmicon {
        border: 2px solid <?php echo $secondary_color; ?>;
        background-color: <?php echo $secondary_color; ?>;
    }

    .cbp_tmtimeline:before {
        background: <?php echo $secondary_color; ?>;
    }

    .black-tint {
        background-color: <?php echo $theme_color; ?>;
        -webkit-box-shadow: inset 0px 0px 19px 2px #00000038, 2px 3px 5px 0px #00000042;
        box-shadow: inset 0px 0px 19px 2px #00000038, 2px 3px 5px 0px #00000042;
        /* background-color: white; */
        /* box-shadow: 1px 1px 1px black; */
    }

    ::-webkit-scrollbar-thumb {
        background: #e2d9d98f;
        border-radius: 10px;
    }

    ::-webkit-scrollbar-track {
        /* box-shadow: inset 0 0 5px grey; */
        border-radius: 10px;
        background: #00000038;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #dee1e1;
    }

    .right-tools {
        background-color: <?php echo $secondary_color; ?>;
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
?>

<div id="dialog_window_minimized_container"></div>
<?php get_footer(); ?>