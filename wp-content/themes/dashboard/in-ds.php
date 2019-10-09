<?php
/* Template Name: insight dashboard */
?>
<!DOCTYPE html>
<html style="height: 100% !important">

<head>
    <meta charset="utf-8" />
    <title>Dashboard - DBS - Bank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    /> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Amp tags -->
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <?php $template_dir = get_template_directory_uri(); ?>
    <!-- Lightbox css -->
    <link href="<?php echo $template_dir; ?>/plugins/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- App css -->
    <link href="<?php echo $template_dir; ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $template_dir; ?>/assets/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body style="height: 100% !important">
    <!-- Begin page -->

    <div id="wrapper">
        <!-- Sidebar  -->
        <amp-sidebar id="sidebar-right" class="sample-sidebar" layout="nodisplay" side="right">
            <button on="tap:sidebar-right.close">Close sidebar</button>
            <nav>
                <ul>
                    <li>Nav item 1</li>
                    <li>Nav item 2</li>
                </ul>
            </nav>
            <ul>
                <li>Nav item 3</li>
                <li>Nav item 4</li>
            </ul>
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
                <img src="<?php echo $template_dir; ?>/assets/images/twimbit-pro-logo.png" alt="" />
            </div>
            <h4 class="client-name">
                <p><span style="font-weight: 700">Terminal</span> - <?php echo 'insights'; ?></p>
            </h4>
            <div class="twimbit-icon">
                <img src="<?php echo $template_dir; ?>/assets/images/twimbit-logo-transparent-white1.png" alt="" />
            </div>
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
        </div>
        <div class="dashboard fancy-scrollbar">
            <div class="main-board" id="main-board">

            </div>
        </div>
    </div>

    <!-- gallery, video and live Modal container -->
    <div class="video-container" id="gvl" style="display:none">
        <div class="infinite">
            <div class="pace pace-active">
                <div class="pace-activity" style="display:none"></div>
            </div>
        </div>
        <div class="vc-con">
            <div class="in-title-c">
                <div class="title">This is title</div>
                <a href="#" id="vc-con-rm">
                    <div class="close-button"></div>
                </a>
            </div>
            <div class="vc-main">

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

    <!--Echart Chart-->
    <script type="text/javascript" src="<?php echo $template_dir; ?>/plugins/echart/echarts.js"></script>
    <script type="text/javascript" src="<?php echo $template_dir; ?>/plugins/echart/world.js"></script>

    <!-- Echart init -->
    <script src="<?php echo $template_dir; ?>/assets/pages/jquery.echart.init.js"></script>

    <!-- Flot chart -->
    <script src="<?php echo $template_dir; ?>/plugins/flot-chart/jquery.flot.min.js"></script>
    <script src="<?php echo $template_dir; ?>/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo $template_dir; ?>/assets/pages/jquery.flot.init.js"></script>

    <!-- Light Box js -->
    <script src="<?php echo $template_dir; ?>/plugins/lightbox/js/lightbox.min.js" type="text/javascript"></script>

    <!-- App js -->
    <script src="<?php echo $template_dir; ?>/assets/js/jquery.app.js"></script>
    <script>
        document.onreadystatechange = function() {
            let state = document.readyState;
            if (state == "interactive") {
                // $('#loader').hide();
            }
        };
        document.addEventListener("keypress", keyUpTextField, false);

        function keyUpTextField(e) {
            var keyCode = e.keyCode;
            if (keyCode == 70 || keyCode == 102) {
                toggleFullScreen(document.body);
            }
        }
        /* Fullscreen logic */
        function toggleFullScreen(elem) {
            // ## The below if statement seems to work better ## if ((document.fullScreenElement && document.fullScreenElement !== null) || (document.msfullscreenElement && document.msfullscreenElement !== null) || (!document.mozFullScreen && !document.webkitIsFullScreen)) {
            if (
                (document.fullScreenElement !== undefined &&
                    document.fullScreenElement === null) ||
                (document.msFullscreenElement !== undefined &&
                    document.msFullscreenElement === null) ||
                (document.mozFullScreen !== undefined && !document.mozFullScreen) ||
                (document.webkitIsFullScreen !== undefined &&
                    !document.webkitIsFullScreen)
            ) {
                if (elem.requestFullScreen) {
                    elem.requestFullScreen();
                } else if (elem.mozRequestFullScreen) {
                    elem.mozRequestFullScreen();
                } else if (elem.webkitRequestFullScreen) {
                    elem.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
                } else if (elem.msRequestFullscreen) {
                    elem.msRequestFullscreen();
                }
            } else {
                if (document.cancelFullScreen) {
                    document.cancelFullScreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.webkitCancelFullScreen) {
                    document.webkitCancelFullScreen();
                } else if (document.msExitFullscreen) {
                    document.msExitFullscreen();
                }
            }
        }
        // Podcast player logic
        pd_player = $('.pd-player');
        for (i = 0; i < pd_player.length; i++) {
            pd_player[i].addEventListener('click', function() {
                $('#gvl').fadeIn(200);
                pd_id = $(this).attr('pd-id');
                // Ajax call
                loadArticle(pd_id, 'podcast');
            });
        }

        /* Video carousel logic */
        v_player = $('.v-player');
        for (i = 0; i < v_player.length; i++) {
            v_player[i].addEventListener('click', function() {
                $('#gvl').fadeIn(200);
                v_id = $(this).attr('v-id');
                // Ajax call
                loadArticle(v_id, 'video');
            });
        }

        // Modal closing.
        $('#vc-con-rm').click(function() {
            $('#gvl').fadeOut(200);
            $('.vc-main').html("");
        });

        // Ajax calling method
        function loadArticle(id, type) {
            $('.pace-activity').show('fast');
            $.ajax({
                url: "<?php echo admin_url(); ?>admin-ajax.php",
                type: 'POST',
                data: "action=infinite_scroll&pd_id=" + id + "&type=" + type,
                success: function(data) {
                    $('.pace-activity').hide('1000');
                    $(".vc-main").append(data);
                }
            });
            return false;
        }
    </script>
</body>

</html>