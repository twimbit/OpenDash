<?php
/* Getting podcast post type array */
$podcast = getPostArray('podcast', get_queried_object()->term_id);
?>
<?php
foreach ((array) $podcast as $val) {
    $title = $val->post_title;
    $description = $val->post_content;
    $url = get_field('audio_file', $val);
    ?>

    <div class="vsl-new in-new" title="new content" style="visibility:<?php newPost($val->ID) ?>"></div>
    <div class="play black-tint">
        <div class="podcast-fields">
            <div class="podcast-title"><?php echo $title; ?></div>
            <div class="podcast-desc">
                <amp-audio src="<?php echo $url; ?>" height="30px" width="300px" controlslist="nodownload">
                    <div fallback>
                        <p>Your browser doesn’t support HTML5 audio</p>
                    </div>
                </amp-audio>
            </div>
        </div>
        <div class="podcast-length">
            <a href="#" style="text-decoration:none;position:relative" class='pd-player' onclick="openModal('podcast',<?php echo $val->ID; ?>,'<?php echo $title; ?>')">
                <svg width="36" height="18" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1408 928v320q0 119-84.5 203.5t-203.5 84.5h-832q-119 0-203.5-84.5t-84.5-203.5v-832q0-119 84.5-203.5t203.5-84.5h704q14 0 23 9t9 23v64q0 14-9 23t-23 9h-704q-66 0-113 47t-47 113v832q0 66 47 113t113 47h832q66 0 113-47t47-113v-320q0-14 9-23t23-9h64q14 0 23 9t9 23zm384-864v512q0 26-19 45t-45 19-45-19l-176-176-652 652q-10 10-23 10t-23-10l-114-114q-10-10-10-23t10-23l652-652-176-176q-19-19-19-45t19-45 45-19h512q26 0 45 19t19 45z" />
                </svg>
            </a>
        </div>
    </div>

<?php } ?>