<?php $template_dir = get_template_directory_uri(); ?>
<amp-carousel id="custom-button" height="55" layout="fixed-height" type="carousel" class="fancy-scrollbar">
    <?php
    $args = array(
        'post_type' => 'gallery',
        'cat' => get_queried_object()->term_id
    );
    $gallery = get_posts($args);
    $cat = get_queried_object()->term_id;
    ?>
    <?php
    foreach ($gallery as $val) {
        $title = $val->post_title;
        $description = $val->post_content;
        $url = get_field('photos', $val);
        $thumbnail = get_the_post_thumbnail_url($val, "thumbnail");
        ?>
        <div class="vsl-container">
            <div class="vsl-new" style="visibility:<?php newPost($val->ID) ?>"></div>
            <div class="vsl-content">
                <a href="#" class='gl' onclick="openModal('gallery',<?php echo $val->ID; ?>,'<?php echo $title; ?>')">
                    <amp-img src="<?php echo $thumbnail; ?>" height="41" width="60" alt=""></amp-img>
                </a>
            </div>
        </div>
    <?php } ?>
</amp-carousel>