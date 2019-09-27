<?php
$args = array(
    'post_type' => 'video',
    'cat' => get_queried_object()->term_id
);
$podcast = get_posts($args);

?>
<?php
foreach ($podcast as $val) {
    $title = $val->post_title;
    $description = $val->post_content;
    $url = get_fields($val, 'url');
    ?>
    <a on="tap:gvl.show" href="#" style="text-decoration:none">
        <div class="video-container">
            <div class="in-title-c">
                <div class="title">This is titile</div>
                <a href="#">
                    <div class="close-button"></div>
                </a>
            </div>
            <div class="video-box"></div>
            <div class="video-about">
                <p class="video-titile">Title</p>
                <p class="video-date">date</p>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio
                    doloribus fugiat quae adipisci hic placeat dolorem nihil, provident
                    sapiente rerum ex dicta
                </p>
            </div>
        </div>
    </a>
<?php } ?>