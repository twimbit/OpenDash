<amp-carousel id="custom-button" layout="fill" type="carousel">
    <?php
    /* Getting video post type array */
    $video = getPostArray('video', get_queried_object()->term_id);
    ?>
    <?php
    foreach ((array) $video as $val) {
        $title = $val->post_title;
        $description = $val->post_content;
        $url = get_field('video_file', $val);
        $thumbnail = get_the_post_thumbnail_url($val, "thumbnail");
        ?>
        <div class="vsl-container">
            <div class="vsl-new" title="new content" style="visibility:<?php newPost($val->ID) ?>"></div>
            <div class="vsl-content">
                <a href="#" class='v-player' onclick="openModal('video',<?php echo $val->ID; ?>,'<?php echo $title; ?>')">

                    <amp-img src="<?php echo $thumbnail; ?>" alt="" layout='fill'>
                    </amp-img>
                </a>
                <div class="video-title">
                    <span><?php echo $title ?></span>
                </div>
            </div>
        </div>
    <?php } ?>
</amp-carousel>