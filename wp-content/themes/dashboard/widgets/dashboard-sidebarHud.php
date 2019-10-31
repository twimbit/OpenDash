<div class="sidebar-header">
    <button on="tap:sidebar-right.close" class="sidebar-close">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.112 31.112" xml:space="preserve">
            <polygon points="31.112,1.414 29.698,0 15.556,14.142 1.414,0 0,1.414 14.142,15.556 0,29.698 1.414,31.112 15.556,16.97 
	29.698,31.112 31.112,29.698 16.97,15.556 " />

        </svg>
    </button>
    <p>Contents</p>
</div>
<nav class="sidebar-nav">
    <ul class="ampstart-dropdown-items list-reset m0 p0">
        <li class="ampstart-nav-item" style="height: 93%;overflow-y: auto;">
            <amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown ml1 i-amphtml-element i-amphtml-layout-container i-amphtml-layout" expand-single-section="" i-amphtml-layout="container">

                <?php
                $category_child = get_categories(array('child_of' => get_queried_object()->term_id, 'hide_empty' => FALSE));
                foreach ((array) $category_child as $singleSubCategory) {
                    $posts = getPostArray(array('post', 'amp_story', 'video', 'podcast', 'insights', 'archive'), $singleSubCategory->term_id);
                    if (!(empty($posts))) {
                        ?>
                        <section>
                            <header class="ampstart-nav-item i-amphtml-accordion-header" style="background-color:#fff;color:#094d5f;margin-bottom:0.5rem" role="button" aria-controls="26_AMP_content_0" aria-expanded="false" tabindex="0"><?php echo $singleSubCategory->name; ?></header>
                            <ul class="ampstart-dropdown-items list-reset m0 ml1 p0 i-amphtml-accordion-content" id="26_AMP_content_0">
                                <?php
                                        /* Getting posts type array */
                                        foreach ((array) $posts as $val) {
                                            $title = $val->post_title;
                                            ?>
                                    <li class="ampstart-nav-item" style="margin-bottom:1rem"><a href="#" onclick="openModalMetro(<?php echo $val->ID; ?>,'<?php echo $title; ?>',<?php echo get_queried_object()->term_id; ?>)"><?php echo $title; ?></a></li>
                                <?php } ?>
                            </ul>
                        </section>
                    <?php }
                    }
                    $posts = getPostArray(array('post', 'amp_story', 'video', 'podcast', 'insights', 'archive'), get_queried_object()->term_id);
                    if (!(empty($posts))) { ?>
                    <section>
                        <header class="ampstart-nav-item i-amphtml-accordion-header" style="background-color:#fff;color:#094d5f;margin-bottom:0.5rem" role="button" aria-controls="26_AMP_content_0" aria-expanded="false" tabindex="0">Updates & Other info
                        </header>
                        <ul class="ampstart-dropdown-items list-reset m0 ml1 p0 i-amphtml-accordion-content" id="26_AMP_content_0">
                            <?php
                                /* Getting posts type array */
                                $posts = getPostArray(array('post', 'amp_story', 'video', 'podcast', 'insights', 'archive'), get_queried_object()->term_id);
                                foreach ((array) $posts as $val) {
                                    if (get_the_category($val)[0]->parent == 0) {
                                        $title = $val->post_title;
                                        ?>
                                    <li class="ampstart-nav-item" style="margin-bottom:1rem"><a href="#" onclick="openModalMetro(<?php echo $val->ID; ?>,'<?php echo $title; ?>',<?php echo get_queried_object()->term_id; ?>)"><?php echo $title; ?></a></li>
                            <?php }
                                } ?>
                        </ul>
                    </section>
                <?php } ?>
            </amp-accordion>
        </li>
    </ul>
</nav>