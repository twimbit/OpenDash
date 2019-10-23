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
                <section>
                    <header class="ampstart-nav-item i-amphtml-accordion-header" style="background-color:#fff;color:#094d5f;margin-bottom:0.5rem" role="button" aria-controls="26_AMP_content_0" aria-expanded="false" tabindex="0">Insights</header>
                    <ul class="ampstart-dropdown-items list-reset m0 ml1 p0 i-amphtml-accordion-content" id="26_AMP_content_0">
                        <?php
                        $insight = getPostArray('insights', get_queried_object()->term_id);
                        foreach ($insight as $val) {
                            $title = $val->post_title;
                            ?>
                            <li class="ampstart-nav-item" style="margin-bottom:1rem"><a href="#" onclick="openModal('insight',<?php echo $val->ID; ?>,'<?php echo $title; ?>')"><?php echo $title; ?></a></li>
                        <?php } ?>
                    </ul>
                </section>
                <section hidden>
                    <header class="ampstart-nav-item i-amphtml-accordion-header" style="background-color:#fff;color:#094d5f;margin-bottom:0.5em" role="button" aria-controls="26_AMP_content_1" aria-expanded="false" tabindex="0">Gallery</header>
                    <ul class="ampstart-dropdown-items list-reset m0 ml1 p0 i-amphtml-accordion-content" id="26_AMP_content_0">
                        <?php
                        $insight = getPostArray('gallery', get_queried_object()->term_id);
                        foreach ($insight as $val) {
                            $title = $val->post_title;
                            ?>
                            <li class="ampstart-nav-item" style="margin-bottom:1rem"><a href="#" onclick="openModal('gallery',<?php echo $val->ID; ?>,'<?php echo $title; ?>')"><?php echo $title; ?></a></li>
                        <?php } ?>
                    </ul>
                </section>
                <section>
                    <header class="ampstart-nav-item i-amphtml-accordion-header" style="background-color:#fff;color:#094d5f;margin-bottom:0.5rem" role="button" aria-controls="26_AMP_content_2" aria-expanded="false" tabindex="0">Podcasts</header>
                    <ul class="ampstart-dropdown-items list-reset m0 ml1 p0 i-amphtml-accordion-content" id="26_AMP_content_0">
                        <?php
                        $insight = getPostArray('podcast', get_queried_object()->term_id);
                        foreach ($insight as $val) {
                            $title = $val->post_title;
                            ?>
                            <li class="ampstart-nav-item" style="margin-bottom:1rem"><a href="#" onclick="openModal('podcast',<?php echo $val->ID; ?>,'<?php echo $title; ?>')"><?php echo $title; ?></a></li>
                        <?php } ?>
                    </ul>
                </section>
                <section>
                    <header class="ampstart-nav-item i-amphtml-accordion-header" style="background-color:#fff;color:#094d5f;margin-bottom:0.5rem" role="button" aria-controls="26_AMP_content_3" aria-expanded="false" tabindex="0">Archive</header>
                    <ul class="ampstart-dropdown-items list-reset m0 ml1 p0 i-amphtml-accordion-content" id="26_AMP_content_0">
                        <?php
                        $insight = getPostArray('archive', get_queried_object()->term_id);
                        foreach ($insight as $val) {
                            $title = $val->post_title;
                            ?>
                            <li class="ampstart-nav-item" style="margin-bottom:1rem"><a href="#" onclick="openModal('archive',<?php echo $val->ID; ?>,'<?php echo $title; ?>')"><?php echo $title; ?></a></li>
                        <?php } ?>
                    </ul>
                </section>
                <section hidden>
                    <header class="ampstart-nav-item i-amphtml-accordion-header" style="background-color:#fff;color:#094d5f;margin-bottom:0.5rem" role="button" aria-controls="26_AMP_content_4" aria-expanded="false" tabindex="0">Live</header>
                    <ul class="ampstart-dropdown-items list-reset m0 ml1 p0 i-amphtml-accordion-content" id="26_AMP_content_0">
                        <?php
                        $insight = getPostArray('webinar', get_queried_object()->term_id);
                        foreach ($insight as $val) {
                            $title = $val->post_title;
                            ?>
                            <li class="ampstart-nav-item" style="margin-bottom:1rem"><a href="#" onclick="openModal('live',<?php echo $val->ID; ?>,'<?php echo $title; ?>')"><?php echo $title; ?></a></li>
                        <?php } ?>
                    </ul>
                </section>
                <section>
                    <header class="ampstart-nav-item i-amphtml-accordion-header" style="background-color:#fff;color:#094d5f;margin-bottom:0.5rem" role="button" aria-controls="26_AMP_content_5" aria-expanded="false" tabindex="0">Videos</header>
                    <ul class="ampstart-dropdown-items list-reset m0 ml1 p0 i-amphtml-accordion-content" id="26_AMP_content_0">
                        <?php
                        $insight = getPostArray('video', get_queried_object()->term_id);
                        foreach ($insight as $val) {
                            $title = $val->post_title;
                            ?>
                            <li class="ampstart-nav-item" style="margin-bottom:1rem"><a href="#" onclick="openModal('video',<?php echo $val->ID; ?>,'<?php echo $title; ?>')"><?php echo $title; ?></a></li>
                        <?php } ?>
                    </ul>
                </section>
                <section>
                    <header class="ampstart-nav-item i-amphtml-accordion-header" style="background-color:#fff;color:#094d5f;margin-bottom:0.5rem" role="button" aria-controls="26_AMP_content_5" aria-expanded="false" tabindex="0">Stories</header>
                    <ul class="ampstart-dropdown-items list-reset m0 ml1 p0 i-amphtml-accordion-content" id="26_AMP_content_0">
                        <?php
                        $insight = getPostArray('amp_story', get_queried_object()->term_id);
                        foreach ($insight as $val) {
                            $title = $val->post_title;
                            ?>
                            <li class="ampstart-nav-item" style="margin-bottom:1rem"><a href="#" onclick="openModal('story',<?php echo $val->ID; ?>,'<?php echo $title; ?>')"><?php echo $title; ?></a></li>
                        <?php } ?>
                    </ul>
                </section>
            </amp-accordion>
        </li>
    </ul>
</nav>
<div class="sidebar-social-links">
    <div class="sidebar-links">
        <amp-social-share type="email"></amp-social-share>
        <amp-social-share type="facebook" data-param-app_id="254325784911610"></amp-social-share>
        <amp-social-share type="linkedin"></amp-social-share>
        <amp-social-share type="pinterest" data-param-media="https://amp.dev/static/samples/img/amp.jpg"></amp-social-share>
        <amp-social-share type="tumblr"></amp-social-share>
        <amp-social-share type="twitter"></amp-social-share>
    </div>
</div>