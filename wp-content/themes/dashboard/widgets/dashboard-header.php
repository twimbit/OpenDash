<?php $template_dir = get_template_directory_uri(); ?>
<div class="ext-main">
    <a href="<?php echo home_url(); ?>" title="exit">
        <svg xmlns="http://www.w3.org/2000/svg" width="15.72" height="15.72" viewBox="0 0 15.72 15.72">
            <path id="ic_exit_to_app_24px" d="M12.528,14,11.3,15.227,6.93,10.86,11.3,6.493l1.231,1.231L10.275,9.987H18.72v1.747H10.275ZM4.747,3H16.973A1.746,1.746,0,0,1,18.72,4.747V8.24H16.973V4.747H4.747V16.973H16.973V13.48H18.72v3.493a1.746,1.746,0,0,1-1.747,1.747H4.747A1.752,1.752,0,0,1,3,16.973V4.747A1.752,1.752,0,0,1,4.747,3Z" transform="translate(-3 -3)" fill="#fff" />
        </svg>
    </a>
</div>
<div class="client-icon">
    <img src="<?php if (!empty(get_field('category_logo', get_queried_object())['url'])) {
                    echo get_field('category_logo', get_queried_object())['url'];
                } else {
                    echo get_template_directory_uri() . '/assets/images/logo.png';
                }  ?>" alt="" />
    <a href="<?php echo home_url(); ?>" class="client-link"></a>
</div>
<h4 class="client-name">
    <?php if (!(is_search())) { ?>
        <p><span style="font-weight: 700">Terminal</span> - <?php echo get_queried_object()->name; ?></p>
    <?php } ?>

</h4>
<div id="dialog_window_minimized_container"></div>
<div class="twimbit-icon">
    <img src="<?php echo $template_dir; ?>/assets/images/twimbit-pro-logo.png" alt="" />
</div>
<div class="right-tools">
    <div class="hamberger-icon">
        <svg on="tap:sidebar-right.toggle" id="sidebarCollapse" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
        </svg>
    </div>
    <div class="fullscreen-icon" onclick="toggleFullScreen(document.body)">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="22" viewBox="0 0 24 24">
            <path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z" /></svg>
    </div>
    <div class="zoom-in" hidden>
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search-plus" class="svg-inline--fa fa-search-plus fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M304 192v32c0 6.6-5.4 12-12 12h-56v56c0 6.6-5.4 12-12 12h-32c-6.6 0-12-5.4-12-12v-56h-56c-6.6 0-12-5.4-12-12v-32c0-6.6 5.4-12 12-12h56v-56c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v56h56c6.6 0 12 5.4 12 12zm201 284.7L476.7 505c-9.4 9.4-24.6 9.4-33.9 0L343 405.3c-4.5-4.5-7-10.6-7-17V372c-35.3 27.6-79.7 44-128 44C93.1 416 0 322.9 0 208S93.1 0 208 0s208 93.1 208 208c0 48.3-16.4 92.7-44 128h16.3c6.4 0 12.5 2.5 17 7l99.7 99.7c9.3 9.4 9.3 24.6 0 34zM344 208c0-75.2-60.8-136-136-136S72 132.8 72 208s60.8 136 136 136 136-60.8 136-136z"></path>
        </svg>
    </div>
    <div class="zoom-out" hidden>
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search-minus" class="svg-inline--fa fa-search-minus fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M304 192v32c0 6.6-5.4 12-12 12H124c-6.6 0-12-5.4-12-12v-32c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm201 284.7L476.7 505c-9.4 9.4-24.6 9.4-33.9 0L343 405.3c-4.5-4.5-7-10.6-7-17V372c-35.3 27.6-79.7 44-128 44C93.1 416 0 322.9 0 208S93.1 0 208 0s208 93.1 208 208c0 48.3-16.4 92.7-44 128h16.3c6.4 0 12.5 2.5 17 7l99.7 99.7c9.3 9.4 9.3 24.6 0 34zM344 208c0-75.2-60.8-136-136-136S72 132.8 72 208s60.8 136 136 136 136-60.8 136-136z"></path>
        </svg>
    </div>
</div>