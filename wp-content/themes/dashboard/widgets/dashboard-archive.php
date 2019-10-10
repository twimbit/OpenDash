<?php
$args = array(
    'post_type' => 'archive',
    'cat' => get_queried_object()->term_id
);
$archive = get_posts($args);
?>
<div class="archive-files fancy-scrollbar archive-vertical-scroll">
    <?php foreach ($archive as $val) {
        $title = $val->post_title;
        $file_url = get_field('archive_file_url', $val);
        ?>
        <div class="archive-file">
            <div class="vsl-new archive-new" style="visibility:<?php newPost($val->ID) ?>"></div>
            <div class="title">
                <?php echo $title; ?>
            </div>
            <div class="archive-open">
                <a href="#" style="text-decoration:none" class='archive-f' onclick="openModal('archive',<?php echo $val->ID; ?>,'<?php echo $title; ?>')">
                    open
                </a>
            </div>
        </div>
    <?php
    } ?>

</div>