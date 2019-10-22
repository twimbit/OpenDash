<div class="sidebar-header">
    <button on="tap:sidebar-right.close" class="sidebar-close">
        <i class="fa fa-times fa-2x" aria-hidden="true"></i>
    </button>
    <p>Contents</p>
</div>
<nav class="sidebar-nav">
    <ul class="ampstart-dropdown-items list-reset m0 p0">
        <li class="ampstart-nav-item" style="height: 93%;overflow-y: auto;">
            <amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown ml1 i-amphtml-element i-amphtml-layout-container i-amphtml-layout" expand-single-section="" i-amphtml-layout="container">

                <?php
                $category_child = get_categories(array('child_of' => get_queried_object()->term_id, 'hide_empty' => FALSE));
                foreach ($category_child as $singleSubCategory) {   // echo do_shortcode('[pc-logout-box]');
                    ?>
                    <section>
                        <header class="ampstart-nav-item i-amphtml-accordion-header" style="background-color:#fff;color:#094d5f;margin-bottom:0.5rem" role="button" aria-controls="26_AMP_content_0" aria-expanded="false" tabindex="0"><?php echo $singleSubCategory->name; ?></header>
                        <ul class="ampstart-dropdown-items list-reset m0 ml1 p0 i-amphtml-accordion-content" id="26_AMP_content_0">
                            <?php
                                /* Getting posts type array */
                                $posts = getPostArray(array('post'), $singleSubCategory->term_id);
                                foreach ($posts as $val) {
                                    $title = $val->post_title;
                                    ?>
                                <li class="ampstart-nav-item" style="margin-bottom:1rem"><a href="#" onclick="openModalMetro(<?php echo $val->ID; ?>,'<?php echo $title; ?>',<?php echo get_queried_object()->term_id; ?>)"><?php echo $title; ?></a></li>
                            <?php } ?>
                        </ul>
                    </section>
                <?php } ?>
            </amp-accordion>
        </li>
    </ul>
</nav>