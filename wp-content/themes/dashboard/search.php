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
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Sidebar  -->
        <amp-sidebar id="sidebar-right" class="sample-sidebar" layout="nodisplay" side="right">
            <?php get_template_part("widgets/dashboard", "sidebarMetro"); ?>
        </amp-sidebar>
        <div class="board-header">
            <?php get_template_part("widgets/dashboard", "header"); ?>
        </div>
        <div class="dashboard">
            <div class="main-board" id="main-board">
                <div class="m-container">

                    <?php
                    $category_child = get_categories(array('child_of' => get_queried_object()->term_id, 'hide_empty' => FALSE));
                    foreach ($category_child as $singleSubCategory) {   // echo do_shortcode('[pc-logout-box]');
                        ?>
                        <div class="m-col-subcat">
                            <p style="text-transform: capitalize"><?php echo $singleSubCategory->name; ?></p>
                            <?php
                                $i = 0;
                                /* Getting posts type array */
                                $posts = getPostArray(array('post', 'amp_story', 'video', 'podcast', 'insights', 'archive'), $singleSubCategory->term_id);
                                foreach ((array) $posts as $val) {
                                    $title = $val->post_title;
                                    $description = $val->post_content;
                                    $excerpt = $val->post_excerpt;
                                    $thumbnail = get_the_post_thumbnail_url($val, "thumbnail");
                                    if ($i == 0) {
                                        ?>
                                    <div class="m-subcat-name m-row-span-4">
                                        <a href="#" class="m-lg-card" onclick="openModalMetro(<?php echo $val->ID; ?>,'<?php echo $title; ?>',<?php echo $singleSubCategory->term_id; ?>)">
                                            <div class="m-img-lg">
                                                <amp-img src="<?php echo $thumbnail; ?>" alt="lg-img-card" layout="fill">
                                                    <div class="infinite" hidden>
                                                        <div class="pace pace-active">
                                                            <div class="pace-activity" style="display: block;"></div>
                                                        </div>
                                                    </div>
                                                </amp-img>
                                            </div>
                                            <div class="m-heading-sm" style="position: relative;">
                                                <h4 class="m-heading-lg"><?php echo $title; ?></h4>
                                                <h3 class="m-heading-lg"><?php echo $excerpt; ?></h3>
                                            </div>
                                        </a>
                                    </div>
                                <?php } else { ?>
                                    <div class="m-subcat-name m-row-span-3">
                                        <a href="#" class="m-sm-card" onclick="openModalMetro(<?php echo $val->ID; ?>,'<?php echo $title; ?>',<?php echo $singleSubCategory->term_id; ?>)">
                                            <div class="m-img-sm">
                                                <amp-img src="<?php echo $thumbnail; ?>" alt="lg-img-card" layout="fill">
                                                    <div class="infinite" hidden>
                                                        <div class="pace pace-active">
                                                            <div class="pace-activity" style="display: block;"></div>
                                                        </div>
                                                    </div>
                                                </amp-img>
                                            </div>
                                            <div class="m-heading-sm">
                                                <h4><?php echo $title; ?></h4>
                                                <h3><?php echo $excerpt; ?></h3>
                                            </div>
                                        </a>
                                    </div>
                            <?php }
                                    $i++;
                                } ?>
                        </div>
                    <?php } ?>
                    <!-- miscellaneous section -->

                    <div class="m-col-subcat">
                        <?php
                        $i = 0;
                        /* Getting posts type array */
                        $posts = getPostArray(array('post', 'amp_story', 'video', 'podcast', 'insights', 'archive'), get_queried_object()->term_id);
                        if (!empty($posts)) {
                            ?>
                            <p>Updates & Other info</p>
                            <?php
                                foreach ((array) $posts as $val) {
                                    if (get_the_category($val)[0]->parent == 0) {
                                        $title = $val->post_title;
                                        $description = $val->post_content;
                                        $excerpt = $val->post_excerpt;
                                        $thumbnail = get_the_post_thumbnail_url($val, "thumbnail");
                                        if ($i == 0) {
                                            ?>
                                        <div class="m-subcat-name m-row-span-4">
                                            <a href="#" class="m-lg-card" onclick="openModalMetro(<?php echo $val->ID; ?>,'<?php echo $title; ?>',<?php echo $singleSubCategory->term_id; ?>)">
                                                <div class="m-img-lg">
                                                    <amp-img src="<?php echo $thumbnail; ?>" alt="lg-img-card" layout="fill">
                                                        <div class="infinite" hidden>
                                                            <div class="pace pace-active">
                                                                <div class="pace-activity" style="display: block;"></div>
                                                            </div>
                                                        </div>
                                                    </amp-img>
                                                </div>
                                                <div class="m-heading-sm" style="position: relative;">
                                                    <h4 class="m-heading-lg"><?php echo $title; ?></h4>
                                                    <h3 class="m-heading-lg"><?php echo $excerpt; ?></h3>
                                                </div>
                                            </a>
                                        </div>
                                    <?php } else { ?>
                                        <div class="m-subcat-name m-row-span-3">
                                            <a href="#" class="m-sm-card" onclick="openModalMetro(<?php echo $val->ID; ?>,'<?php echo $title; ?>',<?php echo $singleSubCategory->term_id; ?>)">
                                                <div class="m-img-sm">
                                                    <amp-img src="<?php echo $thumbnail; ?>" alt="lg-img-card" layout="fill">
                                                        <div class="infinite" hidden>
                                                            <div class="pace pace-active">
                                                                <div class="pace-activity" style="display: block;"></div>
                                                            </div>
                                                        </div>
                                                    </amp-img>
                                                </div>
                                                <div class="m-heading-sm">
                                                    <h4><?php echo $title; ?></h4>
                                                    <h3><?php echo $excerpt; ?></h3>
                                                </div>
                                            </a>
                                        </div>
                            <?php }
                                        $i++;
                                    }
                                } ?>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
        <!-- jQuery  -->
        <script src="<?php echo $template_dir; ?>/assets/js/jquery.min.js"></script>
        <script src="<?php echo $template_dir; ?>/assets/js/popper.min.js"></script>

        <!-- Mouse wheel js -->
        <script type="text/javascript" src="<?php echo $template_dir; ?>/assets/pages/jquery.mousewheel.min.js"></script>

        <!-- Popper for Bootstrap -->
        <script src="<?php echo $template_dir; ?>/assets/js/bootstrap.min.js"></script>

        <!-- Jquery ui -->
        <script src="<?php echo $template_dir; ?>/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script>
            /* Minimize modal logic */
            var _init = $.ui.dialog.prototype._init;
            $.ui.dialog.prototype._init = function() {
                //Run the original initialization code
                _init.apply(this, arguments);

                //set some variables for use later
                var dialog_element = this;
                var dialog_id = this.uiDialogTitlebar.next().attr('id');

                //append our minimize icon
                this.uiDialogTitlebar.append('<a href="#" id="' + dialog_id +
                    '-minbutton" class="ui-dialog-titlebar-minimize ui-corner-all">' +
                    '<span class="ui-icon ui-icon-minusthick"></span></a>');

                //append our minimized state
                $('#dialog_window_minimized_container').append(
                    '<div class="dialog_window_minimized ui-widget ui-state-default ui-corner-all" id="' +
                    dialog_id + '_minimized">' + this.uiDialogTitlebar.find('.ui-dialog-title').text() +
                    '<span id="ui-icon-1" class="ui-icon-1 ui-icon-newwin ui-dialog-titlebar-close" title="close"></span></div>');

                //create a hover event for the minimize button so that it looks good
                $('#' + dialog_id + '-minbutton').hover(function() {
                    $(this).addClass('ui-state-hover');
                }, function() {
                    $(this).removeClass('ui-state-hover');
                }).click(function() {
                    //add a click event as well to do our "minimalization" of the window
                    dialog_element.close();

                    // $('.model-container').hide();
                    $('#' + dialog_id + '_minimized').show();
                });

                //create another click event that maximizes our minimized window
                $('#' + dialog_id + '_minimized').click(function() {
                    $(this).hide();
                    // $('.model-container').show();
                    dialog_element.open();
                });
            };
        </script>

        <!-- Metro ui js -->
        <script src="<?php echo $template_dir; ?>/assets/js/metro-ui.js"></script>

        <?php get_footer(); ?>