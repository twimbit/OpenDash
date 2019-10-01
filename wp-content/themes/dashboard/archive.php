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
    <script async custom-element="amp-audio" src="https://cdn.ampproject.org/v0/amp-audio-0.1.js"></script>


    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <?php $template_dir = get_template_directory_uri(); ?>

    <!-- App css -->
    <link href="<?php echo $template_dir; ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $template_dir; ?>/assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- Jquery ui css -->
    <link href="<?php echo $template_dir; ?>/assets/css/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />


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
                <p><span style="font-weight: 700">Terminal</span> - <?php echo get_queried_object()->name; ?></p>
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
                <div class="row-1">
                    <div class="tab-card card-box black-tint gap" id="overview">
                        <?php get_template_part("widgets/dashboard", "tabs"); ?>
                    </div>
                    <div class="social-links gap">
                        <div class="social black-tint">
                            <a class="social-icon" data-tooltip="LinkedIn" href="https://www.linkedin.com/company/colorlib">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>

                            <a class="social-icon" data-tooltip="Twitter" href="https://twitter.com/colorlib">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>

                            <a class="social-icon" data-tooltip="Facebook" href="https://www.facebook.com/colorlib">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>

                            <a class="social-icon" data-tooltip="YouTube" href="https://www.youtube.com/c/Colorlib">
                                <i class="fa fa-youtube" aria-hidden="true"></i>
                            </a>
                            <a class="social-icon" data-tooltip="YouTube" href="https://instagram.com/Colorlib">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="mr">
                        <div class="key-members fancy-scrollbar gap">
                            <?php get_template_part("widgets/dashboard", "members"); ?>
                        </div>
                        <div class="realTimeChart black-tint gap">
                            <?php get_template_part("widgets/dashboard", "rtc"); ?>
                        </div>
                    </div>

                    <div class="analytics-charts black-tint">
                        <?php get_template_part("widgets/dashboard", "insight"); ?>
                    </div>
                </div>
                <div class="row-2">
                    <div class="timeline-card card-box widget-box-two gap fancy-scrollbar timeline-vertical-scroll black-tint">
                        <?php get_template_part("widgets/dashboard", "timeline"); ?>
                    </div>
                    <div class="column-1">
                        <div class="row-2-1">
                            <div class="world-map gap">
                                <?php get_template_part("widgets/dashboard", "wm"); ?>
                            </div>
                            <div class="radar">
                                <div class="radar-back">
                                    <div class="radar-container">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 453.701 349.096">
                                            <defs>
                                                <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                                    <stop offset="0" stop-color="#88ffdf" />
                                                    <stop offset="1" stop-opacity="0" />
                                                </linearGradient>
                                                <linearGradient id="linear-gradient-2" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                                    <stop offset="0" stop-color="#ffab09" />
                                                    <stop offset="1" stop-opacity="0" />
                                                </linearGradient>
                                                <linearGradient id="linear-gradient-3" x1="0" y1="0.5" x2="1" y2="0.5" xlink:href="#linear-gradient" />
                                                <linearGradient id="linear-gradient-4" x1="1" y1="0.5" x2="0" y2="0.5" xlink:href="#linear-gradient" />
                                                <linearGradient id="linear-gradient-5" x1="0" y1="0.5" x2="1" y2="0.5" xlink:href="#linear-gradient" />
                                                <linearGradient id="linear-gradient-6" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                                    <stop offset="0" stop-color="#ffab27" />
                                                    <stop offset="1" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                            <g id="Group_967" data-name="Group 967" transform="translate(-770 -321.718)">
                                                <g id="Group_949" data-name="Group 949" transform="translate(-42 -78)">
                                                    <g id="Group_937" data-name="Group 937" transform="translate(-69.449 340.159) rotate(-16)">
                                                        <g id="Layer_2" data-name="Layer 2" transform="translate(842.079 361.704)">
                                                            <g id="Layer_2-2" data-name="Layer 2" transform="translate(0.08 0)">
                                                                <g id="Layer_1" data-name="Layer 1">
                                                                    <g id="Infographic10">
                                                                        <g id="Group_932" data-name="Group 932" opacity="0.3">
                                                                            <path id="Path_3190" data-name="Path 3190" d="M130.769,248.933c0-35.425-29.256-64.143-65.345-64.143S.08,213.508.08,248.933s29.256,64.143,65.345,64.143S130.769,284.358,130.769,248.933Z" transform="translate(-0.08 -184.79)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="0.2" stroke-dasharray="2.01 2.01" />
                                                                        </g>
                                                                        <path id="Path_3191" data-name="Path 3191" d="M93.075,242.491c0-18.773-15.5-33.991-34.628-33.991S23.82,223.718,23.82,242.491s15.5,33.991,34.628,33.991S93.075,261.264,93.075,242.491Z" transform="translate(6.923 -178.335)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1" opacity="0.3" />
                                                                        <path id="Path_3192" data-name="Path 3192" d="M105.828,246.16c.012-22.7-17.506-41.72-40.519-43.987s-44.031,12.955-48.615,35.207,8.758,44.294,30.86,50.982l12.743-42.1,42.8,15.254a43.583,43.583,0,0,0,2.732-15.356Z" transform="translate(4.556 -181.89)" opacity="0.4" fill="url(#linear-gradient)" />
                                                                        <text id="_000067866756" data-name="000067866756" transform="matrix(1, 0, 0, -1, 37.179, 23.32)" fill="#fff" font-size="1" font-family="OpenSans-Regular, Open Sans" opacity="0.4">
                                                                            <tspan x="0" y="0">000067866756</tspan>
                                                                        </text>
                                                                        <path id="Path_3195" data-name="Path 3195" d="M19.112,193.279H16.017v3.013h-.57v-3.013H12.43v-.547h3.017V189.72h.57v3.013h3.095Z" transform="translate(3.563 -74.273)" fill="#9ae5e5" opacity="0.18" />
                                                                        <text id="FOLDER_02" data-name="FOLDER 02" transform="matrix(1, 0, 0, -1, 195.244, 8.171)" fill="#fff" font-size="1" font-family="OpenSans-Regular, Open Sans" opacity="0.5">
                                                                            <tspan x="0" y="0">FOLDER 02</tspan>
                                                                        </text>
                                                                        <path id="Path_3196" data-name="Path 3196" d="M225.566,122.345l-7.578-67.962-87.762-30.6L19.2,175.675Z" transform="translate(45.007 42.05)" opacity="0.2" fill="url(#linear-gradient-2)" />
                                                                        <path id="Path_3197" data-name="Path 3197" d="M93.122,162.055l94-104.655L57.16,115.187l.363.775a140.7,140.7,0,0,0,35.6,46.092Z" transform="translate(16.757 128.165)" opacity="0.4" fill="url(#linear-gradient-3)" />
                                                                        <path id="Path_3198" data-name="Path 3198" d="M35.993,199.516l162.144-71.185S42.74,88.925,31.163,83.37c-9.868,20.084-13.442,48.749-12.574,61.6C18.355,152.61,21.036,181.745,35.993,199.516Z" transform="translate(5.343 57.691)" opacity="0.4" fill="url(#linear-gradient-4)" />
                                                                        <path id="Path_3199" data-name="Path 3199" d="M105.41,154.865l68.1,136.777s-.57-146.985-.57-152.438C167.038,138.785,121.9,139.662,105.41,154.865Z" transform="translate(30.99 -105.315)" opacity="0.4" fill="url(#linear-gradient-5)" />
                                                                        <path id="Path_3200" data-name="Path 3200" d="M229.678,152.427c0-31.164-25.737-56.427-57.484-56.427s-57.484,25.263-57.484,56.427,25.737,56.427,57.484,56.427,57.484-25.263,57.484-56.427Z" transform="translate(33.733 32.299)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="0.5" opacity="0.1" />
                                                                        <path id="Path_3201" data-name="Path 3201" d="M161.422,140.583a3.121,3.121,0,1,0-3.121,3.064,3.138,3.138,0,0,0,2.211-.894A3.022,3.022,0,0,0,161.422,140.583Z" transform="translate(45.671 44.727)" fill="#fff" />
                                                                        <path id="Path_3202" data-name="Path 3202" d="M282.607,162.852c0-55.462-45.8-100.422-102.3-100.422S78,107.39,78,162.852s45.8,100.422,102.3,100.422,102.3-44.96,102.3-100.422Z" transform="translate(22.905 20.552)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="0.5" opacity="0.1" />
                                                                        <path id="Path_3203" data-name="Path 3203" d="M158.161,141.307l.039-15.241h1.632v-.343H158.2l.013-5.771h.738V119.6h-.738v-3.521h.738v-.331h-.738l.026-5.606h1.593v-.343h-1.593l.013-4.97h.7v-.343h-.7V100.96h.7v-.343h-.7l.013-4.182h1.671v-.14h-1.671v-.318h1.683l-.958-1.627-.971-1.64-.958,1.64-.958,1.627h1.813v.318H156.05v.14h1.865l.013,4.182h-.945v.343h.945l.013,3.521h-.958v.343h.958l.013,4.97h-1.735v.343h1.748l.013,5.606h-1v.331h1l.013,3.521h-1.01v.356h1.01l.013,5.771h-1.787v.343h1.787l.052,15.241Z" transform="translate(45.928 104.028)" fill="#fff" opacity="0.38" />
                                                                        <path id="Path_3204" data-name="Path 3204" d="M204.531,140.147,189,140.109v-1.6h-.35v1.6l-5.892-.013v-.725h-.35v.725l-3.574-.013v-.712h-.363v.712l1.968-.013v-1.564h-.35v1.564l-5.063-.013v-.686h-.35v.686h-3.587v-.686h-.35v.674h-4.26v-1.64h-.142v1.64h-.311V138.38l-1.671.953-1.671.941,1.671.953,1.671.941v-1.78h.311v1.83h.142v-1.83l4.26-.025v.941h.35v-.941l3.587-.013v.953h.35v-.953l5.063-.013v1.716h.35v-1.716l-1.968-.013v.979h.363v-.979l3.574-.013v.991h.35v-.991l5.892-.025v1.767H189v-1.767l15.527-.051Z" transform="translate(47.886 45.062)" fill="#fff" opacity="0.38" />
                                                                        <path id="Path_3205" data-name="Path 3205" d="M121.39,140.489l15.527.038v1.614h.35v-1.614l5.879.013v.737h.35v-.737l3.587.013v.725h.363v-.725l-1.968.013v1.576h.35v-1.576l5.05.013v.7h.363v-.7l3.587.013v.686h.35v-.686l4.248.013v1.627h.155V140.6h.311v1.64l1.658-.928,1.671-.953-1.671-.941-1.658-.953v1.792h-.311v-1.83h-.155v1.83l-4.248.013v-.928h-.35v.928l-3.587.013v-.941h-.363v.941l-5.05.013v-1.716h-.35V140.3l1.968.025v-.979h-.363v.979l-3.587.013v-.992h-.35v.992l-5.879.013v-1.767h-.35v1.767l-15.527.051Z" transform="translate(35.704 44.974)" fill="#fff" opacity="0.38" />
                                                                        <path id="Path_3206" data-name="Path 3206" d="M158.2,149.14l.039,15.241h1.632v.343H158.24l.013,5.771h.738v.343h-.738v3.521h.738v.356h-.738l.026,5.593h1.593v.343h-1.593l.013,4.97h.7v.343h-.7v3.521h.7v.343h-.7l.013,4.182h1.671v.14H158.3v.305h1.683l-.958,1.64-.958,1.64-.971-1.64-.958-1.64h1.813v-.305H156.09v-.14h1.865l.013-4.182h-.945v-.343h.945l.013-3.521h-.958v-.343h.958l.013-4.97h-1.735v-.343h1.748l.013-5.593h-1v-.356h1l.013-3.521h-1.01V170.5h1.01l.013-5.771h-1.787v-.343h1.787l.065-15.241Z" transform="translate(45.94 -24.134)" fill="#fff" opacity="0.38" />
                                                                        <path id="Path_3207" data-name="Path 3207" d="M259.52,201.815l5.4-3.025.44.763-5.4,3.013Z" transform="translate(76.449 -92.076)" fill="#fff" />
                                                                        <path id="Path_3293" data-name="Path 3293" d="M2.265,6.917l.881-.007L3.193.719,2.312.726Z" transform="translate(343.603 109.053) rotate(62.35)" fill="#fff" />
                                                                        <path id="Path_3208" data-name="Path 3208" d="M263.35,194.2l5.607-2.644.376.788-5.607,2.631Z" transform="translate(77.579 -75.299)" fill="#fff" />
                                                                        <path id="Path_3294" data-name="Path 3294" d="M2.075,6.789l.88-.006L3,.585l-.88.006Z" transform="translate(348.564 118.963) rotate(66.39)" fill="#fff" />
                                                                        <path id="Path_3295" data-name="Path 3295" d="M1.957,6.723l.879-.006.039-6.2L2,.522Z" transform="translate(350.726 124.12) rotate(68.4)" fill="#fff" />
                                                                        <path id="Path_3296" data-name="Path 3296" d="M1.825,6.658,2.7,6.652,2.74.449,1.861.454Z" transform="matrix(0.335, 0.942, -0.942, 0.335, 352.772, 129.276)" fill="#fff" />
                                                                        <path id="Path_3297" data-name="Path 3297" d="M1.684,6.6l.879,0L2.6.385l-.879,0Z" transform="translate(354.622 134.522) rotate(72.34)" fill="#fff" />
                                                                        <path id="Path_3298" data-name="Path 3298" d="M1.512,6.528l.878,0L2.419.316l-.878,0Z" transform="translate(356.296 139.873) rotate(74.51)" fill="#fff" />
                                                                        <path id="Path_3299" data-name="Path 3299" d="M1.345,6.471l.878,0L2.249.258l-.878,0Z" transform="matrix(0.234, 0.972, -0.972, 0.234, 357.723, 145.292)" fill="#fff" />
                                                                        <path id="Path_3209" data-name="Path 3209" d="M278.706,164.54l.181.864-6.1,1.22-.168-.852Z" transform="translate(80.313 -12.598)" fill="#fff" />
                                                                        <path id="Path_3210" data-name="Path 3210" d="M279.528,160.52l.142.864-6.125,1.03-.155-.864Z" transform="translate(80.541 -3.277)" fill="#fff" />
                                                                        <path id="Path_3300" data-name="Path 3300" d="M.777,6.323l.877,0L1.669.107l-.877,0Z" transform="translate(360.914 161.809) rotate(82.47)" fill="#fff" />
                                                                        <path id="Path_3301" data-name="Path 3301" d="M.569,6.285l.877,0L1.458.068.58.07Z" transform="translate(361.606 167.38) rotate(84.52)" fill="#fff" />
                                                                        <path id="Path_3336" data-name="Path 3336" d="M.359,6.264h.879L1.244.037H.366Z" transform="matrix(0.06, 0.998, -0.998, 0.06, 361.065, 174.437)" fill="#fff" />
                                                                        <path id="Path_3337" data-name="Path 3337" d="M.162,6.23h.877l0-6.216H.165Z" transform="matrix(0.027, 1, -1, 0.027, 362.335, 178.584)" fill="#fff" />
                                                                        <path id="Path_3211" data-name="Path 3211" d="M281.379,140.221v.864l-6.229-.038.013-.877Z" transform="translate(81.06 43.92)" fill="#fff" />
                                                                        <path id="Path_3338" data-name="Path 3338" d="M.022,1.121l6.216,0V.239L.023.244Z" transform="matrix(0.999, 0.04, -0.04, 0.999, 356.123, 189.072)" fill="#fff" />
                                                                        <path id="Path_3339" data-name="Path 3339" d="M.049,1.336l6.215-.009V.45L.051.459Z" transform="translate(355.837 194.002) rotate(4.32)" fill="#fff" />
                                                                        <path id="Path_3212" data-name="Path 3212" d="M280.708,128.114l-.091.877-6.177-.686.091-.864Z" transform="translate(80.85 72.196)" fill="#fff" />
                                                                        <path id="Path_3213" data-name="Path 3213" d="M280.191,124.12l-.13.864-6.151-.89.129-.864Z" transform="translate(80.694 81.555)" fill="#fff" />
                                                                        <path id="Path_3214" data-name="Path 3214" d="M279.531,120.123l-.168.864-6.112-1.106.155-.852Z" transform="translate(80.499 90.89)" fill="#fff" />
                                                                        <path id="Path_3302" data-name="Path 3302" d="M.225,2.141l6.211-.024,0-.878L.228,1.264Z" transform="translate(352.939 213.709) rotate(12.36)" fill="#fff" />
                                                                        <path id="Path_3215" data-name="Path 3215" d="M271.72,110.73l6.022,1.513-.22.839-6.022-1.513Z" transform="translate(79.983 109.347)" fill="#fff" />
                                                                        <path id="Path_3216" data-name="Path 3216" d="M270.666,106.63l5.97,1.716-.259.839-5.957-1.729Z" transform="translate(79.664 118.455)" fill="#fff" />
                                                                        <path id="Path_3303" data-name="Path 3303" d="M.409,2.651l6.2-.034,0-.879-6.2.034Z" transform="translate(348.946 228.234) rotate(18.38)" fill="#fff" />
                                                                        <path id="Path_3304" data-name="Path 3304" d="M.474,2.792l6.2-.037.005-.879-6.2.037Z" transform="matrix(0.938, 0.348, -0.348, 0.938, 347.277, 232.96)" fill="#fff" />
                                                                        <path id="Path_3217" data-name="Path 3217" d="M266.7,94.61l5.75,2.326-.337.8-5.75-2.314Z" transform="translate(78.467 145.182)" fill="#fff" />
                                                                        <path id="Path_3305" data-name="Path 3305" d="M.61,3.038,6.807,3l.006-.88-6.2.043Z" transform="matrix(0.911, 0.412, -0.412, 0.911, 343.419, 242.347)" fill="#fff" />
                                                                        <path id="Path_3306" data-name="Path 3306" d="M.677,3.136,6.87,3.091l.007-.88L.683,2.256Z" transform="translate(341.24 246.951) rotate(26.34)" fill="#fff" />
                                                                        <path id="Path_3307" data-name="Path 3307" d="M.742,3.221l6.19-.048.007-.881L.749,2.34Z" transform="translate(338.906 251.488) rotate(28.38)" fill="#fff" />
                                                                        <path id="Path_3308" data-name="Path 3308" d="M.8,3.287l6.187-.05L7,2.356l-6.187.05Z" transform="matrix(0.863, 0.506, -0.506, 0.863, 336.407, 255.934)" fill="#fff" />
                                                                        <path id="Path_3309" data-name="Path 3309" d="M.86,3.336l6.183-.052L7.051,2.4.867,2.454Z" transform="matrix(0.845, 0.535, -0.535, 0.845, 333.735, 260.365)" fill="#fff" />
                                                                        <path id="Path_3310" data-name="Path 3310" d="M.911,3.37l6.18-.053L7.1,2.434l-6.18.053Z" transform="translate(330.934 264.636) rotate(34.33)" fill="#fff" />
                                                                        <path id="Path_3218" data-name="Path 3218" d="M252.9,68.74l5.012,3.623-.531.7-5.012-3.61Z" transform="translate(74.34 202.743)" fill="#fff" />
                                                                        <path id="Path_3311" data-name="Path 3311" d="M1,3.389l6.172-.056.008-.883L1,2.506Z" transform="matrix(0.784, 0.621, -0.621, 0.784, 324.831, 273.023)" fill="#fff" />
                                                                        <path id="Path_3312" data-name="Path 3312" d="M1.028,3.376,7.2,3.32,7.2,2.436l-6.168.056Z" transform="translate(321.561 277.08) rotate(40.37)" fill="#fff" />
                                                                        <path id="Path_3313" data-name="Path 3313" d="M1.051,3.349l6.164-.057.008-.885-6.164.057Z" transform="matrix(0.739, 0.674, -0.674, 0.739, 318.151, 281.021)" fill="#fff" />
                                                                        <path id="Path_3314" data-name="Path 3314" d="M1.066,3.307l6.16-.057.008-.885-6.16.057Z" transform="translate(314.589 284.873) rotate(44.37)" fill="#fff" />
                                                                        <path id="Path_3315" data-name="Path 3315" d="M1.072,3.253,7.228,3.2l.008-.886L1.08,2.368Z" transform="translate(310.882 288.626) rotate(46.37)" fill="#fff" />
                                                                        <path id="Path_3316" data-name="Path 3316" d="M1.069,3.189l6.152-.057.008-.886L1.077,2.3Z" transform="matrix(0.665, 0.747, -0.747, 0.665, 307.027, 292.27)" fill="#fff" />
                                                                        <path id="Path_3317" data-name="Path 3317" d="M1.057,3.114l6.148-.056.008-.887-6.148.056Z" transform="translate(303.07 295.745) rotate(50.33)" fill="#fff" />
                                                                        <path id="Path_3219" data-name="Path 3219" d="M230.312,44.5l3.794,4.843-.7.534L229.6,45.034Z" transform="translate(67.623 256.74)" fill="#fff" />
                                                                        <path id="Path_3220" data-name="Path 3220" d="M227.042,41.97l3.626,4.958-.725.508-3.613-4.958Z" transform="translate(66.659 262.398)" fill="#fff" />
                                                                        <path id="Path_3318" data-name="Path 3318" d="M.97,2.834l6.137-.053.008-.888L.978,1.946Z" transform="matrix(0.554, 0.833, -0.833, 0.554, 290.457, 305.443)" fill="#fff" />
                                                                        <path id="Path_3319" data-name="Path 3319" d="M.926,2.727l6.133-.051.007-.889L.933,1.838Z" transform="translate(286.02 308.407) rotate(58.39)" fill="#fff" />
                                                                        <path id="Path_3320" data-name="Path 3320" d="M.876,2.618l6.13-.049.007-.89-6.13.049Z" transform="translate(281.497 311.2) rotate(60.34)" fill="#fff" />
                                                                        <path id="Path_3321" data-name="Path 3321" d="M.819,2.5l6.126-.047.007-.89L.826,1.612Z" transform="translate(276.841 313.868) rotate(62.38)" fill="#fff" />
                                                                        <path id="Path_3221" data-name="Path 3221" d="M209.583,31.15l2.694,5.5-.8.381-2.694-5.5Z" transform="translate(61.482 286.552)" fill="#fff" />
                                                                        <path id="Path_3322" data-name="Path 3322" d="M.693,2.266l6.12-.042.006-.891L.7,1.375Z" transform="translate(267.249 318.696) rotate(66.36)" fill="#fff" />
                                                                        <path id="Path_3323" data-name="Path 3323" d="M.625,2.145l6.117-.039.006-.891L.631,1.254Z" transform="translate(262.356 320.858) rotate(68.36)" fill="#fff" />
                                                                        <path id="Path_3222" data-name="Path 3222" d="M198.322,26.24l2.085,5.746-.842.305-2.085-5.758Z" transform="translate(58.149 297.538)" fill="#fff" />
                                                                        <path id="Path_3324" data-name="Path 3324" d="M.485,1.9,6.6,1.87l0-.892L.49,1.011Z" transform="translate(252.264 324.697) rotate(72.37)" fill="#fff" />
                                                                        <path id="Path_3325" data-name="Path 3325" d="M.416,1.783l6.11-.03,0-.892L.42.891Z" transform="translate(247.136 326.337) rotate(74.37)" fill="#fff" />
                                                                        <path id="Path_3326" data-name="Path 3326" d="M.348,1.665l6.108-.026,0-.893L.352.772Z" transform="translate(241.964 327.797) rotate(76.36)" fill="#fff" />
                                                                        <path id="Path_3327" data-name="Path 3327" d="M.283,1.547l6.106-.023,0-.893L.286.654Z" transform="matrix(0.202, 0.979, -0.979, 0.202, 236.749, 329.064)" fill="#fff" />
                                                                        <path id="Path_3328" data-name="Path 3328" d="M.222,1.432l6.1-.019,0-.893L.225.539Z" transform="matrix(0.168, 0.986, -0.986, 0.168, 231.444, 330.171)" fill="#fff" />
                                                                        <path id="Path_3329" data-name="Path 3329" d="M.164,1.317l6.1-.015,0-.893L.166.424Z" transform="translate(226.124 331.06) rotate(82.36)" fill="#fff" />
                                                                        <path id="Path_3330" data-name="Path 3330" d="M.112,1.2l6.1-.011,0-.893L.113.309Z" transform="translate(220.776 331.767) rotate(84.38)" fill="#fff" />
                                                                        <path id="Path_3340" data-name="Path 3340" d="M.066,1.092l6.1-.007V.191L.067.2Z" transform="translate(215.419 332.283) rotate(86.38)" fill="#fff" />
                                                                        <path id="Path_3341" data-name="Path 3341" d="M.028.988l6.1,0V.09l-6.1,0Z" transform="matrix(0.03, 1, -1, 0.03, 210.314, 332.646)" fill="#fff" />
                                                                        <path id="Path_3342" data-name="Path 3342" d="M.019,6.107H.912V.006H.02Z" transform="matrix(1, 0.006, -0.006, 1, 203.742, 332.695)" fill="#fff" />
                                                                        <path id="Path_3343" data-name="Path 3343" d="M.12,6.146h.894l0-6.107H.125Z" transform="translate(198.464 332.237) rotate(2.291)" fill="#fff" />
                                                                        <path id="Path_3344" data-name="Path 3344" d="M.23,6.185h.893l.009-6.1H.239Z" transform="translate(192.957 332.178) rotate(4.35)" fill="#fff" />
                                                                        <path id="Path_3331" data-name="Path 3331" d="M.339,6.235l.893,0L1.245.13l-.893,0Z" transform="translate(187.595 331.619) rotate(6.37)" fill="#fff" />
                                                                        <path id="Path_3332" data-name="Path 3332" d="M.448,6.29l.893,0,.016-6.1-.893,0Z" transform="translate(182.257 330.885) rotate(8.36)" fill="#fff" />
                                                                        <path id="Path_3223" data-name="Path 3223" d="M138.254,21.2l-1.127,6-.868-.153,1.114-6.013Z" transform="translate(40.09 309.257)" fill="#fff" />
                                                                        <path id="Path_3224" data-name="Path 3224" d="M134.291,22.018l-1.334,5.974-.868-.191,1.334-5.962Z" transform="translate(38.86 307.43)" fill="#fff" />
                                                                        <path id="Path_3333" data-name="Path 3333" d="M.787,6.485l.893,0L1.707.372l-.893,0Z" transform="matrix(0.969, 0.248, -0.248, 0.969, 166.436, 327.498)" fill="#fff" />
                                                                        <path id="Path_3225" data-name="Path 3225" d="M124.715,30.012l-.855-.242,1.748-5.86.855.242Z" transform="translate(36.432 302.779)" fill="#fff" />
                                                                        <path id="Path_3226" data-name="Path 3226" d="M115.405,16.7a1.416,1.416,0,0,0-1.952.306,1.357,1.357,0,0,0,.31,1.917,1.416,1.416,0,0,0,1.953-.3,1.354,1.354,0,0,0,.25-1.023A1.37,1.37,0,0,0,115.405,16.7Z" transform="translate(33.284 323.111)" fill="#fff" />
                                                                        <path id="Path_3227" data-name="Path 3227" d="M115.056,14.85a3.438,3.438,0,0,0-3.411,2.872,3.391,3.391,0,0,0,2.361,3.754,3.483,3.483,0,0,0,4.144-1.707,3.356,3.356,0,0,0-1.074-4.284,3.489,3.489,0,0,0-2.02-.636Zm0,6.432a3.091,3.091,0,0,1-2.964-2.086,3.007,3.007,0,0,1,1.117-3.408,3.142,3.142,0,0,1,3.647,0,2.97,2.97,0,0,1,1.295,1.97,2.883,2.883,0,0,1-.544,2.263,3.1,3.1,0,0,1-2.551,1.258Z" transform="translate(32.817 322.67)" fill="#fff" />
                                                                        <path id="Path_3228" data-name="Path 3228" d="M244.1,40.3a1.415,1.415,0,0,0-1.949.32,1.357,1.357,0,0,0,.323,1.914,1.416,1.416,0,0,0,1.95-.314,1.353,1.353,0,0,0,.244-1.026,1.37,1.37,0,0,0-.568-.894Z" transform="translate(71.25 269.5)" fill="#fff" />
                                                                        <path id="Path_3229" data-name="Path 3229" d="M243.79,38.43a3.465,3.465,0,0,0-3.3,2.358,3.372,3.372,0,0,0,1.265,3.808,3.5,3.5,0,0,0,4.843-.775,3.342,3.342,0,0,0,.281-3.542,3.466,3.466,0,0,0-3.091-1.848Zm0,6.445a3.09,3.09,0,0,1-2.938-2.1,3.007,3.007,0,0,1,1.118-3.393,3.142,3.142,0,0,1,3.633-.013,2.97,2.97,0,0,1,1.295,1.97,2.882,2.882,0,0,1-.544,2.263A3.1,3.1,0,0,1,243.79,44.875Z" transform="translate(70.786 269.09)" fill="#fff" />
                                                                        <path id="Path_3230" data-name="Path 3230" d="M287.869,163.868a1.42,1.42,0,0,0-1.431-.2,1.361,1.361,0,0,0-.2,2.421,1.415,1.415,0,0,0,1.885-.356,1.356,1.356,0,0,0-.254-1.868Z" transform="translate(84.139 -11.036)" fill="#fff" />
                                                                        <path id="Path_3231" data-name="Path 3231" d="M75.877,207.614a1.42,1.42,0,0,0-1.556-.064,1.364,1.364,0,0,0-.652,1.388,1.384,1.384,0,0,0,1.06,1.119,1.412,1.412,0,0,0,1.458-.537,1.341,1.341,0,0,0,.249-1.017A1.357,1.357,0,0,0,75.877,207.614Z" transform="translate(21.622 -110.484)" fill="#fff" />
                                                                        <path id="Path_3232" data-name="Path 3232" d="M64.949,191.258a1.42,1.42,0,0,0-1.431-.2,1.362,1.362,0,0,0-.2,2.421,1.415,1.415,0,0,0,1.885-.356A1.356,1.356,0,0,0,64.949,191.258Z" transform="translate(18.383 -73.243)" fill="#fff" />
                                                                        <path id="Path_3233" data-name="Path 3233" d="M58.3,176.624a1.42,1.42,0,0,0-1.556-.064,1.364,1.364,0,0,0-.652,1.388,1.383,1.383,0,0,0,1.06,1.119,1.412,1.412,0,0,0,1.458-.537,1.356,1.356,0,0,0-.311-1.907Z" transform="translate(16.436 -40.101)" fill="#fff" />
                                                                        <path id="Path_3234" data-name="Path 3234" d="M53.785,159.136a1.429,1.429,0,0,0-1.955.318,1.357,1.357,0,0,0,.326,1.914,1.415,1.415,0,0,0,1.95-.317,1.357,1.357,0,0,0-.32-1.915Z" transform="translate(15.108 -0.406)" fill="#fff" />
                                                                        <path id="Path_3235" data-name="Path 3235" d="M287.514,161.925a3.465,3.465,0,0,0-3.317,2.359,3.372,3.372,0,0,0,1.284,3.818,3.524,3.524,0,0,0,3.856.13,3.384,3.384,0,0,0,1.6-3.448,3.465,3.465,0,0,0-3.419-2.86Zm0,6.445a3.082,3.082,0,0,1-1.8-.572,3.007,3.007,0,0,1-1.137-3.4,3.111,3.111,0,0,1,5.7-.443,3,3,0,0,1-.233,3.157,3.153,3.153,0,0,1-2.538,1.258Z" transform="translate(83.679 -11.394)" fill="#fff" />
                                                                        <path id="Path_3236" data-name="Path 3236" d="M288.274,118.123a1.405,1.405,0,0,0-1.036-.245,1.39,1.39,0,0,0-.907.55,1.352,1.352,0,0,0-.065,1.527,1.408,1.408,0,0,0,1.414.64,1.389,1.389,0,0,0,1.14-1.041,1.36,1.36,0,0,0-.547-1.431Z" transform="translate(84.278 92.75)" fill="#fff" />
                                                                        <path id="Path_3237" data-name="Path 3237" d="M273.4,75.306a1.416,1.416,0,0,0-1.952.306,1.357,1.357,0,0,0,.31,1.917,1.416,1.416,0,0,0,1.953-.3,1.353,1.353,0,0,0,.25-1.023A1.369,1.369,0,0,0,273.4,75.306Z" transform="translate(79.888 189.998)" fill="#fff" />
                                                                        <path id="Path_3238" data-name="Path 3238" d="M204.93,17.425a1.415,1.415,0,0,0-1.885.356,1.356,1.356,0,0,0,.254,1.868,1.429,1.429,0,0,0,1.955-.318,1.328,1.328,0,0,0,.249-1.021,1.345,1.345,0,0,0-.572-.886Z" transform="translate(59.712 321.404)" fill="#fff" />
                                                                        <path id="Path_3239" data-name="Path 3239" d="M160.213,8.953a1.406,1.406,0,0,0-1.036-.245,1.389,1.389,0,0,0-.906.55,1.354,1.354,0,0,0-.25,1.023,1.369,1.369,0,0,0,.561.9,1.415,1.415,0,0,0,1.885-.356A1.356,1.356,0,0,0,160.213,8.953Z" transform="translate(46.504 340.744)" fill="#fff" />
                                                                        <rect id="Rectangle_1636" data-name="Rectangle 1636" width="0.699" height="14.212" transform="translate(205.384 332.626)" fill="#fff" />
                                                                        <path id="Path_3334" data-name="Path 3334" d="M2.6,15.58l.7,0L3.383.938l-.7,0Z" transform="matrix(0.94, 0.341, -0.341, 0.94, 151.577, 321.898)" fill="#fff" />
                                                                        <path id="Path_3240" data-name="Path 3240" d="M258.75,206.776l11.707-6.5.35.6L259.1,207.36Z" transform="translate(76.222 -98.765)" fill="#fff" />
                                                                        <path id="Path_3241" data-name="Path 3241" d="M273.05,164.26l13.455-2.25.117.674-13.455,2.237Z" transform="translate(80.44 -7.678)" fill="#fff" />
                                                                        <path id="Path_3242" data-name="Path 3242" d="M273.589,119.37l13.429,2.3-.117.674-13.442-2.3Z" transform="translate(80.561 89.101)" fill="#fff" />
                                                                        <path id="Path_3335" data-name="Path 3335" d="M1.418,5.87l13.69-.109.006-.69L1.424,5.18Z" transform="translate(337.967 252.108) rotate(29.96)" fill="#fff" />
                                                                        <path id="Path_3243" data-name="Path 3243" d="M233.61,43.785l.531-.445,9.117,10.513-.544.432Z" transform="translate(68.806 253.807)" fill="#fff" />
                                                                        <path id="Path_3244" data-name="Path 3244" d="M198.61,21.1l.66-.229,4.843,13.055-.66.242Z" transform="translate(58.482 302.489)" fill="#fff" />
                                                                        <g id="Group_933" data-name="Group 933" transform="translate(65.371 49.22)" opacity="0.5">
                                                                            <path id="Path_3245" data-name="Path 3245" d="M188.4,304.721C112.3,304.616,50.646,244.077,50.56,169.38c0-2.085,0-4.169.142-6.229s.272-4.462.479-6.674l.7.076c-.22,2.174-.376,4.373-.479,6.585s-.142,4.144-.142,6.241c-.1,62.466,43.524,116.82,105.413,131.357S282.52,286.187,311.24,230.445,325.923,106.9,277.318,66.577a139.4,139.4,0,0,0-170.258-5.5c-.155-.178-.324-.343-.492-.508a139.942,139.942,0,0,1,162.366-1.04c48.611,34.3,69.114,95.472,50.743,151.4S248.262,304.755,188.4,304.721Z" transform="translate(-50.56 -34.09)" fill="#fff" />
                                                                        </g>
                                                                        <text id="_06_.00_-2" data-name="06 {.00} -2" transform="matrix(0.933, 0.361, 0.361, -0.933, 134.826, 342.062)" fill="#fff" font-size="1" font-family="OpenSans-Regular, Open Sans" opacity="0.5">
                                                                            <tspan x="0" y="0">06 {.00} -2</tspan>
                                                                        </text>
                                                                        <text id="_06_.00_-2-2" data-name="06 {.00} -2" transform="matrix(-0.158, -0.987, -0.987, 0.158, 379.775, 163.291)" fill="#fff" font-size="2" font-family="OpenSans-Regular, Open Sans" opacity="0.6">
                                                                            <tspan x="0" y="0">06 {.00} -2</tspan>
                                                                        </text>
                                                                        <text id="_06_.00_-2-3" data-name="06 {.00} -2" transform="matrix(0.189, -0.982, -0.982, -0.189, 377.295, 222.19)" fill="#fff" font-size="2" font-family="OpenSans-Regular, Open Sans" opacity="0.1">
                                                                            <tspan x="0" y="0">06 {.00} -2</tspan>
                                                                        </text>
                                                                        <text id="_06_.00_-2-4" data-name="06 {.00} -2" transform="matrix(0.778, -0.628, -0.628, -0.778, 313.437, 324.548)" fill="#fff" font-size="2" font-family="OpenSans-Regular, Open Sans" opacity="0.5">
                                                                            <tspan x="0" y="0">06 {.00} -2</tspan>
                                                                        </text>
                                                                        <path id="Path_3246" data-name="Path 3246" d="M209.158,311.649l-2.719-7.474c62.06-23.1,98.444-86.431,86.479-150.517S224.056,43.027,157.683,43.027h0V35.12h0C228,35.081,288.3,84.4,300.938,152.306S274.95,287.274,209.158,311.649Z" transform="translate(46.367 6.892)" fill="#fff" opacity="0.05" />
                                                                        <path id="Path_3247" data-name="Path 3247" d="M263.4,254.592c-1.1-43.118-19.956-78.253-55.58-101.07,1.554-3.445,6.475-10.3,8.21-12.712,37.723,24.152,63.894,66.024,63.894,113.54C276.35,254.477,265.265,254.579,263.4,254.592Z" transform="translate(61.199 -70.4)" opacity="0.4" fill="url(#linear-gradient-6)" />
                                                                        <path id="Path_3248" data-name="Path 3248" d="M124.338,34.356c23.245,7.818,35.987,9.063,59.776,6.648.609,3.813.971,5.593,1.489,9.534C155.637,54.466,126.1,46.6,120.66,43.1,121.929,39.657,122.926,37.89,124.338,34.356Z" transform="translate(35.488 267.901)" fill="#9ae3ef" opacity="0.3" />
                                                                        <path id="Path_3249" data-name="Path 3249" d="M162.8,140.909a4.156,4.156,0,0,0-2.605-3.849,4.293,4.293,0,0,0-4.619.893,4.1,4.1,0,0,0-.924,4.531,4.248,4.248,0,0,0,8.148-1.575Z" transform="translate(45.42 44.312)" fill="#fff" opacity="0.3" />
                                                                        <g id="Group_934" data-name="Group 934" transform="translate(154.763 136.18)" opacity="0.5">
                                                                            <path id="Path_3250" data-name="Path 3250" d="M195.942,191.719a50.109,50.109,0,0,1-26.7,7.627,50.887,50.887,0,0,1-6.729-.446h-.523a49.834,49.834,0,0,1-30.212-16.233l-.207-.241a47.95,47.95,0,0,1-11.953-29.949c0-.153,0-.292,0-.432a1.162,1.162,0,0,0,.311,0c0,.153,0,.292,0,.432a47.621,47.621,0,0,0,11.849,29.758l.207.242a49.881,49.881,0,0,0,63.687,9.038,47.955,47.955,0,0,0,19.557-58.068c-8.336-21.459-30.882-34.218-53.977-30.545h-.311a49.449,49.449,0,0,0-28.969,15.94l-.207.229a47.606,47.606,0,0,0-11.862,28.6c0,.14,0,.292,0,.432a1.16,1.16,0,0,0-.311,0v-.432a47.959,47.959,0,0,1,11.94-28.766l.207-.216a49.851,49.851,0,0,1,29.15-16.055h.3a50.274,50.274,0,0,1,32.323,5.657l.285.152a48.252,48.252,0,0,1,2.15,83.274Z" transform="translate(-119.59 -102)" fill="#fff" />
                                                                        </g>
                                                                        <g id="Group_935" data-name="Group 935" transform="translate(176.324 158.057)" opacity="0.5">
                                                                            <path id="Path_3251" data-name="Path 3251" d="M163.577,119.15a26.839,26.839,0,1,0,27.337,26.834,27.089,27.089,0,0,0-27.337-26.834Zm0,53.491a26.7,26.7,0,1,1,27.195-26.694A26.948,26.948,0,0,1,163.577,172.641Z" transform="translate(-136.24 -119.15)" fill="#fff" />
                                                                        </g>
                                                                        <path id="Path_3252" data-name="Path 3252" d="M168.3,193.673c-24.971.007-45.218-19.86-45.221-44.372s20.245-44.385,45.216-44.381,45.2,19.873,45.2,44.385c0,24.492-20.227,44.356-45.186,44.368Zm0-76.372c-17.994,0-32.582,14.319-32.582,31.983s14.587,31.983,32.582,31.983,32.582-14.319,32.582-31.983S186.3,117.294,168.3,117.3Z" transform="translate(36.202 36.141)" fill="#fff" opacity="0.1" />
                                                                        <path id="Path_3253" data-name="Path 3253" d="M136.67,149.258a26.373,26.373,0,0,0,5.465,16.067l-.479.343a26.952,26.952,0,0,1-5.24-20.492,27.259,27.259,0,0,1,11.21-18.037l.324.483a26.62,26.62,0,0,0-11.279,21.635Z" transform="translate(40.043 35.9)" fill="#fff" />
                                                                        <path id="Path_3254" data-name="Path 3254" d="M130.819,143.36l7.55,1.119-.039.292-7.55-1.119Z" transform="translate(38.474 36.179)" fill="#fff" />
                                                                        <g id="Group_936" data-name="Group 936" transform="translate(193.871 174.607)" opacity="0.4">
                                                                            <path id="Path_3255" data-name="Path 3255" d="M158.651,132.2a.17.17,0,0,1-.123-.039.164.164,0,0,1-.058-.113.179.179,0,0,1,.155-.178.17.17,0,0,1,.123.039.164.164,0,0,1,.018.234.17.17,0,0,1-.115.057Z" transform="translate(-147.23 -111.251)" fill="#fff" />
                                                                            <path id="Path_3256" data-name="Path 3256" d="M157.2,132.222a.169.169,0,0,1-.112-.066.163.163,0,0,1-.03-.125.152.152,0,0,1,.059-.109.178.178,0,0,1,.234.028.151.151,0,0,1,.031.12.164.164,0,0,1-.058.113A.17.17,0,0,1,157.2,132.222Z" transform="translate(-147.646 -111.298)" fill="#fff" />
                                                                            <path id="Path_3257" data-name="Path 3257" d="M155.788,132.49a.165.165,0,0,1-.117-.2.169.169,0,0,1,.208-.115.165.165,0,0,1,.117.2A.169.169,0,0,1,155.788,132.49Z" transform="translate(-148.057 -111.922)" fill="#fff" />
                                                                            <path id="Path_3258" data-name="Path 3258" d="M154.431,132.983a.176.176,0,0,1-.078-.229.2.2,0,0,1,.233-.076.169.169,0,0,1,.078.229A.175.175,0,0,1,154.431,132.983Z" transform="translate(-148.449 -113.064)" fill="#fff" />
                                                                            <path id="Path_3259" data-name="Path 3259" d="M153.2,133.726a.164.164,0,0,1,.017-.3.171.171,0,0,1,.177.031.163.163,0,0,1,0,.229.157.157,0,0,1-.194.038Z" transform="translate(-148.81 -114.76)" fill="#fff" />
                                                                            <path id="Path_3260" data-name="Path 3260" d="M152.1,134.593a.151.151,0,0,1,0-.229.171.171,0,0,1,.211.021.163.163,0,0,1,.022.207A.184.184,0,0,1,152.1,134.593Z" transform="translate(-149.124 -116.822)" fill="#fff" />
                                                                            <path id="Path_3261" data-name="Path 3261" d="M151.433,135.691a.171.171,0,0,1-.233,0,.163.163,0,0,1-.032-.174.17.17,0,0,1,.3-.017.176.176,0,0,1-.039.191Z" transform="translate(-149.387 -119.292)" fill="#fff" />
                                                                            <path id="Path_3262" data-name="Path 3262" d="M150.715,136.988a.172.172,0,0,1-.227-.083.167.167,0,0,1,.084-.222.172.172,0,0,1,.227.083.167.167,0,0,1-.084.222Z" transform="translate(-149.589 -122.153)" fill="#fff" />
                                                                            <path id="Path_3263" data-name="Path 3263" d="M150.227,138.32a.169.169,0,0,1-.2-.117.165.165,0,0,1,.108-.2.171.171,0,0,1,.131.02.165.165,0,0,1,.076.107.15.15,0,0,1-.016.12.155.155,0,0,1-.1.071Z" transform="translate(-149.722 -125.163)" fill="#fff" />
                                                                            <path id="Path_3264" data-name="Path 3264" d="M150.127,139.55a.163.163,0,0,1-.04.121.169.169,0,0,1-.115.057.18.18,0,0,1-.181-.153.168.168,0,0,1,.337,0Z" transform="translate(-149.79 -128.363)" fill="#fff" />
                                                                            <path id="Path_3265" data-name="Path 3265" d="M149.963,141.161a.156.156,0,0,1-.111-.058.15.15,0,0,1-.031-.12.164.164,0,0,1,.058-.113.17.17,0,0,1,.123-.039.167.167,0,1,1-.039.33Z" transform="translate(-149.782 -131.601)" fill="#fff" />
                                                                            <path id="Path_3266" data-name="Path 3266" d="M150.208,142.549a.165.165,0,0,1-.117-.2.182.182,0,0,1,.22-.114.177.177,0,0,1,.1.216A.169.169,0,0,1,150.208,142.549Z" transform="translate(-149.703 -134.769)" fill="#fff" />
                                                                            <path id="Path_3267" data-name="Path 3267" d="M150.7,143.87a.166.166,0,0,1-.125-.137.164.164,0,0,1,.081-.166.171.171,0,0,1,.187.01.154.154,0,0,1,.089.091.15.15,0,0,1-.011.125.154.154,0,0,1-.092.087A.158.158,0,0,1,150.7,143.87Z" transform="translate(-149.559 -137.781)" fill="#fff" />
                                                                            <path id="Path_3268" data-name="Path 3268" d="M151.4,145.085a.164.164,0,0,1,.017-.3.171.171,0,0,1,.177.031.176.176,0,0,1,0,.242.171.171,0,0,1-.194.025Z" transform="translate(-149.341 -140.559)" fill="#fff" />
                                                                            <path id="Path_3269" data-name="Path 3269" d="M152.3,146.093a.151.151,0,0,1,0-.229.171.171,0,0,1,.211.021.163.163,0,0,1,.022.207A.184.184,0,0,1,152.3,146.093Z" transform="translate(-149.065 -142.94)" fill="#fff" />
                                                                            <path id="Path_3270" data-name="Path 3270" d="M153.625,146.978a.171.171,0,0,1-.233,0,.151.151,0,0,1,0-.229.157.157,0,0,1,.22,0A.175.175,0,0,1,153.625,146.978Z" transform="translate(-148.743 -144.93)" fill="#fff" />
                                                                            <path id="Path_3271" data-name="Path 3271" d="M154.834,147.727a.158.158,0,0,1-.131.006.154.154,0,0,1-.089-.095.164.164,0,0,1,.078-.216.172.172,0,0,1,.227.083A.167.167,0,0,1,154.834,147.727Z" transform="translate(-148.372 -146.544)" fill="#fff" />
                                                                            <path id="Path_3272" data-name="Path 3272" d="M156.148,148.2a.169.169,0,0,1-.207-.114.178.178,0,0,1,.117-.2.171.171,0,0,1,.131.02.165.165,0,0,1,.076.107.138.138,0,0,1-.01.124A.143.143,0,0,1,156.148,148.2Z" transform="translate(-147.977 -147.6)" fill="#fff" />
                                                                            <path id="Path_3273" data-name="Path 3273" d="M157.522,148.421a.17.17,0,0,1-.123-.039.164.164,0,0,1-.058-.113.151.151,0,0,1,.035-.125.157.157,0,0,1,.12-.053.171.171,0,0,1,.123.039.164.164,0,0,1,.058.113.179.179,0,0,1-.155.178Z" transform="translate(-147.563 -148.09)" fill="#fff" />
                                                                            <path id="Path_3274" data-name="Path 3274" d="M158.9,148.4a.156.156,0,0,1-.111-.058.15.15,0,0,1-.031-.12.164.164,0,0,1,.058-.113.17.17,0,0,1,.123-.039.156.156,0,0,1,.111.058.15.15,0,0,1,.031.12.164.164,0,0,1-.058.113A.17.17,0,0,1,158.9,148.4Z" transform="translate(-147.145 -148.044)" fill="#fff" />
                                                                            <path id="Path_3275" data-name="Path 3275" d="M160.268,148.119a.165.165,0,0,1-.117-.2.169.169,0,0,1,.208-.115.165.165,0,0,1,.117.2A.169.169,0,0,1,160.268,148.119Z" transform="translate(-146.735 -147.42)" fill="#fff" />
                                                                            <path id="Path_3276" data-name="Path 3276" d="M161.561,147.61a.176.176,0,0,1-.078-.229.183.183,0,0,1,.233-.076.164.164,0,0,1,.078.216.183.183,0,0,1-.233.089Z" transform="translate(-146.345 -146.275)" fill="#fff" />
                                                                            <path id="Path_3277" data-name="Path 3277" d="M162.76,146.883a.164.164,0,0,1,.017-.3.171.171,0,0,1,.177.031.163.163,0,0,1,0,.229.144.144,0,0,1-.194.038Z" transform="translate(-145.99 -144.645)" fill="#fff" />
                                                                            <path id="Path_3278" data-name="Path 3278" d="M163.8,145.909a.163.163,0,0,1,0-.229.184.184,0,0,1,.246,0,.163.163,0,0,1,0,.229A.184.184,0,0,1,163.8,145.909Z" transform="translate(-145.671 -142.502)" fill="#fff" />
                                                                            <path id="Path_3279" data-name="Path 3279" d="M164.915,144.765a.171.171,0,0,1-.233,0,.151.151,0,0,1,0-.229.171.171,0,0,1,.233.051.164.164,0,0,1-.052.229Z" transform="translate(-145.413 -139.934)" fill="#fff" />
                                                                            <path id="Path_3280" data-name="Path 3280" d="M165.574,143.609a.158.158,0,0,1-.131.006.154.154,0,0,1-.089-.095.164.164,0,0,1,.078-.216.158.158,0,0,1,.131-.006.154.154,0,0,1,.089.095.164.164,0,0,1-.078.216Z" transform="translate(-145.204 -137.189)" fill="#fff" />
                                                                            <path id="Path_3281" data-name="Path 3281" d="M166.049,142.333a.181.181,0,0,1-.207-.127.165.165,0,0,1,.117-.2.171.171,0,0,1,.131.02.173.173,0,0,1-.041.311Z" transform="translate(-145.057 -134.261)" fill="#fff" />
                                                                            <path id="Path_3282" data-name="Path 3282" d="M166.2,140.88a.171.171,0,0,1-.123-.039.164.164,0,0,1-.018-.234.169.169,0,0,1,.115-.057.18.18,0,0,1,.181.153.163.163,0,0,1-.04.121A.17.17,0,0,1,166.2,140.88Z" transform="translate(-145.003 -130.964)" fill="#fff" />
                                                                            <path id="Path_3283" data-name="Path 3283" d="M166.184,139.132a.156.156,0,0,1,.111.058.151.151,0,0,1,.031.12.164.164,0,0,1-.058.113.17.17,0,0,1-.123.039.191.191,0,0,1-.155-.191.165.165,0,0,1,.067-.11A.171.171,0,0,1,166.184,139.132Z" transform="translate(-145.011 -127.742)" fill="#fff" />
                                                                            <path id="Path_3284" data-name="Path 3284" d="M165.846,138.066a.165.165,0,0,1-.108-.2.169.169,0,0,1,.2-.117.177.177,0,0,1,.117.216A.169.169,0,0,1,165.846,138.066Z" transform="translate(-145.087 -124.591)" fill="#fff" />
                                                                            <path id="Path_3285" data-name="Path 3285" d="M165.305,136.716a.163.163,0,0,1-.051-.2.169.169,0,0,1,.193-.089.154.154,0,0,1,.089.091.15.15,0,0,1-.011.125.17.17,0,0,1-.22.076Z" transform="translate(-145.233 -121.563)" fill="#fff" />
                                                                            <path id="Path_3286" data-name="Path 3286" d="M164.56,135.527a.164.164,0,0,1,.017-.3.171.171,0,0,1,.177.031.176.176,0,0,1,0,.242A.184.184,0,0,1,164.56,135.527Z" transform="translate(-145.459 -118.849)" fill="#fff" />
                                                                            <path id="Path_3287" data-name="Path 3287" d="M163.6,134.425a.163.163,0,0,1,0-.242.184.184,0,0,1,.233,0,.163.163,0,0,1,0,.229A.184.184,0,0,1,163.6,134.425Z" transform="translate(-145.731 -116.399)" fill="#fff" />
                                                                            <path id="Path_3288" data-name="Path 3288" d="M162.724,133.5a.171.171,0,0,1-.233,0,.163.163,0,0,1,0-.229.171.171,0,0,1,.233,0A.163.163,0,0,1,162.724,133.5Z" transform="translate(-146.057 -114.316)" fill="#fff" />
                                                                            <path id="Path_3289" data-name="Path 3289" d="M161.456,132.872a.2.2,0,0,1-.233-.089.164.164,0,0,1,.091-.216.17.17,0,0,1,.22.076.176.176,0,0,1-.078.229Z" transform="translate(-146.421 -112.8)" fill="#fff" />
                                                                            <path id="Path_3290" data-name="Path 3290" d="M160.049,132.421a.182.182,0,0,1-.207-.127.165.165,0,0,1,.117-.2.181.181,0,0,1,.207.127.177.177,0,0,1-.117.2Z" transform="translate(-146.827 -111.751)" fill="#fff" />
                                                                        </g>
                                                                        <path id="Path_3291" data-name="Path 3291" d="M157.6,273.084l84.614-132.951,55.321-.2Z" transform="translate(46.385 -87.774)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="0.1" />
                                                                        <path id="Path_3292" data-name="Path 3292" d="M157.6,311.334v0Z" transform="translate(46.385 -126.023)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="0.1" />
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="dbs-bank" transform="translate(806.277 386.036)">
                                                            <path id="Path_3347" data-name="Path 3347" d="M0,0H192.756V192.756H0Z" fill="none" fill-rule="evenodd" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="radar-labels">
                                            <div class="client-label">DBS</div>
                                            <div class="overview-label"><a href="#overview">Overview</a></div>
                                            <div class="members-label"><a href="">Members</a></div>
                                            <div class="live-label"><a href="">Live</a></div>
                                            <div class="story-label"><a href="">Story</a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="rs-container">
                                <div class="rs-inner">
                                    <div class="gallery">
                                        <div class="gallery-in gap black-tint">
                                            <span>Gallery</span>
                                            <?php get_template_part("widgets/dashboard", "gallery"); ?></div>
                                    </div>
                                    <div class="podcast-archive">
                                        <div class="podcast-container black-tint gap">
                                            <span style="margin-left:10px">Podcast</span>
                                            <div class="podcast fancy-scrollbar podcast-vertical-scroll">
                                                <?php get_template_part("widgets/dashboard", "podcast"); ?>
                                            </div>
                                        </div>
                                        <div class="archive gap black-tint">
                                            <div class="archive-container">
                                                <span>Archive</span>
                                                <?php get_template_part("widgets/dashboard", "archive"); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vsl-main">
                            <div class="video-slider gap fancy-scrollbar black-tint">
                                <span>Story</span>
                                <?php get_template_part("widgets/dashboard", "story"); ?>
                            </div>
                            <div class="video-slider gap fancy-scrollbar black-tint">
                                <span>Videos</span>
                                <?php get_template_part("widgets/dashboard", "video"); ?>
                            </div>
                            <div class="video-slider gap fancy-scrollbar black-tint">
                                <span>Live</span>
                                <?php get_template_part("widgets/dashboard", "live"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="dialog_window_minimized_container"></div>
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

    <!-- classyscroll js -->
    <script src="<?php echo $template_dir; ?>/assets/js/jquery.classyscroll.js"></script>

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

        function createModel(model_id, title) {
            //get the total number of existing dialog windows plus one (1)
            var div_count = $('.dialog_window').length + 1;

            //generate a unique id based on the total number
            var div_id = 'dialog-' + model_id;

            //get the title of the new window from our form, as well as the content
            // var div_title = $('#new_window_title').val();
            // var div_content = $('#new_window_content').val();

            //append the dialog window HTML to the body
            $('body').append('<div class="dialog_window" id="' + div_id + '" title="' + title + '"><div class="infinite"><div class="pace pace-active"><div class="pace-activity" style="display:none"></div> </div> </div><div class="vc-main" id="' + model_id + '"></div></div>');

            //initialize our new dialog
            var dialog = $('#' + div_id).dialog({
                width: "auto",
                height: "auto",
                'min-height': '100px',
                'max-height': '250px',
                'z-index': '10',
                autoOpen: true
            });
        }

        /* Gallery logic */
        gallery = $('.gl');
        for (i = 0; i < gallery.length; i++) {
            gallery[i].addEventListener('click', function() {
                g_id = $(this).attr('g-id');
                g_title = $(this).attr('g-title');
                /* Create model */
                if ($('#' + 'gallery-' + g_id).length) {
                    $('#dialog-' + 'gallery-' + g_id).dialog('open');
                } else {
                    createModel('gallery-' + g_id, g_title);
                    // Ajax call
                    loadArticle(g_id, 'gallery');
                }

            });
        }

        // Podcast player logic
        pd_player = $('.pd-player');
        for (i = 0; i < pd_player.length; i++) {
            pd_player[i].addEventListener('click', function() {
                pd_title = $(this).attr('pd-title');
                pd_id = $(this).attr('pd-id');
                /* Create model */
                if ($('#' + 'podcast-' + pd_id).length) {
                    $('#dialog-' + 'podcast-' + pd_id).dialog('open');
                } else {
                    createModel('podcast-' + pd_id, pd_title);
                    // Ajax call
                    loadArticle(pd_id, 'podcast');
                }
            });
        }

        /* Video carousel logic */
        v_player = $('.v-player');
        for (i = 0; i < v_player.length; i++) {
            v_player[i].addEventListener('click', function() {
                v_title = $(this).attr('v-title');
                v_id = $(this).attr('v-id');
                /* Create model */
                if ($('#' + 'video-' + v_id).length) {
                    $('#dialog-' + 'video-' + v_id).dialog('open');
                } else {
                    createModel('video-' + v_id, v_title);
                    // Ajax call
                    loadArticle(v_id, 'video');
                }
            });
        }

        // Ajax calling method
        function loadArticle(id, type) {
            $('.pace-activity').show('fast');
            $.ajax({
                url: "<?php echo admin_url(); ?>admin-ajax.php",
                type: 'POST',
                data: "action=infinite_scroll&id=" + id + "&type=" + type,
                success: function(data) {
                    $('.pace-activity').hide('1000');
                    $('#' + type + '-' + id).append(data);
                }
            });
            return false;
        }
    </script>
</body>

</html>