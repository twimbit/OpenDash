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
            <div class="ext-main">
                <a href="<?php echo home_url(); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.72" height="15.72" viewBox="0 0 15.72 15.72">
                        <path id="ic_exit_to_app_24px" d="M12.528,14,11.3,15.227,6.93,10.86,11.3,6.493l1.231,1.231L10.275,9.987H18.72v1.747H10.275ZM4.747,3H16.973A1.746,1.746,0,0,1,18.72,4.747V8.24H16.973V4.747H4.747V16.973H16.973V13.48H18.72v3.493a1.746,1.746,0,0,1-1.747,1.747H4.747A1.752,1.752,0,0,1,3,16.973V4.747A1.752,1.752,0,0,1,4.747,3Z" transform="translate(-3 -3)" fill="#fff" />
                    </svg>
                </a>
            </div>
            <div class="client-icon">
                <img src="<?php echo get_field('category_logo', get_queried_object())['url']; ?>" alt="" />
                <a href="#" class="client-link"></a>
            </div>
            <h4 class="client-name">
                <p><span style="font-weight: 700">Terminal</span> - <?php echo get_queried_object()->name; ?></p>
            </h4>
            <div class="right-tools">
                <div class="hamberger-icon">
                    <svg on="tap:sidebar-right.toggle" id="sidebarCollapse" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
                    </svg>
                </div>
                <div class="fullscreen-icon" onclick="toggleFullScreen(document.body)">
                    <svg height="100%" version="1.1" viewBox="0 0 36 36" width="100%">
                        <g class="ytp-fullscreen-button-corner-0">
                            <use class="ytp-svg-shadow" xlink:href="#ytp-id-25"></use>
                            <path class="ytp-svg-fill" d="m 10,16 2,0 0,-4 4,0 0,-2 L 10,10 l 0,6 0,0 z" id="ytp-id-25"></path>
                        </g>
                        <g class="ytp-fullscreen-button-corner-1">
                            <use class="ytp-svg-shadow" xlink:href="#ytp-id-26"></use>
                            <path class="ytp-svg-fill" d="m 20,10 0,2 4,0 0,4 2,0 L 26,10 l -6,0 0,0 z" id="ytp-id-26"></path>
                        </g>
                        <g class="ytp-fullscreen-button-corner-2">
                            <use class="ytp-svg-shadow" xlink:href="#ytp-id-27"></use>
                            <path class="ytp-svg-fill" d="m 24,24 -4,0 0,2 L 26,26 l 0,-6 -2,0 0,4 0,0 z" id="ytp-id-27"></path>
                        </g>
                        <g class="ytp-fullscreen-button-corner-3">
                            <use class="ytp-svg-shadow" xlink:href="#ytp-id-28"></use>
                            <path class="ytp-svg-fill" d="M 12,20 10,20 10,26 l 6,0 0,-2 -4,0 0,-4 0,0 z" id="ytp-id-28"></path>
                        </g>
                    </svg>
                </div>
                <div class="zoom-in">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search-plus" class="svg-inline--fa fa-search-plus fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M304 192v32c0 6.6-5.4 12-12 12h-56v56c0 6.6-5.4 12-12 12h-32c-6.6 0-12-5.4-12-12v-56h-56c-6.6 0-12-5.4-12-12v-32c0-6.6 5.4-12 12-12h56v-56c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v56h56c6.6 0 12 5.4 12 12zm201 284.7L476.7 505c-9.4 9.4-24.6 9.4-33.9 0L343 405.3c-4.5-4.5-7-10.6-7-17V372c-35.3 27.6-79.7 44-128 44C93.1 416 0 322.9 0 208S93.1 0 208 0s208 93.1 208 208c0 48.3-16.4 92.7-44 128h16.3c6.4 0 12.5 2.5 17 7l99.7 99.7c9.3 9.4 9.3 24.6 0 34zM344 208c0-75.2-60.8-136-136-136S72 132.8 72 208s60.8 136 136 136 136-60.8 136-136z"></path>
                    </svg>
                </div>
                <div class="zoom-out">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search-minus" class="svg-inline--fa fa-search-minus fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M304 192v32c0 6.6-5.4 12-12 12H124c-6.6 0-12-5.4-12-12v-32c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm201 284.7L476.7 505c-9.4 9.4-24.6 9.4-33.9 0L343 405.3c-4.5-4.5-7-10.6-7-17V372c-35.3 27.6-79.7 44-128 44C93.1 416 0 322.9 0 208S93.1 0 208 0s208 93.1 208 208c0 48.3-16.4 92.7-44 128h16.3c6.4 0 12.5 2.5 17 7l99.7 99.7c9.3 9.4 9.3 24.6 0 34zM344 208c0-75.2-60.8-136-136-136S72 132.8 72 208s60.8 136 136 136 136-60.8 136-136z"></path>
                    </svg>
                </div>
            </div>
            <div class="twimbit-icon">
                <img src="<?php echo $template_dir; ?>/assets/images/twimbit-logo-transparent-white1.png" alt="" />
            </div>

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