<?php
/* Getting podcast post type array */
$podcast = getPostArray('podcast', get_queried_object()->term_id);
?>
<?php
foreach ((array)$podcast as $val) {
    $title = $val->post_title;
    $description = $val->post_content;
    $url = get_field('audio_file', $val);
    ?>
    <a href="#" style="text-decoration:none;position:relative" class='pd-player' onclick="openModal('podcast',<?php echo $val->ID; ?>,'<?php echo $title; ?>')">
        <div class="vsl-new in-new" title="new content" style="visibility:<?php newPost($val->ID) ?>"></div>
        <div class="play black-tint">
            <div class="podcast-icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="85.658" height="85.658" viewBox="0 0 85.658 85.658" class="icon">
                    <defs>
                        <style>
                            .a {
                                fill: rgba(0, 0, 0, 0.55);
                            }

                            .b {
                                fill: #fafafa;
                            }

                            .c {
                                filter: url(#a);
                            }
                        </style>
                        <filter id="a" x="0" y="0" width="85.658" height="85.658" filterUnits="userSpaceOnUse">
                            <feOffset dy="3" input="SourceAlpha"></feOffset>
                            <feGaussianBlur stdDeviation="3" result="b"></feGaussianBlur>
                            <feFlood flood-opacity="0.161"></feFlood>
                            <feComposite operator="in" in2="b"></feComposite>
                            <feComposite in="SourceGraphic"></feComposite>
                        </filter>
                    </defs>
                    <g transform="translate(-44.057 -33.003)">
                        <g class="c" transform="matrix(1, 0, 0, 1, 44.06, 33)">
                            <ellipse class="a" cx="33.829" cy="33.829" rx="33.829" ry="33.829" transform="translate(9 6)"></ellipse>
                        </g>
                        <path class="b" d="M30.863,22.324l-7.989-6V39.9l7.989-6,7.727-5.789Zm0,0-7.989-6V39.9l7.989-6,7.727-5.789Zm0,0-7.989-6V39.9l7.989-6,7.727-5.789ZM25.493,7.341V2.05A26.059,26.059,0,0,0,11.558,7.839l3.719,3.746A20.8,20.8,0,0,1,25.493,7.341ZM11.584,15.278,7.839,11.558A26.059,26.059,0,0,0,2.05,25.493H7.341A20.8,20.8,0,0,1,11.584,15.278ZM7.341,30.732H2.05A26.059,26.059,0,0,0,7.839,44.667l3.746-3.746A20.609,20.609,0,0,1,7.341,30.732Zm4.217,17.654a26.145,26.145,0,0,0,13.935,5.789V48.884A20.8,20.8,0,0,1,15.278,44.64l-3.719,3.746ZM54.306,28.112A26.233,26.233,0,0,1,30.863,54.175V48.884a20.952,20.952,0,0,0,0-41.543V2.05A26.233,26.233,0,0,1,54.306,28.112Z" transform="translate(58.967 44.912)"></path>
                    </g>
                </svg>
            </div>
            <div class="podcast-fields">
                <div class="podcast-title"><?php echo $title; ?></div>
                <div class="podcast-desc">
                    <?php echo $description; ?>
                </div>
            </div>
            <div class="podcast-length">
                10:23
            </div>
        </div>
    </a>
<?php } ?>