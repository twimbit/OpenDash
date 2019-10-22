<?php
get_header();

$db_type = get_field('dashboard', get_queried_object());
$category_title = "Search Results";

$theme_color = get_field('theme_botton', get_queried_object());
echo($theme_color);
$color = json_decode($theme_color, false);
?>
    <!-- Metro ui css -->
    <link href="<?php echo $template_dir; ?>/assets/css/metro-ui.css" rel="stylesheet" type="text/css" />
    <style>
        .m-col-subcat>p {
            position: absolute;
            top: -60px;
            font-size: 28px;
            left: 10px;
            font-weight: bold;
        }

        .dashboard {
            overflow-x: hidden;
        }

        .main-board {
            padding-right: 0;
        }

        .main-board {
            min-width: auto;
            padding-left: 0;
        }
    </style>

<?php

$post_args = array(
    'orderby' => 'date',
    'order' => 'DESC', // the 1st array element will be 1st story(oldest story)
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => array('post'),
    'suppress_filters' => true,
    's' => get_search_query()
);
$get_post_feed = get_posts($post_args);

?>
<style>
    #main {
        color: #000;
        height: 100vh;
        overflow-y: auto;
        overflow-x: hidden;
    }
</style><?php $template_dir = get_template_directory_uri(); ?>
    <!-- Metro ui css -->
    <link href="<?php echo $template_dir; ?>/assets/css/metro-ui.css" rel="stylesheet" type="text/css" />
    <style>
        .m-col-subcat>p {
            position: absolute;
            top: -60px;
            font-size: 28px;
            left: 10px;
            font-weight: bold;
        }

        .dashboard {
            overflow-x: hidden;
        }

        .main-board {
            padding-right: 0;
        }

        .main-board {
            min-width: auto;
            padding-left: 0;
        }
    </style>
</head>
<body>
<div id="wrapper">
    <!-- Sidebar  -->
    <amp-sidebar id="sidebar-right" class="sample-sidebar" layout="nodisplay" side="right">
        <?php get_template_part("widgets/dashboard", "sidebar"); ?>
    </amp-sidebar>
    <div class="board-header">
        <?php get_template_part("widgets/dashboard", "header"); ?>
    </div>
    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php if (have_posts()) { ?>
                <header class="page-header">
                    <h3 class="page-title"><?php printf(__('%s Search Results found for: %s', 'twentysixteen'), '<span>' . esc_html($wp_query->found_posts), esc_html(get_search_query()) . '</span>'); ?></h3>
                </header><!-- .page-header -->
                <div class="search-result">
                    <?php while (have_posts()) :
                            the_post();
                            $link = get_the_permalink();
                            $title = get_the_title();
                            $excerpt = get_the_excerpt();
                            $img = get_the_post_thumbnail_url($val,'thumbnail');
                            ?>
                        <a href="<?php echo $link; ?>" class="search-link">
                            <div class="search-list">
                                <div class="search-img">
                                    <amp-img layout="fill" src="<?php echo $img; ?>"></amp-img>
                                </div>
                                <div class="search-desc m-heading-sm">
                                    <h4 ><?php echo $title; ?></h4>
                                    <h3 ><?php echo $excerpt; ?></h3>
                                </div>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>
            <?php
                // If no content
            } else {
                echo "nothing found";
            }

            ?>

        </main><!-- .site-main -->
    </section><!-- .content-area -->

</div>
    <?php get_footer(); ?>