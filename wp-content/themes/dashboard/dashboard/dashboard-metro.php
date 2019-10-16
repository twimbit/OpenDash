<title>Dashboard-<?php echo get_queried_object()->name; ?></title>
<?php $template_dir = get_template_directory_uri(); ?>
<!-- Metro ui css -->
<link href="<?php echo $template_dir; ?>/assets/css/metro-ui.css" rel="stylesheet" type="text/css" />
<style>
    .m-col-subcat::before {
        content: "Subcat name";
        position: absolute;
        top: -33px;
        font-size: 20px;
        left: 30px;
    }

    .dashboard {
        overflow-x: hidden;
    }

    .main-board {
        padding-right: 0;
    }
</style>
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
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
            <div class="twimbit-icon">
                <img src="<?php echo $template_dir; ?>/assets/images/twimbit-logo-transparent-white1.png" alt="" />
            </div>
        </div>
        <div class="dashboard">
            <div class="main-board" id="main-board">
                <div class="m-container">
                    <div class="m-main-heading">
                        <h3>Category</h3>
                    </div>
                    <div class="m-col-subcat">
                        <div class="m-subcat-name m-row-span-4">
                            <a href="#" class="m-lg-card">
                                <img class="m-img-lg" src="<?php echo $template_dir; ?>/assets/images/small/img-1.jpg" alt="lg-img-card">
                                <h4 class="m-heading-lg">This is large card info</h4>
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
                                <h4 class="m-heading-lg">This is large card info</h4>
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