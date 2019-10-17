<title>Dashboard-<?php echo get_queried_object()->name; ?></title>
<?php $template_dir = get_template_directory_uri(); ?>
<!-- Metro ui css -->
<link href="<?php echo $template_dir; ?>/assets/css/metro-ui.css" rel="stylesheet" type="text/css" />
<style>
    .m-col-subcat::before {
        content: "Subcat name";
        position: absolute;
        top: -60px;
        font-size: 28px;
        left: 10px;
        font-weight: bold;
    }

    .board-header {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        background: #ffffff2e;
        width: 100%;
        height: 47px;
        left: -57px;
        padding-left: 10px;
        margin-left: 0;
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
            <?php get_template_part("widgets/dashboard", "tools"); ?>
        </div>
        <div class="dashboard">
            <div class="main-board" id="main-board">
                <div class="m-container">
                    <div class="m-main-heading" hidden>
                        <h3>Category</h3>
                    </div>
                    <div class="m-col-subcat">
                        <div class="m-subcat-name m-row-span-4">
                            <a href="#" class="m-lg-card">
                                <img class="m-img-lg" src="<?php echo $template_dir; ?>/assets/images/small/img-1.jpg" alt="lg-img-card">
                                <div class="m-heading-sm" style="position: relative;top: -7px;">
                                    <h4 class="m-heading-lg">This is large card info</h4>
                                </div>
                            </a>
                        </div>
                        <div class="m-subcat-name m-row-span-3">
                            <a href="#" class="m-sm-card">
                                <img class="m-img-sm" src="<?php echo $template_dir; ?>/assets/images/small/img-1.jpg" alt="lg-img-card">
                                <div class="m-heading-sm">
                                    <h4>This is large card info</h4>
                                </div>
                            </a>
                        </div>
                        <div class="m-subcat-name m-row-span-3">
                            <a href="#" class="m-sm-card">
                                <img class="m-img-sm" src="<?php echo $template_dir; ?>/assets/images/small/img-1.jpg" alt="lg-img-card">
                                <div class="m-heading-sm">
                                    <h4>This is large card info</h4>
                                </div>
                            </a>
                        </div>
                        <div class="m-subcat-name m-row-span-3">
                            <a href="#" class="m-sm-card">
                                <img class="m-img-sm" src="<?php echo $template_dir; ?>/assets/images/small/img-1.jpg" alt="lg-img-card">
                                <div class="m-heading-sm">
                                    <h4>This is large card info</h4>
                                </div>
                            </a>
                        </div>
                        <div class="m-subcat-name m-row-span-3">
                            <a href="#" class="m-sm-card">
                                <img class="m-img-sm" src="<?php echo $template_dir; ?>/assets/images/small/img-1.jpg" alt="lg-img-card">
                                <div class="m-heading-sm">
                                    <h4>This is large card info</h4>
                                </div>
                            </a>
                        </div>
                        <div class="m-subcat-name m-row-span-3">
                            <a href="#" class="m-sm-card">
                                <img class="m-img-sm" src="<?php echo $template_dir; ?>/assets/images/small/img-1.jpg" alt="lg-img-card">
                                <div class="m-heading-sm">
                                    <h4>This is large card info</h4>
                                </div>
                            </a>
                        </div>
                        <div class="m-subcat-name m-row-span-3">
                            <a href="#" class="m-sm-card">
                                <img class="m-img-sm" src="<?php echo $template_dir; ?>/assets/images/small/img-1.jpg" alt="lg-img-card">
                                <div class="m-heading-sm">
                                    <h4>This is large card info</h4>
                                </div>
                            </a>
                        </div>
                        <div class="m-subcat-name m-row-span-3">
                            <a href="#" class="m-sm-card">
                                <img class="m-img-sm" src="<?php echo $template_dir; ?>/assets/images/small/img-1.jpg" alt="lg-img-card">
                                <div class="m-heading-sm">
                                    <h4>This is large card info</h4>
                                </div>
                            </a>
                        </div>
                        <div class="m-subcat-name m-row-span-3">
                            <a href="#" class="m-sm-card">
                                <img class="m-img-sm" src="<?php echo $template_dir; ?>/assets/images/small/img-1.jpg" alt="lg-img-card">
                                <div class="m-heading-sm">
                                    <h4>This is large card info</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="m-col-subcat">
                        <div class="m-subcat-name m-row-span-4">
                            <a href="#" class="m-lg-card">
                                <img class="m-img-lg" src="<?php echo $template_dir; ?>/assets/images/small/img-1.jpg" alt="lg-img-card">
                                <div class="m-heading-sm" style="position: relative;top: -7px;">
                                    <h4 class="m-heading-lg">This is large card info</h4>
                                </div>
                            </a>
                        </div>
                        <div class="m-subcat-name m-row-span-3">
                            <a href="#" class="m-sm-card">
                                <img class="m-img-sm" src="<?php echo $template_dir; ?>/assets/images/small/img-1.jpg" alt="lg-img-card">
                                <div class="m-heading-sm">
                                    <h4>This is large card info</h4>
                                </div>
                            </a>
                        </div>
                        <div class="m-subcat-name m-row-span-3">
                            <a href="#" class="m-sm-card">
                                <img class="m-img-sm" src="<?php echo $template_dir; ?>/assets/images/small/img-1.jpg" alt="lg-img-card">
                                <div class="m-heading-sm">
                                    <h4>This is large card info</h4>
                                </div>
                            </a>
                        </div>
                        <div class="m-subcat-name m-row-span-3">
                            <a href="#" class="m-sm-card">
                                <img class="m-img-sm" src="<?php echo $template_dir; ?>/assets/images/small/img-1.jpg" alt="lg-img-card">
                                <div class="m-heading-sm">
                                    <h4>This is large card info</h4>
                                </div>
                            </a>
                        </div>
                        <div class="m-subcat-name m-row-span-3">
                            <a href="#" class="m-sm-card">
                                <img class="m-img-sm" src="<?php echo $template_dir; ?>/assets/images/small/img-1.jpg" alt="lg-img-card">
                                <div class="m-heading-sm">
                                    <h4>This is large card info</h4>
                                </div>
                            </a>
                        </div>
                        <div class="m-subcat-name m-row-span-3">
                            <a href="#" class="m-sm-card">
                                <img class="m-img-sm" src="<?php echo $template_dir; ?>/assets/images/small/img-1.jpg" alt="lg-img-card">
                                <div class="m-heading-sm">
                                    <h4>This is large card info</h4>
                                </div>
                            </a>
                        </div>
                    </div>
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
                '<span class="ui-icon ui-icon-newwin"></div>');

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