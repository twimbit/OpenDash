<?php
wp_head();
if (pc_user_logged('username')) {
    wp_redirect(home_url());
} else {
    echo do_shortcode('[pc-login-form align="center"]');
}

wp_footer();
