<?php /* Template Name: Timeline */ ?>

<style scoped>
    .time-line {
        position: absolute;
        right: 0px;
        bottom: 0px;
        top: 0px;
        left: 0px;

    }

    p {
        font-weight: 300;
    }

    a {
        color: #6c6d6d;
        text-decoration: none;
        text-transform: uppercase;
        display: block;
        letter-spacing: 0.3em;
        font-size: 0.6em;
        font-weight: 400;
        background: #252727;
        padding: 0.3rem 1rem;
        margin: 1.9rem 0 0 0;
        float: right;
    }

    a:hover {
        color: white;
        background: #004ffc;
        border-bottom: 0.35em solid black;
    }

    strong {
        font-weight: 600;
    }

    h1 {
        font-family: 'Saira', sans-serif;
        letter-spacing: 1.5px;
        font-weight: 400;
        font-size: 1.5em;
    }

    #timeline-content {
        height: 100%;
    }

    /* Timeline */
    .timeline-inner {
        border-left: 4px solid #f16c70;
        border-bottom-right-radius: 4px;
        border-top-right-radius: 4px;
        /* background: rgba(255, 255, 255, 0.03); */
        /* color: rgba(0, 0, 0, 0.8); */
        font-family: 'Chivo', sans-serif;
        margin: 0 0 0 28px;
        letter-spacing: 0.5px;
        position: relative;
        line-height: 1.4em;
        font-size: 1.03em;
        padding: 0px 0px 0px 18px;
        list-style: none;
        text-align: left;
        font-weight: 100;
    }

    .timeline-inner h1 {
        font-family: 'Saira', sans-serif;
        letter-spacing: 1.5px;
        font-weight: 100;
        font-size: 1.4em;
    }

    .timeline-inner h2,
    .timeline-inner h3 {
        font-weight: 400;
        font-size: 15px;
    }

    .timeline-inner h3 {
        margin-top: 0px;
    }

    .timeline-inner .event {
        /* border-bottom: 1px dashed rgba(255, 255, 255, 0.1); */
        padding-bottom: 15px;
        position: relative;
        display: flex;
        justify-content: space-between;
    }

    .timeline-inner .event:last-of-type {
        padding-bottom: 0;
        margin-bottom: 0;
        border: none;
    }

    .timeline-inner .event:before,
    .timeline-inner .event:after {
        position: absolute;
        display: block;
        top: 0;
    }

    .timeline-inner .event:after {
        left: -38.85px;
        border-radius: 50%;
        background: url('<?php echo get_template_directory_uri() ?>/src/avatar.png');
        background-size: contain;
        height: 30px;
        width: 30px;
        content: "";
        border: 3px solid #f16c70;
    }

    @media (max-width:1024px) {
        .timeline-content h1 {
            font-size: 1.6em;
        }

        .timeline-inner {
            margin: 0 0 0 23px;
            padding: 0px 0px 0px 28px;
            list-style: none;
            text-align: left;
            font-weight: 100;
        }

        .timeline-inner .event {
            margin-bottom: 0px;

        }

        .timeline-inner h3 {
            letter-spacing: 0px;
            font-weight: 400;
            font-size: 15px;
        }

        .timeline-inner .event:after {
            left: -47.85px;
            border-radius: 50%;
            height: 30px;
            width: 30px;
            content: "";
        }

        .time-line {
            width: 100%;
        }
    }
</style>
<div class="time-line">
    <div id="timeline-content" data-simplebar>
        <h1>Timeline</h1>

        <ul class="timeline-inner">
            <li class="event">
                <h3>Dinosaurs Roamed the Earth</h3>
                <h3 style="margin-left:15px;margin-right:5px">2019</h3>
            </li>
            <li class="event">
                <h3>Creative Component Launched</h3>
                <h3 style="margin-left:15px;margin-right:5px">2018</h3>
            </li>
            <li class="event">
                <h3>Squareflair was Born</h3>
                <h3 style="margin-left:15px;margin-right:5px">2017</h3>
            </li>
            <li class="event">
                <h3>Creative Component Launched</h3>
                <h3 style="margin-left:15px;margin-right:5px">2018</h3>
            </li>
            <li class="event">
                <h3>Creative Component Launched</h3>
                <h3 style="margin-left:15px;margin-right:5px">2018</h3>
            </li>
            <li class="event">
                <h3>Creative Component Launched</h3>
                <h3 style="margin-left:15px;margin-right:5px">2018</h3>
            </li>
            <li class="event">
                <h3>Creative Component Launched</h3>
                <h3 style="margin-left:15px;margin-right:5px">2018</h3>
            </li>
            <li class="event">
                <h3>Creative Component Launched</h3>
                <h3 style="margin-left:15px;margin-right:5px">2018</h3>
            </li>
        </ul>
    </div>
</div>