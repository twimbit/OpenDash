<?php
get_header();
$template_dir = get_template_directory_uri();
$s_cats = array();
$s_posts = array();
if (have_posts()) {
    while (have_posts()) {
        the_post();
        array_push($s_cats, get_the_category(get_the_ID())[0]->term_id);
        array_push($s_posts, get_post(get_the_ID()));
    }
}
$u_cats = array_unique($s_cats);
?>
<title>Search result</title>
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
            <div class="search-page">
                <form action="<?php echo site_url(); ?>" method="get">
                    <div class="search-form d-flex">
                        <button type="submit" href="#" style="border:none;background:none;">
                            <i class="fa fa-search"></i>
                        </button>
                        <input type="text" placeholder="search content" name="s" />
                    </div>
                </form>
            </div>
            <?php get_template_part("widgets/dashboard", "header"); ?>
        </div>
        <div class="dashboard">
            <div class="main-board" id="main-board">
                <?php
                if (!empty(get_search_query())) { ?>
                    <p class="search-heading"><?php printf(__('%s Search Results found for : %s', 'twentysixteen'), '<span>' . esc_html($wp_query->found_posts), esc_html(get_search_query()) . '</span>'); ?></p>
                    <div class="m-container">
                        <?php
                            if (!(empty($u_cats))) {
                                foreach ($u_cats as $val) {
                                    ?>
                                <div class="m-col-subcat">
                                    <p style="text-transform: capitalize"><?php echo  get_the_category_by_ID($val) ?></p>
                                    <?php $i = 0;
                                                foreach ((array) $s_posts as $post_val) {
                                                    $title = $post_val->post_title;
                                                    $description = $post_val->post_content;
                                                    $excerpt = $post_val->post_excerpt;
                                                    $thumbnail = get_the_post_thumbnail_url($post_val, "medium");
                                                    /* first post of array */
                                                    if (get_the_category($post_val)[0]->term_id == $val) {
                                                        if ($i == 0) {
                                                            ?>
                                                <div class="m-subcat-name m-row-span-4">
                                                    <a href="#" class="m-lg-card" onclick="openModalMetro(<?php echo $post_val->ID; ?>,'<?php echo $title; ?>',<?php echo $singleSubCategory->term_id; ?>)">
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
                                                <!-- rest posts of array -->
                                            <?php } else {
                                                                    $thumbnail = get_the_post_thumbnail_url($post_val, "thumbnail"); ?>
                                                <div class="m-subcat-name m-row-span-3">
                                                    <a href="#" class="m-sm-card" onclick="openModalMetro(<?php echo $post_val->ID; ?>,'<?php echo $title; ?>',<?php echo $singleSubCategory->term_id; ?>)">
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
                        <?php  }
                            } ?>

                    </div>
                <?php } else {
                    echo '<div class="s-type">Please write in search box to search.</div>';
                } ?>
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