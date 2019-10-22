<title>Dashboard-<?php echo get_queried_object()->name; ?></title>
<?php $template_dir = get_template_directory_uri(); ?>
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
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Sidebar  -->
        <amp-sidebar id="sidebar-right" class="sample-sidebar" layout="nodisplay" side="right">
            <?php get_template_part("widgets/dashboard", "sidebar"); ?>
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
                            <p><?php echo $singleSubCategory->name; ?></p>
                            <?php
                                $i = 0;
                                /* Getting posts type array */
                                $posts = getPostArray(array('post'), $singleSubCategory->term_id);
                                foreach ($posts as $val) {
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
                                                    <div class="infinite">
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
                                                    <div class="infinite">
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
                        <p>Miscellaneous</p>
                        <?php
                        $i = 0;
                        /* Getting posts type array */
                        $posts = getPostArray(array('post'), get_queried_object()->term_id);
                        foreach ($posts as $val) {
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
                                                <div class="infinite">
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
                                                <div class="infinite">
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