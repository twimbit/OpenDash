<?php
$template_dir = get_template_directory_uri();
?>
<title>Dashboard-<?php echo get_queried_object()->name; ?></title>
</head>

<body style="overflow-y:hidden">
    <!-- Begin page -->
    <div id="wrapper" style="overflow-y:hidden">
        <!-- Sidebar  -->
        <amp-sidebar id="sidebar-right" class="sample-sidebar" layout="nodisplay" side="right">
            <?php get_template_part("widgets/dashboard", "sidebar"); ?>
        </amp-sidebar>

        <div class="board-header">
            <?php get_template_part("widgets/dashboard", "header"); ?>
        </div>
        <div class="dashboard" style="overflow-y:hidden">
            <div class="main-board" id="main-board">
                <div class="row-1">
                    <div class="tab-card card-box black-tint gap" id="overview">
                        <?php get_template_part("widgets/dashboard", "tabs"); ?>
                    </div>
                    <div class="mr">
                        <div class="key-members gap">
                            <?php get_template_part("widgets/dashboard", "members"); ?>
                        </div>
                    </div>

                    <div class="analytics-charts black-tint gap">
                        <?php get_template_part("widgets/dashboard", "insight"); ?>
                        <div id="insight"></div>
                    </div>
                </div>
                <div class="row-2">
                    <div class="tl">
                        <div class="timeline-card card-box widget-box-two gap timeline-vertical-scroll black-tint container-title">
                            <?php get_template_part("widgets/dashboard", "timeline"); ?>
                        </div>
                        <div class="realTimeChart black-tint gap">
                            <?php get_template_part("widgets/dashboard", "rtc"); ?>
                        </div>
                    </div>
                    <div class="column-1">
                        <div class="row-2-1">
                            <div class="world-map gap" hidden>
                                <?php get_template_part("widgets/dashboard", "wm"); ?>
                            </div>
                            <div class="radar">
                                <div class="radar-back">
                                    <div class="radar-container">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="401.41" height="342.735" viewBox="0 0 401.41 342.735">
                                            <defs>
                                                <style>.a,.c,.u,.v{opacity:0.3;}.b,.c,.m,.x{fill:none;stroke:#fff;stroke-miterlimit:10;}.b{stroke-width:0.2px;stroke-dasharray:2.01;}.d,.j,.k,.l,.t,.w{opacity:0.4;}.d{fill:url(#a);}.e,.f,.h,.n,.p,.q,.r,.s,.v,.z{fill:#fff;}.e,.m,.q{opacity:0.1;}.g{fill:#9ae5e5;opacity:0.18;}.h{font-size:1px;}.h,.p,.q,.r{font-family:OpenSans-Regular, Open Sans;}.h,.o,.r{opacity:0.5;}.i{opacity:0.2;fill:url(#b);}.j{fill:url(#c);}.k{fill:url(#d);}.l{fill:url(#e);}.m{stroke-width:0.5px;}.n{opacity:0.38;}.p,.q,.r{font-size:2px;}.p{opacity:0.6;}.s{opacity:0.05;}.t{fill:url(#f);}.u{fill:#9ae3ef;}.x{stroke-width:0.1px;}.y{fill:rgba(241,108,112,0.92);}.z{font-size:15px;font-family:SegoeUI, Segoe UI;}.aa{filter:url(#q);}.ab{filter:url(#o);}.ac{filter:url(#m);}.ad{filter:url(#k);}.ae{filter:url(#i);}.af{filter:url(#g);}</style>
                                                <linearGradient id="a" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                                    <stop offset="0" stop-color="#88ffdf"/>
                                                    <stop offset="1" stop-opacity="0"/>
                                                </linearGradient>
                                                <linearGradient id="b" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                                    <stop offset="0" stop-color="#ffab09"/>
                                                    <stop offset="1" stop-opacity="0"/>
                                                </linearGradient>
                                                <linearGradient id="c" x1="0" y1="0.5" x2="1" y2="0.5" xlink:href="#a"/>
                                                <linearGradient id="d" x1="1" y1="0.5" x2="0" y2="0.5" xlink:href="#a"/>
                                                <linearGradient id="e" x1="0" y1="0.5" x2="1" y2="0.5" xlink:href="#a"/>
                                                <linearGradient id="f" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                                    <stop offset="0" stop-color="#ffab27"/>
                                                    <stop offset="1" stop-opacity="0"/>
                                                </linearGradient>
                                                <filter id="g" x="276.31" y="60.7" width="78.756" height="42" filterUnits="userSpaceOnUse">
                                                    <feOffset dy="3" input="SourceAlpha"/>
                                                    <feGaussianBlur stdDeviation="3" result="h"/>
                                                    <feFlood flood-opacity="0.161"/>
                                                    <feComposite operator="in" in2="h"/>
                                                    <feComposite in="SourceGraphic"/>
                                                </filter>
                                                <filter id="i" x="303.381" y="134.7" width="84.614" height="42" filterUnits="userSpaceOnUse">
                                                    <feOffset dy="3" input="SourceAlpha"/>
                                                    <feGaussianBlur stdDeviation="3" result="j"/>
                                                    <feFlood flood-opacity="0.161"/>
                                                    <feComposite operator="in" in2="j"/>
                                                    <feComposite in="SourceGraphic"/>
                                                </filter>
                                                <filter id="k" x="243.505" y="273.7" width="77.246" height="42" filterUnits="userSpaceOnUse">
                                                    <feOffset dy="3" input="SourceAlpha"/>
                                                    <feGaussianBlur stdDeviation="3" result="l"/>
                                                    <feFlood flood-opacity="0.161"/>
                                                    <feComposite operator="in" in2="l"/>
                                                    <feComposite in="SourceGraphic"/>
                                                </filter>
                                                <filter id="m" x="150.414" y="287.7" width="77.429" height="42" filterUnits="userSpaceOnUse">
                                                    <feOffset dy="3" input="SourceAlpha"/>
                                                    <feGaussianBlur stdDeviation="3" result="n"/>
                                                    <feFlood flood-opacity="0.161"/>
                                                    <feComposite operator="in" in2="n"/>
                                                    <feComposite in="SourceGraphic"/>
                                                </filter>
                                                <filter id="o" x="295.087" y="208.7" width="80.083" height="42" filterUnits="userSpaceOnUse">
                                                    <feOffset dy="3" input="SourceAlpha"/>
                                                    <feGaussianBlur stdDeviation="3" result="p"/>
                                                    <feFlood flood-opacity="0.161"/>
                                                    <feComposite operator="in" in2="p"/>
                                                    <feComposite in="SourceGraphic"/>
                                                </filter>
                                                <filter id="q" x="33.052" y="51.7" width="86.989" height="42" filterUnits="userSpaceOnUse">
                                                    <feOffset dy="3" input="SourceAlpha"/>
                                                    <feGaussianBlur stdDeviation="3" result="r"/>
                                                    <feFlood flood-opacity="0.161"/>
                                                    <feComposite operator="in" in2="r"/>
                                                    <feComposite in="SourceGraphic"/>
                                                </filter>
                                            </defs>
                                            <g transform="translate(-862.454 -407.3)">
                                                <g transform="matrix(0.966, -0.259, 0.259, 0.966, -66.223, 324.277)">
                                                    <g transform="translate(842.079 361.704)">
                                                        <g transform="translate(29.973 -27.692) rotate(9)">
                                                            <g class="a">
                                                                <path class="b" d="M130.769,248.933c0-35.425-29.256-64.143-65.345-64.143S.08,213.508.08,248.933s29.256,64.143,65.345,64.143S130.769,284.358,130.769,248.933Z" transform="translate(-0.08 -184.79)"/>
                                                            </g>
                                                            <path class="c" d="M93.075,242.491c0-18.773-15.5-33.991-34.628-33.991S23.82,223.718,23.82,242.491s15.5,33.991,34.628,33.991S93.075,261.264,93.075,242.491Z" transform="translate(6.923 -178.335)"/>
                                                            <path class="d" d="M105.828,246.16c.012-22.7-17.506-41.72-40.519-43.987s-44.031,12.955-48.615,35.207,8.758,44.294,30.86,50.982l12.743-42.1,42.8,15.254a43.583,43.583,0,0,0,2.732-15.356Z" transform="translate(4.556 -181.89)"/>
                                                            <path class="e" d="M81.486,240.52a25.218,25.218,0,1,0-25.2,24.75A24.985,24.985,0,0,0,81.486,240.52Z" transform="translate(9.058 -176.364)"/>
                                                            <path class="f" d="M51.406,254.18a3.266,3.266,0,0,0-2.048-3.029,3.374,3.374,0,0,0-3.633.706,3.223,3.223,0,0,0-.719,3.566,3.33,3.33,0,0,0,3.085,2.011A3.285,3.285,0,0,0,51.406,254.18Z" transform="translate(13.097 -213.185)"/>
                                                            <path class="g" d="M19.112,193.279H16.017v3.013h-.57v-3.013H12.43v-.547h3.017V189.72h.57v3.013h3.095Z" transform="translate(3.563 -74.273)"/>
                                                            <text class="h" transform="matrix(1, 0, 0, -1, 195.244, 8.171)">
                                                                <tspan x="0" y="0">FOLDER 02</tspan>
                                                            </text>
                                                            <path class="i" d="M225.566,122.345l-7.578-67.962-87.762-30.6L19.2,175.675Z" transform="translate(45.007 42.05)"/>
                                                            <path class="j" d="M93.122,162.055l94-104.655L57.16,115.187l.363.775a140.7,140.7,0,0,0,35.6,46.092Z" transform="translate(16.757 128.165)"/>
                                                            <path class="k" d="M35.993,199.516l162.144-71.185S42.74,88.925,31.163,83.37c-9.868,20.084-13.442,48.749-12.574,61.6C18.355,152.61,21.036,181.745,35.993,199.516Z" transform="translate(5.343 57.691)"/>
                                                            <path class="l" d="M105.41,154.865l68.1,136.777s-.57-146.985-.57-152.438C167.038,138.785,121.9,139.662,105.41,154.865Z" transform="translate(30.99 -105.315)"/>
                                                            <path class="m" d="M229.678,152.427c0-31.164-25.737-56.427-57.484-56.427s-57.484,25.263-57.484,56.427,25.737,56.427,57.484,56.427,57.484-25.263,57.484-56.427Z" transform="translate(33.733 32.299)"/>
                                                            <path class="f" d="M161.422,140.583a3.121,3.121,0,1,0-3.121,3.064,3.138,3.138,0,0,0,2.211-.894A3.022,3.022,0,0,0,161.422,140.583Z" transform="translate(45.671 44.727)"/>
                                                            <path class="m" d="M282.607,162.852c0-55.462-45.8-100.422-102.3-100.422S78,107.39,78,162.852s45.8,100.422,102.3,100.422,102.3-44.96,102.3-100.422Z" transform="translate(22.905 20.552)"/>
                                                            <path class="n" d="M158.161,141.307l.039-15.241h1.632v-.343H158.2l.013-5.771h.738V119.6h-.738v-3.521h.738v-.331h-.738l.026-5.606h1.593v-.343h-1.593l.013-4.97h.7v-.343h-.7V100.96h.7v-.343h-.7l.013-4.182h1.671v-.14h-1.671v-.318h1.683l-.958-1.627-.971-1.64-.958,1.64-.958,1.627h1.813v.318H156.05v.14h1.865l.013,4.182h-.945v.343h.945l.013,3.521h-.958v.343h.958l.013,4.97h-1.735v.343h1.748l.013,5.606h-1v.331h1l.013,3.521h-1.01v.356h1.01l.013,5.771h-1.787v.343h1.787l.052,15.241Z" transform="translate(45.928 104.028)"/>
                                                            <path class="n" d="M204.531,140.147,189,140.109v-1.6h-.35v1.6l-5.892-.013v-.725h-.35v.725l-3.574-.013v-.712h-.363v.712l1.968-.013v-1.564h-.35v1.564l-5.063-.013v-.686h-.35v.686h-3.587v-.686h-.35v.674h-4.26v-1.64h-.142v1.64h-.311V138.38l-1.671.953-1.671.941,1.671.953,1.671.941v-1.78h.311v1.83h.142v-1.83l4.26-.025v.941h.35v-.941l3.587-.013v.953h.35v-.953l5.063-.013v1.716h.35v-1.716l-1.968-.013v.979h.363v-.979l3.574-.013v.991h.35v-.991l5.892-.025v1.767H189v-1.767l15.527-.051Z" transform="translate(47.886 45.062)"/>
                                                            <path class="n" d="M121.39,140.489l15.527.038v1.614h.35v-1.614l5.879.013v.737h.35v-.737l3.587.013v.725h.363v-.725l-1.968.013v1.576h.35v-1.576l5.05.013v.7h.363v-.7l3.587.013v.686h.35v-.686l4.248.013v1.627h.155V140.6h.311v1.64l1.658-.928,1.671-.953-1.671-.941-1.658-.953v1.792h-.311v-1.83h-.155v1.83l-4.248.013v-.928h-.35v.928l-3.587.013v-.941h-.363v.941l-5.05.013v-1.716h-.35V140.3l1.968.025v-.979h-.363v.979l-3.587.013v-.992h-.35v.992l-5.879.013v-1.767h-.35v1.767l-15.527.051Z" transform="translate(35.704 44.974)"/>
                                                            <path class="n" d="M158.2,149.14l.039,15.241h1.632v.343H158.24l.013,5.771h.738v.343h-.738v3.521h.738v.356h-.738l.026,5.593h1.593v.343h-1.593l.013,4.97h.7v.343h-.7v3.521h.7v.343h-.7l.013,4.182h1.671v.14H158.3v.305h1.683l-.958,1.64-.958,1.64-.971-1.64-.958-1.64h1.813v-.305H156.09v-.14h1.865l.013-4.182h-.945v-.343h.945l.013-3.521h-.958v-.343h.958l.013-4.97h-1.735v-.343h1.748l.013-5.593h-1v-.356h1l.013-3.521h-1.01V170.5h1.01l.013-5.771h-1.787v-.343h1.787l.065-15.241Z" transform="translate(45.94 -24.134)"/>
                                                            <path class="f" d="M259.52,201.815l5.4-3.025.44.763-5.4,3.013Z" transform="translate(76.449 -92.076)"/>
                                                            <path class="f" d="M2.265,6.917l.881-.007L3.193.719,2.312.726Z" transform="translate(343.603 109.053) rotate(62.35)"/>
                                                            <path class="f" d="M263.35,194.2l5.607-2.644.376.788-5.607,2.631Z" transform="translate(77.579 -75.299)"/>
                                                            <path class="f" d="M2.075,6.789l.88-.006L3,.585l-.88.006Z" transform="translate(348.564 118.963) rotate(66.39)"/>
                                                            <path class="f" d="M1.957,6.723l.879-.006.039-6.2L2,.522Z" transform="translate(350.726 124.12) rotate(68.4)"/>
                                                            <path class="f" d="M1.825,6.658,2.7,6.652,2.74.449,1.861.454Z" transform="matrix(0.335, 0.942, -0.942, 0.335, 352.772, 129.276)"/>
                                                            <path class="f" d="M1.684,6.6l.879,0L2.6.385l-.879,0Z" transform="translate(354.622 134.522) rotate(72.34)"/>
                                                            <path class="f" d="M1.512,6.528l.878,0L2.419.316l-.878,0Z" transform="translate(356.296 139.873) rotate(74.51)"/>
                                                            <path class="f" d="M1.345,6.471l.878,0L2.249.258l-.878,0Z" transform="matrix(0.234, 0.972, -0.972, 0.234, 357.723, 145.292)"/>
                                                            <path class="f" d="M278.706,164.54l.181.864-6.1,1.22-.168-.852Z" transform="translate(80.313 -12.598)"/>
                                                            <path class="f" d="M279.528,160.52l.142.864-6.125,1.03-.155-.864Z" transform="translate(80.541 -3.277)"/>
                                                            <path class="f" d="M.777,6.323l.877,0L1.669.107l-.877,0Z" transform="translate(360.914 161.809) rotate(82.47)"/>
                                                            <path class="f" d="M.569,6.285l.877,0L1.458.068.58.07Z" transform="translate(361.606 167.38) rotate(84.52)"/>
                                                            <path class="f" d="M.359,6.264h.879L1.244.037H.366Z" transform="matrix(0.06, 0.998, -0.998, 0.06, 361.065, 174.437)"/>
                                                            <path class="f" d="M.162,6.23h.877l0-6.216H.165Z" transform="matrix(0.027, 1, -1, 0.027, 362.335, 178.584)"/>
                                                            <path class="f" d="M281.379,140.221v.864l-6.229-.038.013-.877Z" transform="translate(81.06 43.92)"/>
                                                            <path class="f" d="M.022,1.121l6.216,0V.239L.023.244Z" transform="matrix(0.999, 0.04, -0.04, 0.999, 356.123, 189.072)"/>
                                                            <path class="f" d="M.049,1.336l6.215-.009V.45L.051.459Z" transform="translate(355.837 194.002) rotate(4.32)"/>
                                                            <path class="f" d="M280.708,128.114l-.091.877-6.177-.686.091-.864Z" transform="translate(80.85 72.196)"/>
                                                            <path class="f" d="M280.191,124.12l-.13.864-6.151-.89.129-.864Z" transform="translate(80.694 81.555)"/>
                                                            <path class="f" d="M279.531,120.123l-.168.864-6.112-1.106.155-.852Z" transform="translate(80.499 90.89)"/>
                                                            <path class="f" d="M.225,2.141l6.211-.024,0-.878L.228,1.264Z" transform="translate(352.939 213.709) rotate(12.36)"/>
                                                            <path class="f" d="M271.72,110.73l6.022,1.513-.22.839-6.022-1.513Z" transform="translate(79.983 109.347)"/>
                                                            <path class="f" d="M270.666,106.63l5.97,1.716-.259.839-5.957-1.729Z" transform="translate(79.664 118.455)"/>
                                                            <path class="f" d="M.409,2.651l6.2-.034,0-.879-6.2.034Z" transform="translate(348.946 228.234) rotate(18.38)"/>
                                                            <path class="f" d="M.474,2.792l6.2-.037.005-.879-6.2.037Z" transform="matrix(0.938, 0.348, -0.348, 0.938, 347.277, 232.96)"/>
                                                            <path class="f" d="M266.7,94.61l5.75,2.326-.337.8-5.75-2.314Z" transform="translate(78.467 145.182)"/>
                                                            <path class="f" d="M.61,3.038,6.807,3l.006-.88-6.2.043Z" transform="matrix(0.911, 0.412, -0.412, 0.911, 343.419, 242.347)"/>
                                                            <path class="f" d="M.677,3.136,6.87,3.091l.007-.88L.683,2.256Z" transform="translate(341.24 246.951) rotate(26.34)"/>
                                                            <path class="f" d="M.742,3.221l6.19-.048.007-.881L.749,2.34Z" transform="translate(338.906 251.488) rotate(28.38)"/>
                                                            <path class="f" d="M.8,3.287l6.187-.05L7,2.356l-6.187.05Z" transform="matrix(0.863, 0.506, -0.506, 0.863, 336.407, 255.934)"/>
                                                            <path class="f" d="M.86,3.336l6.183-.052L7.051,2.4.867,2.454Z" transform="matrix(0.845, 0.535, -0.535, 0.845, 333.735, 260.365)"/>
                                                            <path class="f" d="M.911,3.37l6.18-.053L7.1,2.434l-6.18.053Z" transform="translate(330.934 264.636) rotate(34.33)"/>
                                                            <path class="f" d="M252.9,68.74l5.012,3.623-.531.7-5.012-3.61Z" transform="translate(74.34 202.743)"/>
                                                            <path class="f" d="M1,3.389l6.172-.056.008-.883L1,2.506Z" transform="matrix(0.784, 0.621, -0.621, 0.784, 324.831, 273.023)"/>
                                                            <path class="f" d="M1.028,3.376,7.2,3.32,7.2,2.436l-6.168.056Z" transform="translate(321.561 277.08) rotate(40.37)"/>
                                                            <path class="f" d="M1.051,3.349l6.164-.057.008-.885-6.164.057Z" transform="matrix(0.739, 0.674, -0.674, 0.739, 318.151, 281.021)"/>
                                                            <path class="f" d="M1.066,3.307l6.16-.057.008-.885-6.16.057Z" transform="translate(314.589 284.873) rotate(44.37)"/>
                                                            <path class="f" d="M1.072,3.253,7.228,3.2l.008-.886L1.08,2.368Z" transform="translate(310.882 288.626) rotate(46.37)"/>
                                                            <path class="f" d="M1.069,3.189l6.152-.057.008-.886L1.077,2.3Z" transform="matrix(0.665, 0.747, -0.747, 0.665, 307.027, 292.27)"/>
                                                            <path class="f" d="M1.057,3.114l6.148-.056.008-.887-6.148.056Z" transform="translate(303.07 295.745) rotate(50.33)"/>
                                                            <path class="f" d="M230.312,44.5l3.794,4.843-.7.534L229.6,45.034Z" transform="translate(67.623 256.74)"/>
                                                            <path class="f" d="M227.042,41.97l3.626,4.958-.725.508-3.613-4.958Z" transform="translate(66.659 262.398)"/>
                                                            <path class="f" d="M.97,2.834l6.137-.053.008-.888L.978,1.946Z" transform="matrix(0.554, 0.833, -0.833, 0.554, 290.457, 305.443)"/>
                                                            <path class="f" d="M.926,2.727l6.133-.051.007-.889L.933,1.838Z" transform="translate(286.02 308.407) rotate(58.39)"/>
                                                            <path class="f" d="M.876,2.618l6.13-.049.007-.89-6.13.049Z" transform="translate(281.497 311.2) rotate(60.34)"/>
                                                            <path class="f" d="M.819,2.5l6.126-.047.007-.89L.826,1.612Z" transform="translate(276.841 313.868) rotate(62.38)"/>
                                                            <path class="f" d="M209.583,31.15l2.694,5.5-.8.381-2.694-5.5Z" transform="translate(61.482 286.552)"/>
                                                            <path class="f" d="M.693,2.266l6.12-.042.006-.891L.7,1.375Z" transform="translate(267.249 318.696) rotate(66.36)"/>
                                                            <path class="f" d="M.625,2.145l6.117-.039.006-.891L.631,1.254Z" transform="translate(262.356 320.858) rotate(68.36)"/>
                                                            <path class="f" d="M198.322,26.24l2.085,5.746-.842.305-2.085-5.758Z" transform="translate(58.149 297.538)"/>
                                                            <path class="f" d="M.485,1.9,6.6,1.87l0-.892L.49,1.011Z" transform="translate(252.264 324.697) rotate(72.37)"/>
                                                            <path class="f" d="M.416,1.783l6.11-.03,0-.892L.42.891Z" transform="translate(247.136 326.337) rotate(74.37)"/>
                                                            <path class="f" d="M.348,1.665l6.108-.026,0-.893L.352.772Z" transform="translate(241.964 327.797) rotate(76.36)"/>
                                                            <path class="f" d="M.283,1.547l6.106-.023,0-.893L.286.654Z" transform="matrix(0.202, 0.979, -0.979, 0.202, 236.749, 329.064)"/>
                                                            <path class="f" d="M.222,1.432l6.1-.019,0-.893L.225.539Z" transform="matrix(0.168, 0.986, -0.986, 0.168, 231.444, 330.171)"/>
                                                            <path class="f" d="M.164,1.317l6.1-.015,0-.893L.166.424Z" transform="translate(226.124 331.06) rotate(82.36)"/>
                                                            <path class="f" d="M.112,1.2l6.1-.011,0-.893L.113.309Z" transform="translate(220.776 331.767) rotate(84.38)"/>
                                                            <path class="f" d="M.066,1.092l6.1-.007V.191L.067.2Z" transform="translate(215.419 332.283) rotate(86.38)"/>
                                                            <path class="f" d="M.028.988l6.1,0V.09l-6.1,0Z" transform="matrix(0.03, 1, -1, 0.03, 210.314, 332.646)"/>
                                                            <path class="f" d="M.019,6.107H.912V.006H.02Z" transform="matrix(1, 0.006, -0.006, 1, 203.742, 332.695)"/>
                                                            <path class="f" d="M.12,6.146h.894l0-6.107H.125Z" transform="translate(198.464 332.237) rotate(2.291)"/>
                                                            <path class="f" d="M.23,6.185h.893l.009-6.1H.239Z" transform="translate(192.957 332.178) rotate(4.35)"/>
                                                            <path class="f" d="M.339,6.235l.893,0L1.245.13l-.893,0Z" transform="translate(187.595 331.619) rotate(6.37)"/>
                                                            <path class="f" d="M.448,6.29l.893,0,.016-6.1-.893,0Z" transform="translate(182.257 330.885) rotate(8.36)"/>
                                                            <path class="f" d="M138.254,21.2l-1.127,6-.868-.153,1.114-6.013Z" transform="translate(40.09 309.257)"/>
                                                            <path class="f" d="M134.291,22.018l-1.334,5.974-.868-.191,1.334-5.962Z" transform="translate(38.86 307.43)"/>
                                                            <path class="f" d="M.787,6.485l.893,0L1.707.372l-.893,0Z" transform="matrix(0.969, 0.248, -0.248, 0.969, 166.436, 327.498)"/>
                                                            <path class="f" d="M124.715,30.012l-.855-.242,1.748-5.86.855.242Z" transform="translate(36.432 302.779)"/>
                                                            <path class="f" d="M115.405,16.7a1.416,1.416,0,0,0-1.952.306,1.357,1.357,0,0,0,.31,1.917,1.416,1.416,0,0,0,1.953-.3,1.354,1.354,0,0,0,.25-1.023A1.37,1.37,0,0,0,115.405,16.7Z" transform="translate(33.284 323.111)"/>
                                                            <path class="f" d="M115.056,14.85a3.438,3.438,0,0,0-3.411,2.872,3.391,3.391,0,0,0,2.361,3.754,3.483,3.483,0,0,0,4.144-1.707,3.356,3.356,0,0,0-1.074-4.284,3.489,3.489,0,0,0-2.02-.636Zm0,6.432a3.091,3.091,0,0,1-2.964-2.086,3.007,3.007,0,0,1,1.117-3.408,3.142,3.142,0,0,1,3.647,0,2.97,2.97,0,0,1,1.295,1.97,2.883,2.883,0,0,1-.544,2.263,3.1,3.1,0,0,1-2.551,1.258Z" transform="translate(32.817 322.67)"/>
                                                            <path class="f" d="M244.1,40.3a1.415,1.415,0,0,0-1.949.32,1.357,1.357,0,0,0,.323,1.914,1.416,1.416,0,0,0,1.95-.314,1.353,1.353,0,0,0,.244-1.026,1.37,1.37,0,0,0-.568-.894Z" transform="translate(71.25 269.5)"/>
                                                            <path class="f" d="M243.79,38.43a3.465,3.465,0,0,0-3.3,2.358,3.372,3.372,0,0,0,1.265,3.808,3.5,3.5,0,0,0,4.843-.775,3.342,3.342,0,0,0,.281-3.542,3.466,3.466,0,0,0-3.091-1.848Zm0,6.445a3.09,3.09,0,0,1-2.938-2.1,3.007,3.007,0,0,1,1.118-3.393,3.142,3.142,0,0,1,3.633-.013,2.97,2.97,0,0,1,1.295,1.97,2.882,2.882,0,0,1-.544,2.263A3.1,3.1,0,0,1,243.79,44.875Z" transform="translate(70.786 269.09)"/>
                                                            <path class="f" d="M287.869,163.868a1.42,1.42,0,0,0-1.431-.2,1.361,1.361,0,0,0-.2,2.421,1.415,1.415,0,0,0,1.885-.356,1.356,1.356,0,0,0-.254-1.868Z" transform="translate(84.139 -11.036)"/>
                                                            <path class="f" d="M75.877,207.614a1.42,1.42,0,0,0-1.556-.064,1.364,1.364,0,0,0-.652,1.388,1.384,1.384,0,0,0,1.06,1.119,1.412,1.412,0,0,0,1.458-.537,1.341,1.341,0,0,0,.249-1.017A1.357,1.357,0,0,0,75.877,207.614Z" transform="translate(21.622 -110.484)"/>
                                                            <path class="f" d="M64.949,191.258a1.42,1.42,0,0,0-1.431-.2,1.362,1.362,0,0,0-.2,2.421,1.415,1.415,0,0,0,1.885-.356A1.356,1.356,0,0,0,64.949,191.258Z" transform="translate(18.383 -73.243)"/>
                                                            <path class="f" d="M58.3,176.624a1.42,1.42,0,0,0-1.556-.064,1.364,1.364,0,0,0-.652,1.388,1.383,1.383,0,0,0,1.06,1.119,1.412,1.412,0,0,0,1.458-.537,1.356,1.356,0,0,0-.311-1.907Z" transform="translate(16.436 -40.101)"/>
                                                            <path class="f" d="M53.785,159.136a1.429,1.429,0,0,0-1.955.318,1.357,1.357,0,0,0,.326,1.914,1.415,1.415,0,0,0,1.95-.317,1.357,1.357,0,0,0-.32-1.915Z" transform="translate(15.108 -0.406)"/>
                                                            <path class="f" d="M287.514,161.925a3.465,3.465,0,0,0-3.317,2.359,3.372,3.372,0,0,0,1.284,3.818,3.524,3.524,0,0,0,3.856.13,3.384,3.384,0,0,0,1.6-3.448,3.465,3.465,0,0,0-3.419-2.86Zm0,6.445a3.082,3.082,0,0,1-1.8-.572,3.007,3.007,0,0,1-1.137-3.4,3.111,3.111,0,0,1,5.7-.443,3,3,0,0,1-.233,3.157,3.153,3.153,0,0,1-2.538,1.258Z" transform="translate(83.679 -11.394)"/>
                                                            <path class="f" d="M288.274,118.123a1.405,1.405,0,0,0-1.036-.245,1.39,1.39,0,0,0-.907.55,1.352,1.352,0,0,0-.065,1.527,1.408,1.408,0,0,0,1.414.64,1.389,1.389,0,0,0,1.14-1.041,1.36,1.36,0,0,0-.547-1.431Z" transform="translate(84.278 92.75)"/>
                                                            <path class="f" d="M273.4,75.306a1.416,1.416,0,0,0-1.952.306,1.357,1.357,0,0,0,.31,1.917,1.416,1.416,0,0,0,1.953-.3,1.353,1.353,0,0,0,.25-1.023A1.369,1.369,0,0,0,273.4,75.306Z" transform="translate(79.888 189.998)"/>
                                                            <path class="f" d="M204.93,17.425a1.415,1.415,0,0,0-1.885.356,1.356,1.356,0,0,0,.254,1.868,1.429,1.429,0,0,0,1.955-.318,1.328,1.328,0,0,0,.249-1.021,1.345,1.345,0,0,0-.572-.886Z" transform="translate(59.712 321.404)"/>
                                                            <path class="f" d="M160.213,8.953a1.406,1.406,0,0,0-1.036-.245,1.389,1.389,0,0,0-.906.55,1.354,1.354,0,0,0-.25,1.023,1.369,1.369,0,0,0,.561.9,1.415,1.415,0,0,0,1.885-.356A1.356,1.356,0,0,0,160.213,8.953Z" transform="translate(46.504 340.744)"/>
                                                            <rect class="f" width="0.699" height="14.212" transform="translate(205.384 332.626)"/>
                                                            <path class="f" d="M2.6,15.58l.7,0L3.383.938l-.7,0Z" transform="matrix(0.94, 0.341, -0.341, 0.94, 151.577, 321.898)"/>
                                                            <path class="f" d="M258.75,206.776l11.707-6.5.35.6L259.1,207.36Z" transform="translate(76.222 -98.765)"/>
                                                            <path class="f" d="M273.05,164.26l13.455-2.25.117.674-13.455,2.237Z" transform="translate(80.44 -7.678)"/>
                                                            <path class="f" d="M273.589,119.37l13.429,2.3-.117.674-13.442-2.3Z" transform="translate(80.561 89.101)"/>
                                                            <path class="f" d="M1.418,5.87l13.69-.109.006-.69L1.424,5.18Z" transform="translate(337.967 252.108) rotate(29.96)"/>
                                                            <path class="f" d="M233.61,43.785l.531-.445,9.117,10.513-.544.432Z" transform="translate(68.806 253.807)"/>
                                                            <path class="f" d="M198.61,21.1l.66-.229,4.843,13.055-.66.242Z" transform="translate(58.482 302.489)"/>
                                                            <g class="o" transform="translate(65.371 49.22)">
                                                                <path class="f" d="M188.4,304.721C112.3,304.616,50.646,244.077,50.56,169.38c0-2.085,0-4.169.142-6.229s.272-4.462.479-6.674l.7.076c-.22,2.174-.376,4.373-.479,6.585s-.142,4.144-.142,6.241c-.1,62.466,43.524,116.82,105.413,131.357S282.52,286.187,311.24,230.445,325.923,106.9,277.318,66.577a139.4,139.4,0,0,0-170.258-5.5c-.155-.178-.324-.343-.492-.508a139.942,139.942,0,0,1,162.366-1.04c48.611,34.3,69.114,95.472,50.743,151.4S248.262,304.755,188.4,304.721Z" transform="translate(-50.56 -34.09)"/>
                                                            </g>
                                                            <text class="h" transform="matrix(0.933, 0.361, 0.361, -0.933, 134.826, 342.062)">
                                                                <tspan x="0" y="0">06 {.00} -2</tspan>
                                                            </text>
                                                            <text class="p" transform="matrix(-0.158, -0.987, -0.987, 0.158, 379.775, 163.291)">
                                                                <tspan x="0" y="0">06 {.00} -2</tspan>
                                                            </text>
                                                            <text class="q" transform="matrix(0.189, -0.982, -0.982, -0.189, 377.295, 222.19)">
                                                                <tspan x="0" y="0">06 {.00} -2</tspan>
                                                            </text>
                                                            <text class="r" transform="matrix(0.778, -0.628, -0.628, -0.778, 313.437, 324.548)">
                                                                <tspan x="0" y="0">06 {.00} -2</tspan>
                                                            </text>
                                                            <path class="s" d="M209.158,311.649l-2.719-7.474c62.06-23.1,98.444-86.431,86.479-150.517S224.056,43.027,157.683,43.027h0V35.12h0C228,35.081,288.3,84.4,300.938,152.306S274.95,287.274,209.158,311.649Z" transform="translate(46.367 6.892)"/>
                                                            <path class="t" d="M263.4,254.592c-1.1-43.118-19.956-78.253-55.58-101.07,1.554-3.445,6.475-10.3,8.21-12.712,37.723,24.152,63.894,66.024,63.894,113.54C276.35,254.477,265.265,254.579,263.4,254.592Z" transform="translate(61.199 -70.4)"/>
                                                            <path class="u" d="M124.338,34.356c23.245,7.818,35.987,9.063,59.776,6.648.609,3.813.971,5.593,1.489,9.534C155.637,54.466,126.1,46.6,120.66,43.1,121.929,39.657,122.926,37.89,124.338,34.356Z" transform="translate(35.488 267.901)"/>
                                                            <path class="v" d="M162.8,140.909a4.156,4.156,0,0,0-2.605-3.849,4.293,4.293,0,0,0-4.619.893,4.1,4.1,0,0,0-.924,4.531,4.248,4.248,0,0,0,8.148-1.575Z" transform="translate(45.42 44.312)"/>
                                                            <g class="o" transform="translate(154.763 136.18)">
                                                                <path class="f" d="M195.942,191.719a50.109,50.109,0,0,1-26.7,7.627,50.887,50.887,0,0,1-6.729-.446h-.523a49.834,49.834,0,0,1-30.212-16.233l-.207-.241a47.95,47.95,0,0,1-11.953-29.949c0-.153,0-.292,0-.432a1.162,1.162,0,0,0,.311,0c0,.153,0,.292,0,.432a47.621,47.621,0,0,0,11.849,29.758l.207.242a49.881,49.881,0,0,0,63.687,9.038,47.955,47.955,0,0,0,19.557-58.068c-8.336-21.459-30.882-34.218-53.977-30.545h-.311a49.449,49.449,0,0,0-28.969,15.94l-.207.229a47.606,47.606,0,0,0-11.862,28.6c0,.14,0,.292,0,.432a1.16,1.16,0,0,0-.311,0v-.432a47.959,47.959,0,0,1,11.94-28.766l.207-.216a49.851,49.851,0,0,1,29.15-16.055h.3a50.274,50.274,0,0,1,32.323,5.657l.285.152a48.252,48.252,0,0,1,2.15,83.274Z" transform="translate(-119.59 -102)"/>
                                                            </g>
                                                            <g class="o" transform="translate(176.324 158.057)">
                                                                <path class="f" d="M163.577,119.15a26.839,26.839,0,1,0,27.337,26.834,27.089,27.089,0,0,0-27.337-26.834Zm0,53.491a26.7,26.7,0,1,1,27.195-26.694A26.948,26.948,0,0,1,163.577,172.641Z" transform="translate(-136.24 -119.15)"/>
                                                            </g>
                                                            <path class="e" d="M168.3,193.673c-24.971.007-45.218-19.86-45.221-44.372s20.245-44.385,45.216-44.381,45.2,19.873,45.2,44.385c0,24.492-20.227,44.356-45.186,44.368Zm0-76.372c-17.994,0-32.582,14.319-32.582,31.983s14.587,31.983,32.582,31.983,32.582-14.319,32.582-31.983S186.3,117.294,168.3,117.3Z" transform="translate(36.202 36.141)"/>
                                                            <path class="f" d="M136.67,149.258a26.373,26.373,0,0,0,5.465,16.067l-.479.343a26.952,26.952,0,0,1-5.24-20.492,27.259,27.259,0,0,1,11.21-18.037l.324.483a26.62,26.62,0,0,0-11.279,21.635Z" transform="translate(40.043 35.9)"/>
                                                            <path class="f" d="M130.819,143.36l7.55,1.119-.039.292-7.55-1.119Z" transform="translate(38.474 36.179)"/>
                                                            <g class="w" transform="translate(193.871 174.607)">
                                                                <path class="f" d="M158.651,132.2a.17.17,0,0,1-.123-.039.164.164,0,0,1-.058-.113.179.179,0,0,1,.155-.178.17.17,0,0,1,.123.039.164.164,0,0,1,.018.234.17.17,0,0,1-.115.057Z" transform="translate(-147.23 -111.251)"/>
                                                                <path class="f" d="M157.2,132.222a.169.169,0,0,1-.112-.066.163.163,0,0,1-.03-.125.152.152,0,0,1,.059-.109.178.178,0,0,1,.234.028.151.151,0,0,1,.031.12.164.164,0,0,1-.058.113A.17.17,0,0,1,157.2,132.222Z" transform="translate(-147.646 -111.298)"/>
                                                                <path class="f" d="M155.788,132.49a.165.165,0,0,1-.117-.2.169.169,0,0,1,.208-.115.165.165,0,0,1,.117.2A.169.169,0,0,1,155.788,132.49Z" transform="translate(-148.057 -111.922)"/>
                                                                <path class="f" d="M154.431,132.983a.176.176,0,0,1-.078-.229.2.2,0,0,1,.233-.076.169.169,0,0,1,.078.229A.175.175,0,0,1,154.431,132.983Z" transform="translate(-148.449 -113.064)"/>
                                                                <path class="f" d="M153.2,133.726a.164.164,0,0,1,.017-.3.171.171,0,0,1,.177.031.163.163,0,0,1,0,.229.157.157,0,0,1-.194.038Z" transform="translate(-148.81 -114.76)"/>
                                                                <path class="f" d="M152.1,134.593a.151.151,0,0,1,0-.229.171.171,0,0,1,.211.021.163.163,0,0,1,.022.207A.184.184,0,0,1,152.1,134.593Z" transform="translate(-149.124 -116.822)"/>
                                                                <path class="f" d="M151.433,135.691a.171.171,0,0,1-.233,0,.163.163,0,0,1-.032-.174.17.17,0,0,1,.3-.017.176.176,0,0,1-.039.191Z" transform="translate(-149.387 -119.292)"/>
                                                                <path class="f" d="M150.715,136.988a.172.172,0,0,1-.227-.083.167.167,0,0,1,.084-.222.172.172,0,0,1,.227.083.167.167,0,0,1-.084.222Z" transform="translate(-149.589 -122.153)"/>
                                                                <path class="f" d="M150.227,138.32a.169.169,0,0,1-.2-.117.165.165,0,0,1,.108-.2.171.171,0,0,1,.131.02.165.165,0,0,1,.076.107.15.15,0,0,1-.016.12.155.155,0,0,1-.1.071Z" transform="translate(-149.722 -125.163)"/>
                                                                <path class="f" d="M150.127,139.55a.163.163,0,0,1-.04.121.169.169,0,0,1-.115.057.18.18,0,0,1-.181-.153.168.168,0,0,1,.337,0Z" transform="translate(-149.79 -128.363)"/>
                                                                <path class="f" d="M149.963,141.161a.156.156,0,0,1-.111-.058.15.15,0,0,1-.031-.12.164.164,0,0,1,.058-.113.17.17,0,0,1,.123-.039.167.167,0,1,1-.039.33Z" transform="translate(-149.782 -131.601)"/>
                                                                <path class="f" d="M150.208,142.549a.165.165,0,0,1-.117-.2.182.182,0,0,1,.22-.114.177.177,0,0,1,.1.216A.169.169,0,0,1,150.208,142.549Z" transform="translate(-149.703 -134.769)"/>
                                                                <path class="f" d="M150.7,143.87a.166.166,0,0,1-.125-.137.164.164,0,0,1,.081-.166.171.171,0,0,1,.187.01.154.154,0,0,1,.089.091.15.15,0,0,1-.011.125.154.154,0,0,1-.092.087A.158.158,0,0,1,150.7,143.87Z" transform="translate(-149.559 -137.781)"/>
                                                                <path class="f" d="M151.4,145.085a.164.164,0,0,1,.017-.3.171.171,0,0,1,.177.031.176.176,0,0,1,0,.242.171.171,0,0,1-.194.025Z" transform="translate(-149.341 -140.559)"/>
                                                                <path class="f" d="M152.3,146.093a.151.151,0,0,1,0-.229.171.171,0,0,1,.211.021.163.163,0,0,1,.022.207A.184.184,0,0,1,152.3,146.093Z" transform="translate(-149.065 -142.94)"/>
                                                                <path class="f" d="M153.625,146.978a.171.171,0,0,1-.233,0,.151.151,0,0,1,0-.229.157.157,0,0,1,.22,0A.175.175,0,0,1,153.625,146.978Z" transform="translate(-148.743 -144.93)"/>
                                                                <path class="f" d="M154.834,147.727a.158.158,0,0,1-.131.006.154.154,0,0,1-.089-.095.164.164,0,0,1,.078-.216.172.172,0,0,1,.227.083A.167.167,0,0,1,154.834,147.727Z" transform="translate(-148.372 -146.544)"/>
                                                                <path class="f" d="M156.148,148.2a.169.169,0,0,1-.207-.114.178.178,0,0,1,.117-.2.171.171,0,0,1,.131.02.165.165,0,0,1,.076.107.138.138,0,0,1-.01.124A.143.143,0,0,1,156.148,148.2Z" transform="translate(-147.977 -147.6)"/>
                                                                <path class="f" d="M157.522,148.421a.17.17,0,0,1-.123-.039.164.164,0,0,1-.058-.113.151.151,0,0,1,.035-.125.157.157,0,0,1,.12-.053.171.171,0,0,1,.123.039.164.164,0,0,1,.058.113.179.179,0,0,1-.155.178Z" transform="translate(-147.563 -148.09)"/>
                                                                <path class="f" d="M158.9,148.4a.156.156,0,0,1-.111-.058.15.15,0,0,1-.031-.12.164.164,0,0,1,.058-.113.17.17,0,0,1,.123-.039.156.156,0,0,1,.111.058.15.15,0,0,1,.031.12.164.164,0,0,1-.058.113A.17.17,0,0,1,158.9,148.4Z" transform="translate(-147.145 -148.044)"/>
                                                                <path class="f" d="M160.268,148.119a.165.165,0,0,1-.117-.2.169.169,0,0,1,.208-.115.165.165,0,0,1,.117.2A.169.169,0,0,1,160.268,148.119Z" transform="translate(-146.735 -147.42)"/>
                                                                <path class="f" d="M161.561,147.61a.176.176,0,0,1-.078-.229.183.183,0,0,1,.233-.076.164.164,0,0,1,.078.216.183.183,0,0,1-.233.089Z" transform="translate(-146.345 -146.275)"/>
                                                                <path class="f" d="M162.76,146.883a.164.164,0,0,1,.017-.3.171.171,0,0,1,.177.031.163.163,0,0,1,0,.229.144.144,0,0,1-.194.038Z" transform="translate(-145.99 -144.645)"/>
                                                                <path class="f" d="M163.8,145.909a.163.163,0,0,1,0-.229.184.184,0,0,1,.246,0,.163.163,0,0,1,0,.229A.184.184,0,0,1,163.8,145.909Z" transform="translate(-145.671 -142.502)"/>
                                                                <path class="f" d="M164.915,144.765a.171.171,0,0,1-.233,0,.151.151,0,0,1,0-.229.171.171,0,0,1,.233.051.164.164,0,0,1-.052.229Z" transform="translate(-145.413 -139.934)"/>
                                                                <path class="f" d="M165.574,143.609a.158.158,0,0,1-.131.006.154.154,0,0,1-.089-.095.164.164,0,0,1,.078-.216.158.158,0,0,1,.131-.006.154.154,0,0,1,.089.095.164.164,0,0,1-.078.216Z" transform="translate(-145.204 -137.189)"/>
                                                                <path class="f" d="M166.049,142.333a.181.181,0,0,1-.207-.127.165.165,0,0,1,.117-.2.171.171,0,0,1,.131.02.173.173,0,0,1-.041.311Z" transform="translate(-145.057 -134.261)"/>
                                                                <path class="f" d="M166.2,140.88a.171.171,0,0,1-.123-.039.164.164,0,0,1-.018-.234.169.169,0,0,1,.115-.057.18.18,0,0,1,.181.153.163.163,0,0,1-.04.121A.17.17,0,0,1,166.2,140.88Z" transform="translate(-145.003 -130.964)"/>
                                                                <path class="f" d="M166.184,139.132a.156.156,0,0,1,.111.058.151.151,0,0,1,.031.12.164.164,0,0,1-.058.113.17.17,0,0,1-.123.039.191.191,0,0,1-.155-.191.165.165,0,0,1,.067-.11A.171.171,0,0,1,166.184,139.132Z" transform="translate(-145.011 -127.742)"/>
                                                                <path class="f" d="M165.846,138.066a.165.165,0,0,1-.108-.2.169.169,0,0,1,.2-.117.177.177,0,0,1,.117.216A.169.169,0,0,1,165.846,138.066Z" transform="translate(-145.087 -124.591)"/>
                                                                <path class="f" d="M165.305,136.716a.163.163,0,0,1-.051-.2.169.169,0,0,1,.193-.089.154.154,0,0,1,.089.091.15.15,0,0,1-.011.125.17.17,0,0,1-.22.076Z" transform="translate(-145.233 -121.563)"/>
                                                                <path class="f" d="M164.56,135.527a.164.164,0,0,1,.017-.3.171.171,0,0,1,.177.031.176.176,0,0,1,0,.242A.184.184,0,0,1,164.56,135.527Z" transform="translate(-145.459 -118.849)"/>
                                                                <path class="f" d="M163.6,134.425a.163.163,0,0,1,0-.242.184.184,0,0,1,.233,0,.163.163,0,0,1,0,.229A.184.184,0,0,1,163.6,134.425Z" transform="translate(-145.731 -116.399)"/>
                                                                <path class="f" d="M162.724,133.5a.171.171,0,0,1-.233,0,.163.163,0,0,1,0-.229.171.171,0,0,1,.233,0A.163.163,0,0,1,162.724,133.5Z" transform="translate(-146.057 -114.316)"/>
                                                                <path class="f" d="M161.456,132.872a.2.2,0,0,1-.233-.089.164.164,0,0,1,.091-.216.17.17,0,0,1,.22.076.176.176,0,0,1-.078.229Z" transform="translate(-146.421 -112.8)"/>
                                                                <path class="f" d="M160.049,132.421a.182.182,0,0,1-.207-.127.165.165,0,0,1,.117-.2.181.181,0,0,1,.207.127.177.177,0,0,1-.117.2Z" transform="translate(-146.827 -111.751)"/>
                                                            </g>
                                                            <path class="x" d="M157.6,273.084l84.614-132.951,55.321-.2Z" transform="translate(46.385 -87.774)"/>
                                                            <path class="x" d="M157.6,311.334v0Z" transform="translate(46.385 -126.023)"/>
                                                        </g>
                                                    </g>
                                                </g>

                                                <a  href="#insight">
                                                    <g  transform="translate(14.142 19)">
                                                        <g transform="translate(1133.622 455)">
                                                            <g class="af" transform="matrix(1, 0, 0, 1, -285.31, -66.7)">
                                                                <rect class="y" width="60.756" height="24" rx="4" transform="translate(285.31 66.7)"/>
                                                            </g>
                                                        </g>

                                                        <text class="z" transform="translate(1163.858 473)">

                                                            <tspan x="-22.441" y="0">

                                                                Insight

                                                            </tspan>
                                                        </text>
                                                    </g>
                                                </a>

                                                <a href="#podcast"><g transform="translate(34 93)">
                                                        <g transform="translate(1140.835 455)">
                                                            <g class="ae" transform="matrix(1, 0, 0, 1, -312.38, -140.7)">
                                                                <rect class="y" width="66.614" height="24" rx="4" transform="translate(312.38 140.7)"/>
                                                            </g>
                                                        </g>
                                                        <text class="z" transform="translate(1174 473)">
                                                            <tspan x="-25.737" y="0">Podcast</tspan>
                                                        </text>
                                                    </g>
                                                </a>
                                                <a href="#videos"><g transform="translate(-6.623 234)">
                                                        <g transform="translate(1121.583 453)">
                                                            <g class="ad" transform="matrix(1, 0, 0, 1, -252.51, -279.7)">
                                                                <rect class="y" width="59.246" height="24" rx="4" transform="translate(252.51 279.7)"/>
                                                            </g>
                                                        </g>
                                                        <text class="z" transform="translate(1151.623 471)">
                                                            <tspan x="-22.39" y="0">Videos</tspan>
                                                        </text>
                                                    </g></a>
                                                <a href="#story"> <g transform="translate(-91.714 246)">
                                                        <g transform="translate(1113.583 455)">
                                                            <g class="ac" transform="matrix(1, 0, 0, 1, -159.41, -293.7)">
                                                                <rect class="y" width="59.429" height="24" rx="4" transform="translate(159.41 293.7)"/>
                                                            </g>
                                                        </g>
                                                        <text class="z" transform="translate(1143.714 473)">
                                                            <tspan x="-16.915" y="0">Story</tspan>
                                                        </text>
                                                    </g></a>
                                                <a href="#archive"><g transform="translate(24 167)">
                                                        <g transform="translate(38.541)">
                                                            <g class="ab" transform="matrix(1, 0, 0, 1, 799.91, 240.3)">
                                                                <rect class="y" width="62.083" height="24" rx="4" transform="translate(304.09 214.7)"/>
                                                            </g>
                                                        </g>
                                                        <text class="z" transform="translate(1174 473)">
                                                            <tspan x="-24.485" y="0">Archive</tspan>
                                                        </text>
                                                    </g></a>
                                                <a href="#overview"> <g transform="translate(-235 10)">
                                                        <g transform="translate(10.506)">
                                                            <g class="aa" transform="matrix(1, 0, 0, 1, 1086.95, 397.3)">
                                                                <rect class="y" width="68.989" height="24" rx="4" transform="translate(42.05 57.7)"/>
                                                            </g>
                                                        </g>
                                                        <text class="z" transform="translate(1174 473)">
                                                            <tspan x="-30.527" y="0">Overview</tspan>
                                                        </text>
                                                    </g></a>
                                            </g>
                                        </svg></div>

                                </div>
                            </div>
                            <div class="rs-container">
                                <div class="rs-inner">
                                    <div class="podcast-archive">
                                        <div class="gallery-in gap black-tint" hidden>
                                            <span class="container-title">Gallery</span>
                                            <?php get_template_part("widgets/dashboard", "gallery"); ?>
                                        </div>
                                        <div class="podcast-container black-tint gap">
                                            <span class="container-title">Podcast</span>
                                            <div class="podcast podcast-vertical-scroll">
                                                <?php get_template_part("widgets/dashboard", "podcast"); ?>
                                            </div>
                                        </div>
                                        <div class="archive gap black-tint">
                                            <div class="archive-container">
                                                <span class="container-title">Archive</span>
                                                <?php get_template_part("widgets/dashboard", "archive"); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vsl-main">
                            <div class="video-slider gap black-tint">
                                <span class="container-title">Story</span>
                                <?php get_template_part("widgets/dashboard", "story"); ?>
                                <div id="story"></div>
                            </div>
                            <div class="video-slider gap black-tint" id="video">
                                <span class="container-title">Videos</span>
                                <?php get_template_part("widgets/dashboard", "video"); ?>
                            </div>
                            <div class="video-slider gap black-tint" hidden>
                                <span class="container-title">Live</span>
                                <?php get_template_part("widgets/dashboard", "live"); ?>
                                <div id="webinar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery  -->
    <script src="<?php echo $template_dir; ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo $template_dir; ?>/assets/js/popper.min.js"></script>

    <!-- Mouse wheel js -->
    <script type="text/javascript" src="<?php echo $template_dir; ?>/assets/pages/jquery.mousewheel.min.js"></script>

    <!-- Popper for Bootstrap -->
    <script src="<?php echo $template_dir; ?>/assets/js/bootstrap.min.js"></script>

    <!--Echart Chart-->
    <script type="text/javascript" src="<?php echo $template_dir; ?>/plugins/echart/echarts.js"></script>
    <script type="text/javascript" src="<?php echo $template_dir; ?>/plugins/echart/world.js"></script>

    <!-- Echart init -->
    <script src="<?php echo $template_dir; ?>/assets/pages/jquery.echart.init.js"></script>

    <!-- Jquery ui -->
    <script src="<?php echo $template_dir; ?>/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script>
        /* Minimize modal logic */
        var _init = $.ui.dialog.prototype._init;
        $.ui.dialog.prototype._init = function() {
            //Run the original initialization code
            _init.apply(this, arguments);

            //set some variables for use later
            var dialog_element = this;
            var dialog_id = this.uiDialogTitlebar.next().attr('id');

            //append our minimize icon
            this.uiDialogTitlebar.append('<a href="#" id="' + dialog_id +
                '-minbutton" class="ui-dialog-titlebar-minimize ui-corner-all">' +
                '<span class="ui-icon ui-icon-minusthick"></span></a>');

            //append our minimized state
            $('#dialog_window_minimized_container').append(
                '<div class="dialog_window_minimized ui-widget ui-state-default ui-corner-all" id="' +
                dialog_id + '_minimized">' + this.uiDialogTitlebar.find('.ui-dialog-title').text() +
                '<span class="ui-icon ui-icon-newwin"></div>');

            //create a hover event for the minimize button so that it looks good
            $('#' + dialog_id + '-minbutton').hover(function() {
                $(this).addClass('ui-state-hover');
            }, function() {
                $(this).removeClass('ui-state-hover');
            }).click(function() {
                //add a click event as well to do our "minimalization" of the window
                dialog_element.close();

                // $('.model-container').hide();
                $('#' + dialog_id + '_minimized').show();
            });

            //create another click event that maximizes our minimized window
            $('#' + dialog_id + '_minimized').click(function() {
                $(this).hide();
                // $('.model-container').show();
                dialog_element.open();
            });
        };
    </script>
    <!-- App js -->
    <script src="<?php echo $template_dir; ?>/assets/js/hud-ui.js"></script>