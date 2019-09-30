<?php $template_dir = get_template_directory_uri(); ?>
<amp-carousel id="custom-button" height="85" layout="fixed-height" type="carousel" controls class="fancy-scrollbar">
    <?php
    $args = array(
        'post_type' => 'amp_story',
        'cat' => get_queried_object()->term_id
    );
    $story = get_posts($args);
    $cat = get_queried_object()->term_id;
    ?>
    <?php
    foreach ($story as $val) {
        $url = get_the_permalink($val);
        $thumbnail = get_the_post_thumbnail_url($val, "thumbnail");
        ?>
        <div class="vsl-container">
            <div class="vsl-new"></div>
            <div class="vsl-content">
                <a href="<?php echo $url; ?>">
                    <img src="<?php echo $thumbnail; ?>" alt="" />
                </a>
            </div>
        </div>
    <?php } ?>
</amp-carousel>