<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="<?php echo get_template_directory_uri() ?>/src/jquery.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/src/simplebar.css" />
    <script src="<?php echo get_template_directory_uri() ?>/src/simplebar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <title>Twimbit-cigna-Dashboard</title>
    <style scoped>
        * {
            box-sizing: border-box;
            -webkit-user-drag: none;
            -webkit-touch-callout: none;
            -webkit-tap-highlight-color: transparent;
        }

        body {
            margin: 0;
            padding: 0;
            border: 0;
            background: linear-gradient(to right, rgba(23, 45, 66, 1) 43%, rgba(70, 136, 180, 1) 100%);
            color: #fff;
        }

        html,
        body {
            overflow: auto;
            height: 100%;
        }

        .wrapper {
            /* display: grid;
            grid-template-columns: 20% 20% 20% 13% 27%;
            grid-template-areas: 'intro key share noty analy'
                'timeline key radar noty analy'
                'timeline key video video video'; */
            position: absolute;
            top: 55px;
            bottom: 0px;
            left: 0px;
            right: 0px;
        }

        .wrapper>div {
            /* border: 1px solid grey; */
        }

        .key-map-revenue {
            grid-area: key;
            position: absolute;
            left: 24%;
            margin-left: 3px;
            bottom: 0px;
            top: 0px;
            display: flex;
            flex-direction: column;
            width: 25%;

        }

        .key-map-revenue>div {
            flex: 1;
        }

        .video-story {
            grid-area: video;
            position: absolute;
            left: 50%;
            top: 75%;
            bottom: 0px;
            right: 0px;
            margin-bottom: 10px;
        }

        .intro {
            grid-area: intro;
            width: 23%;
            height: 39%;
            display: inline-block;
            margin-left: 10px;
            border: 1px solid #1c9f9f;
            position: absolute;
            background: #000000a3;
        }

        .share-icons {
            /* grid-area: share; */
            position: absolute;
            left: 50%;
            width: 22%;
            display: inline-block;
        }

        .notifications {
            width: 12%;
            display: inline-block;
            left: 64%;
            grid-area: noty;
            position: relative;
        }

        .analytics {
            grid-area: analy;
            position: absolute;
            left: 72%;
            right: 0px;
            top: 0px;
            bottom: 26%;
            display: inline-block;
        }

        .radar {
            grid-area: radar;
            position: absolute;
            left: 50%;
            top: 49%;
            width: 20%;
        }

        .timeline {
            grid-area: timeline;
            background: #000000a3;
            position: relative;
            grid-area: timeline;
            position: absolute;
            top: 40%;
            bottom: 0px;
            width: 23%;
            /* height: 100%; */
            margin-left: 10px;
            border: 1px solid #1c9f9f;
        }

        .revenue {
            position: relative;
            background: #000000a3;
            margin-bottom: 10px;
            border: 1px solid #1c9f9f;
        }

        .area-graph {
            position: relative;
            border-bottom-left-radius: 8px;
            margin-right: 10px;
            border-top: 3px solid #f16c70;
            border-bottom-right-radius: 8px;
            background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.09) 63%, rgba(0, 0, 0, 0.64) 100%);
        }
        }
    </style>
</head>

<body>
    <div class="heading">
        <h3>Uniphore Terminal - Cigna</h3>
    </div>
    <div class="wrapper">
        <div class="intro"><?php locate_template(array('components/intro.php'), true); ?></div>
        <div class="key-map-revenue">
            <div class="key-user">
                <?php locate_template(array('components/keyUser.php'), true); ?>
            </div>
            <div class="world-map">
                <?php locate_template(array('components/worldMap.php'), true); ?>
            </div>
            <div class="revenue">
                <?php locate_template(array('components/revenue.php'), true); ?>
            </div>
        </div>
        <div class="share-icons">
            <?php locate_template(array('components/shareIcons.php'), true); ?>
        </div>
        <div class="notifications">notification</div>
        <div class="analytics">
            <div class="area-graph"><?php locate_template(array('components/areaGraph.php'), true); ?></div>
            <div class="bar-graphs">
                <div class="graph-1">bar-1</div>
                <div class="graph-2">bar-2</div>
                <div class="graph-3">bar-3</div>
            </div>
            <div class="spider-doughnut">
                <div class="spider">spider</div>
                <div class="dhoughnut">doughnut</div>
            </div>
            <div class="podcast">podcast</div>
            <div class="archive">archive</div>
        </div>
        <div class="timeline"><?php locate_template(array('components/timeline.php'), true); ?></div>
        <div class="radar">radar</div>
        <div class="video-story">video story</div>
    </div>


    <script src="<?php echo get_template_directory_uri() ?>/src/uniphore.js"></script>
</body>

</html>