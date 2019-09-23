<?php
$args = array('post_type' => 'post');
$q = new WP_Query($args);
if ($q->have_posts()) {
    while ($q->have_posts()) {
        $q->the_post();
        //
        echo the_title() . "<br>";

        //
    } // end while
} // end if
