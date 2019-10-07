<?php
$args = array(
    'post_type' => 'webinar',
    'cat' => get_queried_object()->term_id
);
$webinars = get_posts($args);
?>
<amp-carousel id="custom-button" height="85" layout="fixed-height" type="carousel" class="fancy-scrollbar">
    <?php foreach ($webinars as $val) {
        $title = $val->post_title;
        $image = get_the_post_thumbnail_url($val, 'thumbnail');
        $file_url = get_field('archive_file_url', $val);
        ?>
        <div class="vsl-container">
            <div class="vsl-new"></div>
            <div class="vsl-content">
                <a href="#" style="text-decoration:none" class='archive-f' onclick="openModal('live',<?php echo $val->ID; ?>,'<?php echo $title; ?>')">
                    <img src="<?php echo $image; ?>" alt="" />
                </a>
            </div>
        </div>
    <?php } ?>

</amp-carousel>