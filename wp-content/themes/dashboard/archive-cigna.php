<?php
$args = array('post_type' => 'insight');

$q = new WP_Query($args);

if ($q->have_posts()) {
    foreach ($q as $val) {
        //
        print_r(get_field('chart_data', $val));
       

        //
    } // end while
} // end if
