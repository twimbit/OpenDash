<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <?php
    wp_head();
    /* Template Name: Login */
    $template_dir = get_template_directory_uri();
    ?>
    <style scoped>
        body,
        html {
            height: 100%;
        }

        body {
            margin: 0px;
            padding: 0px;
        }

        /*main div */
        .sign_in_page {
            display: flex;
            height: 100%;
        }

        /*left side div */
        .login_banner {
            left: 0;
            flex: 1;
        }
        #Group_244{
            position: absolute;
            width: 800px;
            height: 960px;
            left: 0px;
            top: 0px;
            overflow: visible;
        }

        /*login gradient for banner background */
        .login_gradient
        {
            position: absolute;
            overflow: visible;
            width: 800px;
            height: 960px;
            left: 0px;
            top: 0px;
        }
        #login_pattern{
            position: absolute;
            width: 800px;
            height: 960px;
            left: 0px;
            top: 0px;
            overflow: visible;
        }

        /*right side div */
        .login_side {
            background-color: rgba(255, 255, 255, 1);
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login_right {
            padding: 10px;
        }

        /*center text of both the sides */
        .logo_svg{
            position: absolute;
            overflow: visible;
            width: 272px;
            height: 272px;
            left: 273px;
            top: 353.022px;
        }

        /*css for logo icon in login form */
        .login_left img {
            width: 200px;
        }

        .login_heading {
            text-align: center;
            font-weight: bold;
            font-size: 30px;
            /* margin-top: 20%; */
            letter-spacing: 6px;
            font-family: 'Montserrat', sans-serif;
            color: rgba(67, 66, 93, 1);
        }

        .login_welcome {
            text-align: center;
            margin-top: 3%;
            color: #738e96;
            font-size: 15px;
        }

        .login_form {
            margin-top: 10%;
        }

        .login_remember_me {
            text-align: left;
            font-size: 18px;
        }
        .pc_checkbox{
            margin-bottom: -3px;
        }

        .remember {
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            margin-top: -12px;
            color: rgba(67, 66, 93, 1);
        }

        .login_button
        {
            /*padding: 16px 50px;*/
            width:170px;
            height:50px;
            margin:30px 100px;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            background-color: white;
            color:rgba(67,66,93,1);
            border: 2px solid rgba(67,66,93,1);
            border-radius: 5px;
        }

        .login_button:hover {
            background-color: rgba(67,66,93,1);
            color: white;
        }

        /* media query for mobile to hide the login_banner */
        @media (max-width:768px) {
            .login_banner {
                display: none;
            }
        }
    </style>
</head>
<?php
if (pc_user_logged('username')) {
    wp_redirect(home_url());
} else { ?>

    <body>
        <div class="sign_in_page">    <!-- main div -->
            <div class="login_banner">

                <div id="Group_244">
                    <svg class="login_gradient">  <!-- gradient shade for login banner -->
                        <linearGradient spreadMethod="pad" id="LinearGradientFill2" x1="0.897" x2="0.206" y1="0.14" y2="0.877">
                            <stop offset="0" stop-color="#242348" stop-opacity="1"></stop>
                            <stop offset="1" stop-color="#44728b" stop-opacity="1"></stop>
                        </linearGradient>
                        <rect fill="url(#LinearGradientFill2)" id="Rectangle_176" rx="0" ry="0" x="0" y="0" width="800" height="960">
                        </rect>
                    </svg>

                    <div id="login_pattern">  <!-- div for the login pattern svg -->
                        <svg style="width:inherit;height:inherit;overflow:visible;">
                            <rect fill="url(<?php echo $template_dir; ?>/assets/images/pattern.png)" width="100%" height="100%"></rect>
                            <pattern elementid="Group_4_A0_Group_13" id="Group_4_A0_Group_13_pattern" x="0" y="0" width="100%" height="100%">
                                <image x="0" y="0" width="100%" height="100%" href="Group_4_A0_Group_13_pattern.png" xlink:href="Group_4_A0_Group_13_pattern.png"></image>
                            </pattern>
                        </svg>
                    </div>
                </div>

                <svg class="logo_svg">
                    <pattern elementid="t_icon_02_A0_Rectangle_9" id="t_icon_02_A0_Rectangle_9_pattern" x="0" y="0" width="100%" height="100%">
                        <image x="0" y="0" width="100%" height="100%" href="<?php echo $template_dir; ?>/assets/images/logo.png" alt="Twimbit logo">" xlink:href="t_icon_02_A0_Rectangle_9_pattern.png"></image>
                    </pattern>
                    <rect fill="url(#t_icon_02_A0_Rectangle_9_pattern)" id="t_icon_02" rx="24" ry="24" x="0" y="0" width="254" height="254">
                    </rect>
                </svg>

            </div>


            ​
            <div class="login_side">
                <div class="login_right">
                    <div class="login_heading">
                        <span>Twimbit Enterprise</span>
                    </div>
                    <div class="login_welcome">
                        <span>Welcome back! Please login to your account.</span>
                    </div>
                    <div class="login_form">
                        <form class="pc_rm_login  pc_lf_long_labels">
                            <div class="pc_login_row ">
                                <div class="pc_field_container">
                                    <input type="text" name="pc_auth_username" value="" autocapitalize="off" autocomplete="off" autocorrect="off" maxlength="150" class="login_inputbox" placeholder="Email">
                                </div>
                            </div>
                            <div class="pc_login_row ">
                                <div class="pc_field_container">
                                    <input type="password" name="pc_auth_psw" value="" autocapitalize="off" autocomplete="off" autocorrect="off" placeholder="Password">
                                </div>
                            </div>
                            <div class="pc_hnpt_code" style="display: none; visibility: hidden; position: fixed; left: -9999px;">
                                <label for="pc_hnpt_1">Antispam 1</label>
                                <input type="text" name="pc_hnpt_1" value="" autocomplete="off">
                                <label for="pc_hnpt_2">Antispam 2</label>
                                <input type="text" name="pc_hnpt_2" value="99" autocomplete="off">
                                <label for="pc_hnpt_3">Antispam 3</label>
                                <input type="text" name="pc_hnpt_3" value="34dee4ab1b65891a58ba1e66ab927b19" autocomplete="off">
                            </div>
                            <div id="pc_auth_message"></div>
                            <div class="pc_login_smalls">
                                <div class="login_remember_me">
                                    <input type="checkbox" name="pc_remember_me" value="1" autocomplete="off" class="pc_checkboxed">
                                    <div class="pc_checkbox " data-name="pc_remember_me" data-val="1">
                                        <span>✓</span>
                                    </div>
                                    <span class="remember">  Remember me</span>
                                </div>
                                <small class="pcma_psw_recovery_trigger" style="top:-15px; font-size: 15px; color:rgba(67,66,93,1);border-left-style: none; ">Forget Password</small>
                            </div>
                            <button class="login_button pc_auth_btn">
                                <span class="pc_inner_btn">Login</span>
                            </button>
                            <div class="pcma_psw_recovery_wrap" style="display: none;">
                                <div class="pc_login_row ">
                                    <label style="font-family: 'Montserrat', sans-serif; font-size: 15px; color: rgba(67,66,93,1); text-align: center;">Insert your username or e-mail</label>
                                    <div class="pc_field_container" style="margin-top: 10px;">
                                        <input type="text" name="pcma_psw_username" class="pcma_psw_username" value="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="pcma_psw_recovery_message"></div>
                                <button class="login_button pcma_do_recovery" style="margin-top:0px;">
                                    <span class="pc_inner_btn">Recover</span>
                                </button>
                                <div class="pc_login_smalls" style="margin-top: 8px; margin-left: -12px; text-align: center;">
                                    <small class="pcma_del_recovery" style="font-size:15px ">Back to login form</small>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <!-- echo do_shortcode('[pc-login-form align="center"]'); -->
<?php } ?>

</html>

<?php wp_footer(); ?>