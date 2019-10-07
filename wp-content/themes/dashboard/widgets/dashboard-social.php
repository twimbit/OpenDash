<?php
$args = array(
    'post_type' => 'link',
    'cat' => get_queried_object()->term_id
);
$links = get_posts($args);
$link = get_field('link_details', $links[0]);

?>
<div class="social black-tint">
    <?php foreach ($link as $val) { ?>
        <a class="social-icon" data-tooltip="LinkedIn" href="<?php echo $val['link']; ?>">
            <i class="fa <?php echo $val['link_icon']; ?>" aria-hidden="true"></i>
        </a>
    <?php } ?>
</div>