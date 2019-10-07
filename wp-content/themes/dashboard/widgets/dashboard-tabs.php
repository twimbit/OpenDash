<?php
$args = array(
    'post_type' => 'tab',
    'cat' => get_queried_object()->term_id
);
$tab = get_posts($args);
$cat = get_queried_object()->term_id;
$tabs = get_field('tab', $tab[0]);
?>

<ul class="nav nav-tabs">
    <?php
    $i = 0;
    foreach ($tabs as $val) {
        $title = $val['tab_title'];
        if ($i == 0) {
            ?>
            <li>
                <a data-toggle="tab" href="#<?php echo $title; ?>" class="nav-link active"><?php echo $title; ?></a>
            </li>
        <?php } else { ?>
            <li>
                <a data-toggle="tab" href="#<?php echo $title; ?>" class="nav-link"><?php echo $title; ?></a>
            </li>
    <?php }
        $i++;
    }
    ?>
</ul>
<div class="tab-content fancy-scrollbar">
    <?php
    $i = 0;
    foreach ($tabs as $val) {
        $content = $val['tab_content'];
        $title = $val['tab_title'];
        if ($i == 0) {
            ?>
            <div class="tab-pane active show" id="<?php echo $title; ?>">
                <p>
                    <?php echo $content; ?>
                </p>
            </div>
        <?php } else { ?>
            <div class="tab-pane show" id="<?php echo $title; ?>">
                <p>
                    <?php echo $content; ?>
                </p>
            </div>
    <?php }
        $i++;
    } ?>
</div>