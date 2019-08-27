<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        }

        html,
        body {
            overflow: auto;
        }

        .wrapper {
            display: grid;
            grid-template-columns: 20% 20% 20% 13% 27%;
            grid-template-areas: 'intro key share noty analy'
                'timeline key radar noty analy'
                'timeline key video video video';
            position: absolute;
            top: 55px;
            bottom: 0px;
            left: 0px;
            right: 0px;
        }

        .wrapper>div {
            border: 1px solid grey;
        }

        .key-map-revenue {
            grid-area: key;
            position: relative;
        }

        .video-story {
            grid-area: video;
            position: relative;
            /* position: relative;
            height: 20vh;
            top: 50vh; */
        }

        .intro {
            grid-area: intro;
            position: relative;
        }

        .share-icons {
            grid-area: share;
            position: relative;
        }

        .notifications {
            grid-area: noty;
            position: relative;
        }

        .analytics {
            grid-area: analy;
            position: relative;
        }

        .radar {
            grid-area: radar;
            position: relative;
        }

        .timeline {
            grid-area: timeline;
            position: relative;
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
            <div class="key-user">key user</div>
            <div class="world-map">world map</div>
            <div class="revenue">revenue</div>
        </div>
        <div class="share-icons">share icons</div>
        <div class="notifications">notification</div>
        <div class="analytics">
            <div class="area-graph">area graph</div>
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