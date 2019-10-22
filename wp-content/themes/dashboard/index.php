<?php
get_header();
$template_dir = get_template_directory_uri();
$user_cats = pc_user_logged('categories');
$user_name = pc_user_logged('name');
// echo do_shortcode('[pc-logout-box]');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" />
<link href="<?php echo $template_dir; ?>/assets/css/home-style.css" rel="stylesheet" type="text/css" />
<title>Dashboard-Home</title>
</head>

<body>
    <div class="hm-container">
        <header class="nav">
            <div class="left">
                <div class="search">
                    <form action="<?php echo site_url(); ?>" method="get">
                        <div class="search d-flex">
                            <button type="submit" href="#" style="border:none;background:none;">
                                <i class="fa fa-search"></i>
                            </button>
                            <input type="text" placeholder="search content" name="s" />
                        </div>
                    </form>
                </div>
            </div>
            <div class=" right">
                <div style="display: flex; align-items: center;">
                    <p style="margin: 4px 7px 0 7px;"><?php echo $user_name; ?></p>
                    <i class="fa fa-user"></i>
                </div>
                <a href="/ds/?pc_logout" style="margin-left: 15px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.72" height="15.72" class="home-logout" viewBox="0 0 15.72 15.72">
                        <path id="ic_exit_to_app_24px" d="M12.528,14,11.3,15.227,6.93,10.86,11.3,6.493l1.231,1.231L10.275,9.987H18.72v1.747H10.275ZM4.747,3H16.973A1.746,1.746,0,0,1,18.72,4.747V8.24H16.973V4.747H4.747V16.973H16.973V13.48H18.72v3.493a1.746,1.746,0,0,1-1.747,1.747H4.747A1.752,1.752,0,0,1,3,16.973V4.747A1.752,1.752,0,0,1,4.747,3Z" transform="translate(-3 -3)" fill="#fff" />
                    </svg>
                </a>
            </div>
        </header>
        <section class="main">
            <header class="btn-header">
                <button class="btn btn-active">
                    <i class="fa fa-home" style="margin-right:.4em; color: rgb(151, 146, 146)"></i>Home
                </button>
                <button class="btn" hidden>
                    <i class="fa fa-globe" style="margin-right:.4em; color: rgb(151, 146, 146)"></i>Home Center
                </button>
                <button class="btn" hidden>
                    <i class="fa fa-cog" style="margin-right:.4em; color: rgb(151, 146, 146)"></i>Settings
                </button>
            </header>
            <div class="content">
                <div class="side1">
                    <i class="fa fa-minus" aria-hidden="true"></i>
                    <p style="transform: rotate(-90deg); font-size: 13px">Terminal</p>
                </div>
                <div class="one">
                    <div class="one-head">
                        <h5 style="font-weight: 100;
              color: rgb(96, 92, 92);
              margin: 0;">
                            Terminal
                        </h5>
                    </div>
                    <div class="one-body">
                        <?php
                        foreach ($user_cats as $cat_id) {
                            $cat_name = get_the_category_by_ID($cat_id);
                            $cat_link = get_category_link(get_category_by_slug($cat_name)->term_id);
                            $db_type = get_field('dashboard', get_category_by_slug($cat_name));
                            ?>
                            <div class="item">
                                <a href="<?php echo $cat_link; ?>"> <span style="display: flex; align-items: center;"><?php echo $cat_name; ?></span></a>
                                <span class="alert-success">Last updated</span>
                                <?php if ($db_type == "metro") { ?>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="th" class="svg-inline--fa fa-th fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M149.333 56v80c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24V56c0-13.255 10.745-24 24-24h101.333c13.255 0 24 10.745 24 24zm181.334 240v-80c0-13.255-10.745-24-24-24H205.333c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24h101.333c13.256 0 24.001-10.745 24.001-24zm32-240v80c0 13.255 10.745 24 24 24H488c13.255 0 24-10.745 24-24V56c0-13.255-10.745-24-24-24H386.667c-13.255 0-24 10.745-24 24zm-32 80V56c0-13.255-10.745-24-24-24H205.333c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24h101.333c13.256 0 24.001-10.745 24.001-24zm-205.334 56H24c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24h101.333c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24zM0 376v80c0 13.255 10.745 24 24 24h101.333c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24H24c-13.255 0-24 10.745-24 24zm386.667-56H488c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24H386.667c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24zm0 160H488c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24H386.667c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24zM181.333 376v80c0 13.255 10.745 24 24 24h101.333c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24H205.333c-13.255 0-24 10.745-24 24z"></path>
                                    </svg>
                                <?php
                                    } else { ?>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="compass" class="svg-inline--fa fa-compass fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                        <path fill="currentColor" d="M225.38 233.37c-12.5 12.5-12.5 32.76 0 45.25 12.49 12.5 32.76 12.5 45.25 0 12.5-12.5 12.5-32.76 0-45.25-12.5-12.49-32.76-12.49-45.25 0zM248 8C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm126.14 148.05L308.17 300.4a31.938 31.938 0 0 1-15.77 15.77l-144.34 65.97c-16.65 7.61-33.81-9.55-26.2-26.2l65.98-144.35a31.938 31.938 0 0 1 15.77-15.77l144.34-65.97c16.65-7.6 33.8 9.55 26.19 26.2z"></path>
                                    </svg>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="side2">
                    <i class="fa fa-plus" aria-hidden="true"></i>

                    <p style="transform: rotate(-90deg); font-size: 13px">
                        Notification
                    </p>
                </div>
                <div class="two">
                    <div class="two-head">
                        <h5 style="font-weight: 100;
              color: rgb(96, 92, 92);
              margin: 0;">
                            Notification & Updates
                        </h5>
                    </div>
                    <div class="two-body">
                        <div class="item">
                            <span>Instagram</span>
                            <span>notification</span>
                            <span>$20</span>
                        </div>

                        <div class="item">
                            <span>Instagram</span>
                            <span>notification</span>
                            <span>$20</span>
                        </div>

                        <div class="item">
                            <span>Instagram</span>
                            <span>notification</span>
                            <span>$20</span>
                        </div>
                    </div>
                    <footer style="color:rgb(24, 123, 216); text-align: center">
                        <p style="font-size:11px; letter-spacing: 0.5px;">
                            view all notification
                        </p>
                    </footer>
                </div>

                <div class="side3">
                    <i class="fa fa-plus" aria-hidden="true"></i>

                    <p style="transform: rotate(-90deg); font-size: 13px">
                        Availability
                    </p>
                </div>
                <div class="three">
                    <div class="three-head">
                        <h5 style="font-weight: 100; color:rgb(96, 92, 92); margin: 0">
                            Availability
                        </h5>
                        <div class="three-body"></div>
                    </div>
                    <div id="chartdiv">
                        <div id="world-map"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        const one = document.querySelector(".side1");
        const two = document.querySelector(".side2");
        const three = document.querySelector(".side3");
        const terminal = document.querySelector(".one");
        const notification = document.querySelector(".two");
        const availability = document.querySelector(".three");
        const btn = document.querySelectorAll("button");

        btn[0].addEventListener("click", function() {
            if ([...btn[0].classList].includes("btn-active")) {
                btn[0].classList.remove("btn-active");
            }
            btn[0].classList.add("btn-active");
            btn[1].classList.remove("btn-active");
            btn[2].classList.remove("btn-active");
        });
        btn[1].addEventListener("click", function() {
            if ([...btn[1].classList].includes("btn-active")) {
                btn[1].classList.remove("btn-active");
            }
            btn[1].classList.add("btn-active");
            btn[0].classList.remove("btn-active");
            btn[2].classList.remove("btn-active");
        });
        btn[2].addEventListener("click", function() {
            if ([...btn[2].classList].includes("btn-active")) {
                btn[2].classList.remove("btn-active");
            }
            btn[2].classList.add("btn-active");
            btn[1].classList.remove("btn-active");
            btn[0].classList.remove("btn-active");
        });

        one.addEventListener("click", function() {
            one.children[0].classList.replace("fa-plus", "fa-minus");
            two.children[0].classList.replace("fa-minus", "fa-plus");
            three.children[0].classList.replace("fa-minus", "fa-plus");
            terminal.style.width = "100%";
            notification.style.width = "0";
            availability.style.width = "0";
        });

        two.addEventListener("click", function() {
            one.children[0].classList.replace("fa-minus", "fa-plus");
            two.children[0].classList.replace("fa-plus", "fa-minus");
            three.children[0].classList.replace("fa-minus", "fa-plus");
            terminal.style.width = "0";
            notification.style.width = "100%";
            availability.style.width = "0";
        });

        three.addEventListener("click", function() {
            three.children[0].classList.replace("fa-plus", "fa-minus");
            one.children[0].classList.replace("fa-minus", "fa-plus");
            two.children[0].classList.replace("fa-minus", "fa-plus");
            terminal.style.width = "0";
            notification.style.width = "0";
            availability.style.width = "100%";
        });
    </script>
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
    <?php get_footer(); ?>