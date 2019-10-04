<?php
$db_type = get_field('dashboard', get_queried_object());
get_template_part("dashboard/dashboard", $db_type);
?>

<div id="dialog_window_minimized_container"></div>
<?php get_footer(); ?>