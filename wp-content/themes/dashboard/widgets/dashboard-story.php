<amp-carousel id="custom-button" layout="fill" type="carousel">
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
            <div class="vsl-new" style="visibility:<?php newPost($val->ID) ?>"></div>
            <div class="vsl-content">
                <a href="#" onclick="openModal('story',<?php echo $val->ID; ?>,'<?php echo $title; ?>')">
                    <amp-img src="<?php echo $thumbnail; ?>" alt="" layout='fill'>
                        <div class="infinite">
                            <div class="pace pace-active">
                                <div class="pace-activity" style="display: block;"></div>
                            </div>
                        </div>
                    </amp-img>
                </a>
                <div class="video-title">
                    <span>this is title</span>
                </div>
            </div>
        </div>
    <?php } ?>
</amp-carousel>