<?php
wp_head();
global $pc_users;
$args = array(
    'to_get'    => array('name', 'username', 'email', 'categories'),

);

$users = $pc_users->get_user(pc_user_logged('id'), $args);
$user_cats = $users['categories'];
foreach ($user_cats as $cat_id) {
    $cat_name = get_the_category_by_ID($cat_id);
    $cat_link = get_post_type_archive_link($cat_name);
    ?>
    <a href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a>
<?php
}
echo do_shortcode('[pc-logout-box]');

wp_footer();
?>