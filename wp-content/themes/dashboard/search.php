<?php
get_header();
?>
<title>Search result</title>
</head>
<?php

$post_args = array(
    'orderby' => 'date',
    'posts_per_page' => get_option('posts_per_page'),
    'order' => 'DESC', // the 1st array element will be 1st story(oldest story)
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => array('post'),
    'suppress_filters' => true,
    's' => get_search_query(),
    'paged' => get_query_var('paged') ? absint(get_query_var('paged')) : 1
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
</style>

<body>
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
                                <div class="search-desc">
                                    <h3><?php echo $title; ?></h3>
                                    <p><?php echo $excerpt; ?></p>
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


    <?php get_footer(); ?>