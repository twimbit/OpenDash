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
        $type = get_field('type', $val);
        $visualiser = get_field('visualizer', $val);
        echo $visualiser;
        $thumbnail = get_the_post_thumbnail_url($val, "thumbnail");
        ?>
        <a href="#" class='insight <?php echo $size; ?>' in-id="<?php echo $val->ID; ?>" in-title="<?php echo $title; ?>">
            <div class="chart-container">
                <?php
                    if ($type == "charts") {
                        echo do_shortcode($description);
                    } else { ?>
                    <div class="pim-title">
                        <?php echo $title; ?>
                    </div>
                    <div class="in-post-desc">
                        <?php echo $description; ?>
                    </div>

                    <div class="pim">
                        <img src="<?php echo $thumbnail; ?>" alt="">
                    </div>
                    <div class="ds-fade"></div>
                <?php } ?>
            </div>
        </a>
    <?php } ?>
</div>