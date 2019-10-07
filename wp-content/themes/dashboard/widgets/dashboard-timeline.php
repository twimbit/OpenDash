<?php
$args = array(
    'post_type' => 'timeline',
    'cat' => get_queried_object()->term_id
);
$timelines = get_posts($args);
$timeline = get_field('timeline_details', $timelines[0]);

?>
<div style="padding:0 10px;">
    <div class="" style="margin-top: 10px">
        <ul class="cbp_tmtimeline">
            <li style="text-align: left;margin-bottom: 10px;">
                Timeline
            </li>
            <?php foreach ($timeline as $val) { ?>
                <li>
                    <div class="cbp_tmicon cbp_tmicon-phone" style="background-image: url(<?php echo $val['timeline_favicon']['sizes']['thumbnail'] ?>);"></div>
                    <div class="cbp_tmlabel" style="display:flex">
                        <p>
                            <?php echo $val['timeline_content'] ?>
                        </p>
                        <p style="margin-left: 5px;"><?php echo $val['timeline_year'] ?></p>
                    </div>
                </li>
            <? } ?>
        </ul>
    </div>
</div>