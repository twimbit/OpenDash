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
        $visualiser = get_field('visualizer', $val);
        $thumbnail = get_the_post_thumbnail_url($val, "thumbnail");
        ?>
        <a href="#" class='insight <?php echo $size; ?>' onclick="openModal('insight',<?php echo $val->ID; ?>,'<?php echo $title; ?>')">
            <div class="vsl-new in-new" style="visibility:<?php newPost($val->ID) ?>"></div>
            <div class="infinite">
                <div class="pace pace-active">
                    <div class="pace-activity" style="display: block;"></div>
                </div>
            </div>
            <div class="chart-container">
                <?php echo $visualiser; ?>
            </div>
        </a>
    <?php } ?>
</div>
<div class="in-prev"></div>
<div class="in-next"></div>