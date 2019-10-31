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
                <a href="<?php echo site_url(); ?>/?pc_logout" style="margin-left: 15px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.72" height="15.72" class="home-logout" viewBox="0 0 15.72 15.72">
                        <path id="ic_exit_to_app_24px" d="M12.528,14,11.3,15.227,6.93,10.86,11.3,6.493l1.231,1.231L10.275,9.987H18.72v1.747H10.275ZM4.747,3H16.973A1.746,1.746,0,0,1,18.72,4.747V8.24H16.973V4.747H4.747V16.973H16.973V13.48H18.72v3.493a1.746,1.746,0,0,1-1.747,1.747H4.747A1.752,1.752,0,0,1,3,16.973V4.747A1.752,1.752,0,0,1,4.747,3Z" transform="translate(-3 -3)" fill="#fff" />
                    </svg>
                </a>
            </div>
        </header>
        <section class="main">
            <header class="btn-header" style="background-color: #1A2535">
                <button class="btn btn-active">
                    <i class="fa fa-home" style="margin-right:.4em; color: #F55D54"></i>Home
                </button>
                <button class="btn" hidden>
                    <i class="fa fa-globe" style="margin-right:.4em; color: #F55D54"></i>Home Center
                </button>
                <button class="btn" hidden>
                    <i class="fa fa-cog" style="margin-right:.4em; color: #F55D54"></i>Settings
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
                            $args = array(
                                'posts_per_page' => 1,
                                'cat' => $cat_id
                            );
                            $posts = get_posts($args);
                            // print_r($posts);
                            ?><a href="<?php echo $cat_link; ?>" class="item">
                                <span style="display: flex; align-items: center;text-transform: capitalize;
    font-size: 14px;font-weight:bold"><?php echo $cat_name; ?></span>

                                <?php if ($db_type == "metro") { ?>
                                    <svg aria-hidden="true" title="Metro Dashboard" focusable="false" data-prefix="fas" data-icon="th" class="svg-inline--fa fa-th fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M149.333 56v80c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24V56c0-13.255 10.745-24 24-24h101.333c13.255 0 24 10.745 24 24zm181.334 240v-80c0-13.255-10.745-24-24-24H205.333c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24h101.333c13.256 0 24.001-10.745 24.001-24zm32-240v80c0 13.255 10.745 24 24 24H488c13.255 0 24-10.745 24-24V56c0-13.255-10.745-24-24-24H386.667c-13.255 0-24 10.745-24 24zm-32 80V56c0-13.255-10.745-24-24-24H205.333c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24h101.333c13.256 0 24.001-10.745 24.001-24zm-205.334 56H24c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24h101.333c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24zM0 376v80c0 13.255 10.745 24 24 24h101.333c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24H24c-13.255 0-24 10.745-24 24zm386.667-56H488c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24H386.667c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24zm0 160H488c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24H386.667c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24zM181.333 376v80c0 13.255 10.745 24 24 24h101.333c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24H205.333c-13.255 0-24 10.745-24 24z"></path>
                                    </svg>
                                <?php
                                    } else { ?>
                                    <svg aria-hidden="true" title="Hud Dashboard" focusable="false" data-prefix="fas" data-icon="compass" class="svg-inline--fa fa-compass fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                        <path fill="currentColor" d="M225.38 233.37c-12.5 12.5-12.5 32.76 0 45.25 12.49 12.5 32.76 12.5 45.25 0 12.5-12.5 12.5-32.76 0-45.25-12.5-12.49-32.76-12.49-45.25 0zM248 8C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm126.14 148.05L308.17 300.4a31.938 31.938 0 0 1-15.77 15.77l-144.34 65.97c-16.65 7.61-33.81-9.55-26.2-26.2l65.98-144.35a31.938 31.938 0 0 1 15.77-15.77l144.34-65.97c16.65-7.6 33.8 9.55 26.19 26.2z"></path>
                                    </svg>
                                <?php } ?>
                            </a>
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
                        <?php $update = getPostArray('update', null);
                        foreach ($update as $val) {
                            $link = get_the_permalink($val);
                            $cat_name = get_the_category($val)[0]->name;
                            ?>
                            <a href="#" class="notification-items" onclick="openModal(<?php echo $val->ID; ?>,'<?php echo $val->post_title; ?>')">
                                <div class="notification-text">
                                    <span style="text-transform:capitalize;"><?php echo $val->post_title; ?></span>
                                    <span><?php echo $val->post_excerpt; ?></span>
                                </div>
                                <div class="notification-cat">
                                    <p><?php echo $cat_name; ?></p>
                                </div>
                                <div class="notification-time">
                                    <p><?php
                                            echo get_post_modified_time('g:i a, d/M ', false, $val, true); ?></p>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
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
                        <?php echo do_shortcode('[visualizer id="98"]'); ?>
                    </div>
                </div>
            </div>
        </section>
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

        function createModel(model_id, title) {
            //get the total number of existing dialog windows plus one (1)
            var div_count = $(".dialog_window").length + 1;

            //generate a unique id based on the total number
            var div_id = "dialog-" + model_id;

            //get the title of the new window from our form, as well as the content
            // var div_title = $('#new_window_title').val();
            // var div_content = $('#new_window_content').val();

            //append the dialog window HTML to the body
            $("body").append(
                '<div class="dialog_window" id="' +
                div_id +
                '" title="' +
                title +
                '"><div class="infinite"><div class="pace pace-active"><div class="pace-activity" style="display:none"></div> </div> </div><div class="vc-main" id="' +
                model_id +
                '"><div class="md-modal-content"><div class="md-title"><h3>' + title + '</h3></div><div class="md-content"><p></p></div></div></div></div>'
            );

            //initialize our new dialog
            var dialog = $("#" + div_id).dialog({
                width: "auto",
                height: "auto",
                "min-height": "100px",
                "max-height": "250px",
                "z-index": "10",
                autoOpen: true
            });

            $(".ui-dialog").css({
                "margin-right": "auto",
                "margin-left": "auto"
            });
        }

        /* Create modals for widgets*/
        function openModal(id, title) {
            /* Create model */
            if ($("#" + id).length) {
                $("#dialog-" + id).dialog("open");
            } else {
                createModel(id, title);
                // Ajax call
                loadArticle(id);
            }
        }


        let site_url = window.location.origin + "/wp-admin/admin-ajax.php";
        // Ajax calling method for modals
        function loadArticle(id) {
            $(".pace-activity").show("fast");
            $.ajax({
                url: site_url,
                type: "POST",
                data: "action=notification&id=" + id,
                success: function(data) {
                    $(".pace-activity").hide("1000");
                    $(".md-content").append(data);
                }
            });
            return false;
        }
    </script>
    <?php get_footer(); ?>