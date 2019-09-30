<?php $template_dir = get_template_directory_uri(); ?>
<?php
$args = array(
    'post_type' => 'insights',
    'cat' => get_queried_object()->term_id
);
$video = get_posts($args);
$cat = get_queried_object()->term_id;
?>
<div class="charts-container gap">
    <?php
    foreach ($video as $val) {
        $title = $val->post_title;
        $description = $val->post_content;
        $size = get_field('size', $val);
        $thumbnail = get_the_post_thumbnail_url($val, "thumbnail");
        ?>
        <div class="chart-container <?php echo $size; ?>">
            <div class="pim-title"><?php echo $title; ?></div>
            <div class="pim">
                <img src="<?php echo $thumbnail; ?>" alt="">
            </div>
        </div>
    <?php } ?>
</div>