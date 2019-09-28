<?php
wp_head();
$template_dir = get_template_directory_uri();
?>
<style>
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
        background-image: url("<?php echo $template_dir; ?>/assets/images/login.png");
        background-repeat: no-repeat;
        background-size: cover;
        flex: 1;
    }

    /*right side div */
    .login_side {
        background-color: rgba(255, 255, 255, 1);
        flex: 1;
    }
    .login_right {
        position: relative;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        width: 60%;
    }
    /*center text of both the sides */
    .login_left {
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
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
    <div class="sign_in_page">
        <div class="login_banner">
            <div class="login_left">
                <img src="<?php echo $template_dir; ?>/assets/images/logo.png" alt="Twimbit logo">
            </div>
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
<?php wp_footer(); ?>