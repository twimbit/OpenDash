<amp-carousel id="custom-button" layout="fill" type="carousel">
    <?php
    /* Getting webinar post type array */
    $webinars = getPostArray('webinar', get_queried_object()->term_id);
    foreach ((array) $webinars as $val) {
        $title = $val->post_title;
        $thumbnail = get_the_post_thumbnail_url($val, 'thumbnail');
        $file_url = get_field('archive_file_url', $val);
        ?>
        <div class="vsl-container">
            <div class="vsl-new" title="new content" style="visibility:<?php newPost($val->ID) ?>"></div>
            <div class="vsl-content">
                <a href="#" style="text-decoration:none" class='archive-f' onclick="openModal('live',<?php echo $val->ID; ?>,'<?php echo $title; ?>')">
                    <amp-img src="<?php echo $thumbnail; ?>" alt="" layout='fill'>
                    </amp-img>
                </a>
                <div class="video-title">
                    <span>this is title</span>
                </div>
            </div>
        </div>
    <?php } ?>
</amp-carousel>