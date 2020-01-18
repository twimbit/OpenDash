<ul class="nav nav-tabs">
    <?php
    /* Getting tab post type array */
    $tab = getPostArray('tab', get_queried_object()->term_id);
    $cat = get_queried_object()->term_id;
    $tabs = get_field('tab', $tab[0]);
    $i = 0;
    foreach ((array) $tabs as $val) {
        $title = $val['tab_title'];

        if ($i == 0) {
            ?>
            <li>
                <a data-toggle="tab" href="#<?php echo $i; ?>" class="nav-link active"><?php echo $title; ?></a>
            </li>
        <?php } else { ?>
            <li>
                <a data-toggle="tab" href="#<?php echo $i; ?>" class="nav-link"><?php echo $title; ?></a>
            </li>
    <?php }
        $i++;
    }
    ?>
    <li>
        <a data-toggle="tab" href="#links" class="nav-link">links</a>
    </li>
</ul>
<div class="tab-content">
    <?php
    $i = 0;
    foreach ((array) $tabs as $val) {
        $content = $val['tab_content'];
        $title = $val['tab_title'];
        if ($i == 0) {
            ?>
            <div class="tab-pane active show" id="<?php echo $i; ?>">
                <p>
                    <?php echo $content; ?>
                </p>
            </div>
        <?php } else { ?>
            <div class="tab-pane show" id="<?php echo $i; ?>">
                <p>
                    <?php echo $content; ?>
                </p>
            </div>
    <?php }
        $i++;
    }
    ?>
    <div class="tab-pane show" id="links">
        <div class="social-links gap">
            <?php get_template_part("widgets/dashboard", "social"); ?>
        </div>
    </div>
</div>