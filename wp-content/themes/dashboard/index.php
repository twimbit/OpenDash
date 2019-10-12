<?php
get_header();
$template_dir = get_template_directory_uri();
$user_cats = pc_user_logged('categories');
$user_name = pc_user_logged('name');
foreach ($user_cats as $cat_id) {
    $cat_name = get_the_category_by_ID($cat_id);
    $cat_link = get_category_link(get_category_by_slug($cat_name)->term_id);
}
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
                    <i class="fa fa-search"></i>
                    <input type="text" placeholder="search content" />
                </div>
            </div>
            <div class="right">
                <div style="display: flex; align-items: center;">
                    <p style="margin:0 7px"><?php echo $user_name; ?></p>
                    <i class="fa fa-user"></i>
                </div>
                <a href="/ds/?pc_logout"> <img src="./icons/logout.png" /></a>
            </div>
        </header>
        <section class="main">
            <header class="btn-header">
                <button class="btn btn-active">
                    <i class="fa fa-home" style="margin-right:.4em; color: rgb(151, 146, 146)"></i>Home
                </button>
                <button class="btn">
                    <i class="fa fa-globe" style="margin-right:.4em; color: rgb(151, 146, 146)"></i>Home Center
                </button>
                <button class="btn">
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

                            ?>
                            <div class="item">
                                <a href="<?php echo $cat_link; ?>"> <span style="display: flex; align-items: center;"><?php echo $cat_name; ?></span></a>
                                <span class="alert-success">3 notification</span>
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
                    <div id="chartdiv"></div>
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
    <?php get_footer(); ?>