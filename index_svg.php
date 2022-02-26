<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serious Incidents</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            outline: 0;
        }
        
        table td,
        table td * {
            vertical-align: top;
        }
        
        .pie-chart {
            position: relative;
            width: 400px;
            height: 400px;
        }
        
        .pie-chart:before {
            content: '';
            border: 6px solid #0057b8;
            width: 100%;
            height: 100%;
            position: absolute;
            z-index: 0;
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.82);
        }
        
        .pie-chart:after {
            content: 'Energy Sources';
            border: 0;
            background-color: #fff;
            color: #0057b8;
            width: 100px;
            height: 100px;
            position: absolute;
            z-index: 0;
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }
        
        .pie {
            width: 400px;
            height: 400px;
            position: relative;
            -webkit-clip-path: circle(40% at 50% 50%);
            clip-path: circle(40% at 50% 50%);
            transform: rotate(-53deg);
        }
        /* .pie::before {
            content: '';
            background: transparent;
            position: absolute;
            width: 271px;
            height: 271px;
            z-index: 1;
            border-radius: 50%;
            border: 25px solid #fff;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
        } */
        
        .pie__segment {
            height: 100%;
            position: absolute;
            width: 100%;
            -webkit-transform: rotate(-90deg) rotate(calc(var(--start) * 1deg));
            transform: rotate(-90deg) rotate(calc(var(--start) * 1deg));
            transition: 0.3s all ease;
            cursor: pointer;
        }
        
        .pie__segment[data-value='36'] {
            -webkit-clip-path: polygon(51% 50%, 100% 50%, 211.8033988% 167.55705039999998%);
            clip-path: polygon(51% 50%, 100% 50%, 211.8033988% 167.55705039999998%);
        }
        
        .pie__segment {
            -webkit-animation: fadeIn 0.25s both;
            animation: fadeIn 0.25s both;
        }
        
        .pie__segment img {
            position: absolute;
            z-index: 999;
            color: #2a2b2b;
            top: 50%;
            width: 40px;
            margin-left: auto;
            transform: translate(185%, 43%) rotate(107deg);
            margin-right: auto;
            left: 50%;
            text-align: center;
        }
        
        .pie__segment:nth-of-type(2) img {
            transform: translate(233%, 40%) rotate(107deg);
            width: 34px;
        }
        
        .pie__segment:nth-of-type(3) img {
            transform: translate(191%, 33%) rotate(36deg);
        }
        
        .pie__segment:nth-of-type(4) img {
            transform: translate(355%, 21%) rotate(0);
            width: 24px;
        }
        
        .pie__segment:nth-of-type(5) img {
            transform: translate(184%, 21%) rotate(-36deg);
        }
        
        .pie__segment:nth-of-type(6) img {
            transform: translate(185%, 43%) rotate(-72deg);
        }
        
        .pie__segment:nth-of-type(8) img {
            transform: translate(185%, 34%) rotate(-144deg);
        }
        
        .pie__segment:nth-of-type(9) img {
            transform: translate(305%, 19%) rotate(-180deg);
            width: 29px;
        }
        
        .pie__segment:nth-of-type(10) img {
            transform: translate(307%, 22%) rotate(-216deg);
            width: 26px;
        }
        
        .pie__segment:nth-of-type(1) {
            -webkit-animation-delay: 0.1s;
            animation-delay: 0.1s;
            background: #d9dbd9;
        }
        
        .pie__segment:nth-of-type(1) .segment-title {
            position: relative;
            z-index: 999;
            color: #2a2b2b;
            top: 50%;
            width: 115px;
            margin-left: auto;
            transform: translate(-56%, 110%) rotate(107deg);
            margin-right: auto;
            left: 50%;
            text-align: center;
        }
        
        .pie__segment:nth-of-type(2) {
            -webkit-animation-delay: 0.2s;
            animation-delay: 0.2s;
            background: #d9dbd9;
        }
        
        .pie__segment:nth-of-type(2) .segment-title {
            position: relative;
            z-index: 999;
            color: #2a2b2b;
            top: 50%;
            width: 115px;
            margin-left: auto;
            transform: translate(-56%, 110%) rotate(107deg);
            margin-right: auto;
            left: 50%;
            text-align: center;
        }
        
        .pie__segment:nth-of-type(3) {
            -webkit-animation-delay: 0.3s;
            animation-delay: 0.3s;
            background: #d9dbd9;
        }
        
        .pie__segment:nth-of-type(3) .segment-title {
            position: relative;
            z-index: 999;
            color: #2a2b2b;
            top: 50%;
            width: 115px;
            margin-left: auto;
            transform: translate(-56%, 110%) rotate(106deg);
            margin-right: auto;
            left: 50%;
            text-align: center;
        }
        
        .pie__segment:nth-of-type(4) {
            -webkit-animation-delay: 0.4s;
            animation-delay: 0.4s;
            background: #d9dbd9;
        }
        
        .pie__segment:nth-of-type(4) .segment-title {
            position: relative;
            z-index: 999;
            color: #2a2b2b;
            top: 50%;
            width: 115px;
            margin-left: auto;
            transform: translate(-56%, 110%) rotate(-72deg);
            margin-right: auto;
            left: 50%;
            text-align: center;
        }
        
        .pie__segment:nth-of-type(5) {
            -webkit-animation-delay: 0.5s;
            animation-delay: 0.5s;
            background: #d9dbd9;
            -webkit-animation: fadeIn 0.25s both;
            animation: fadeIn 0.25s both;
        }
        
        .pie__segment:nth-of-type(5) .segment-title {
            position: relative;
            z-index: 999;
            color: #2a2b2b;
            top: 50%;
            width: 115px;
            margin-left: auto;
            transform: translate(-56%, 110%) rotate(-72deg);
            margin-right: auto;
            left: 50%;
            text-align: center;
        }
        
        .pie__segment:nth-of-type(6) {
            -webkit-animation-delay: 0.1s;
            animation-delay: 0.1s;
            background: #d9dbd9;
        }
        
        .pie__segment:nth-of-type(6) .segment-title {
            position: relative;
            z-index: 999;
            color: #2a2b2b;
            top: 50%;
            width: 115px;
            margin-left: auto;
            transform: translate(-56%, 110%) rotate(-72deg);
            margin-right: auto;
            left: 50%;
            text-align: center;
        }
        
        .pie__segment:nth-of-type(7) {
            -webkit-animation-delay: 0.2s;
            animation-delay: 0.2s;
            background: #d9dbd9;
        }
        
        .pie__segment:nth-of-type(7) .segment-title {
            position: relative;
            z-index: 999;
            color: #2a2b2b;
            top: 50%;
            width: 115px;
            margin-left: auto;
            transform: translate(-56%, 110%) rotate(107deg);
            margin-right: auto;
            left: 50%;
            text-align: center;
        }
        
        .pie__segment:nth-of-type(8) {
            -webkit-animation-delay: 0.3s;
            animation-delay: 0.3s;
            background: #d9dbd9;
        }
        
        .pie__segment:nth-of-type(8) .segment-title {
            position: relative;
            z-index: 999;
            color: #2a2b2b;
            top: 50%;
            width: 115px;
            margin-left: auto;
            transform: translate(-56%, 110%) rotate(107deg);
            margin-right: auto;
            left: 50%;
            text-align: center;
        }
        
        .pie__segment:nth-of-type(9) {
            -webkit-animation-delay: 0.4s;
            animation-delay: 0.4s;
            background: #d9dbd9;
        }
        
        .pie__segment:nth-of-type(9) .segment-title {
            position: relative;
            z-index: 999;
            color: #2a2b2b;
            top: 50%;
            width: 115px;
            margin-left: auto;
            transform: translate(-56%, 110%) rotate(107deg);
            margin-right: auto;
            left: 50%;
            text-align: center;
        }
        
        .pie__segment:nth-of-type(10) {
            -webkit-animation-delay: 0.5s;
            animation-delay: 0.5s;
            background: #d9dbd9;
        }
        
        .pie__segment:nth-of-type(10) .segment-title {
            position: relative;
            z-index: 999;
            color: #2a2b2b;
            top: 50%;
            width: 115px;
            margin-left: auto;
            transform: translate(-56%, 110%) rotate(107deg);
            margin-right: auto;
            left: 50%;
            text-align: center;
        }
        
        .segment-title p {
            font-size: 13px;
            line-height: 19px;
        }
        
        .pie__segment:hover,
        .pie__segment.active {
            background-color: #0057b8;
        }
        
        .pie__segment.active .segment-title p,
        .pie__segment:hover .segment-title p {
            color: #fff
        }
        
        .common-desc {
            display: none;
        }
        
        .gravity-desc {
            display: table-row;
        }
        
        h2 {
            margin: 0 0 10px;
            color: #114e83;
        }
        
        h3 {
            margin: 0 0 10px;
            color: #414b50
        }
        
        p {
            margin: 0 0 10px;
        }
        
        .segment-title p {
            margin: 15px 0;
        }
        
        ul li {
            margin-bottom: 10px;
        }
        
        @-webkit-keyframes fadeIn {
            from {
                opacity: 0;
            }
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
        }
        .st0.active{
            fill: red;
        }
    </style>
</head>

<body>
    <div class="main-wrapper">
        <table style="background: #002846; width: 100%; padding: 20px">
            <tbody>
                <tr>
                    <td>
                        <img src="assets/logo.png" alt="Company logo" style="width: 165px; height: auto">
                    </td>
                    <td>
                        <p style="text-align: right; color: #fff">SEPTEMBER 2020</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h1 style="font-size:26px; line-height: 30px; color: #fff; margin-bottom: 0;">L3R Serious Incident– Pipeline Welding </h1>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%; padding: 20px">
            <tbody>
                <tr>
                    <td>
                        <h2>What Happened?</h2>
                        <p>On September 10, 2018 at 2:00 pm the set up crew was moving the internal welding machine control box to the next joint of pipe. This is normally done by 2 people holding up the control box as it is propelled forward with the auto
                            traveler until it can be set inside the next joint of pipe.</p>
                        <p>In this instance a laborer moved in to assist carrying the control box which put their body position almost in front of the control box. During this activity laborer had a loose piece of clothing catch on a sharp corner of the
                            control box. </p>
                        <p>This caused the laborer to lose their balance and end up in front of the control box in a seated manner at the face of the pipe with the control box coming to rest on the workers left thigh. The worker received a bruise form the
                            control box, and superficial burns from the pre-heated pipe. First aid was administered and the worker was cleared back to full duties. </p>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 98%; padding: 20px; border: 4px solid #0958b8; margin: 0 auto 20px">
            <tbody>
                <tr>
                    <td colspan="2">
                        <h2>Identified Energy Sources</h2>
                        <h3 style="font-weight: 400;">Consider the Energy Sources that allowed this to happen: </h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="pie-chart-svg" id="capture" style="width: 400px">
                            <?xml version="1.0" encoding="utf-8"?>
                            <!-- Generator: Adobe Illustrator 21.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1024 1024" style="enable-background:new 0 0 1024 1024;" xml:space="preserve">
                                
                                <style type="text/css">
                                    .st0{clip-path:url(#SVGID_2_);fill:#0057B8;}
                                    .st1{clip-path:url(#SVGID_4_);fill:#FFFFFF;}
                                    .st2{clip-path:url(#SVGID_6_);}
                                    .st3{clip-path:url(#SVGID_8_);}
                                    .st4{clip-path:url(#SVGID_10_);}
                                    .st5{fill:#FFFFFF;}
                                    .st6{font-family:'MSReferenceSansSerif';}
                                    .st7{font-size:31.7467px;}
                                    .st8{font-size:31.7468px;}
                                    .st9{font-size:31.7469px;}
                                    .st10{font-size:31.747px;}
                                    .st11{font-size:31.7465px;}
                                    .st12{font-size:31.7466px;}
                                    .st13{font-size:31.7471px;}
                                    .st14{opacity:0.92;clip-path:url(#SVGID_10_);}
                                    .st15{font-family:'Helvetica-Bold';}
                                    .st16{font-size:31.7472px;}
                                    .st17{clip-path:url(#SVGID_6_);fill:#FFFFFF;}
                                    .st18{fill:#114E83;}
                                    .st19{font-size:68.5419px;}
                                    .st20{letter-spacing:-1;}
                                </style>
                                <g>
                                    <defs>
                                        <path id="SVGID_1_" d="M306.1,512.2c0-113.5,92-205.5,205.5-205.5c113.5,0,205.5,92,205.5,205.5s-92,205.5-205.5,205.5
                                            C398.1,717.7,306.1,625.7,306.1,512.2 M511.9,10.5c-277.1,0-501.7,224.6-501.7,501.7c0,270.4,213.9,490.8,481.7,501.3h40
                                            c259.6-10.2,468.6-217.6,481.1-476.7v-49.4C1000.2,221.9,780.7,10.5,511.9,10.5z"/>
                                    </defs>
                                    <clipPath id="SVGID_2_">
                                        <use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
                                    </clipPath>
                                    <path class="st0" id="gravity" d="M1013,511.4c-0.1-108.5-34.7-208.9-93.3-290.8L520,511.4H1013z"/>
                                    <path class="st0" id="motion" d="M665.7,34.7C617.1,19,565.3,10.5,511.5,10.5c-53.8,0-105.5,8.5-154.1,24.2l154.2,472L665.7,34.7z"/>
                                    <path class="st0" d="M917,216.9C856.1,133.4,770,69.4,669.9,36L515.4,509.2L917,216.9z"/>
                                    <path class="st0" d="M517.8,515.9l401,288.7c58.6-81.4,93.3-181,94.1-288.7H517.8z"/>
                                    <path class="st0" d="M358.4,989.7c48.3,15.4,99.7,23.8,153,23.8c53.4,0,104.9-8.4,153.1-23.8L511.5,521L358.4,989.7z"/>
                                    <path class="st0" d="M108.6,810.7c61,82.1,146.4,144.9,245.6,177.6L506.8,521L108.6,810.7z"/>
                                    <path class="st0" d="M353.1,36c-100.8,33.5-187.3,98.1-248.3,182.5l402.6,289.9L353.1,36z"/>
                                    <path class="st0" d="M668.9,988.3c100.1-33.1,186.3-96.8,247.3-180.1L515.9,520L668.9,988.3z"/>
                                    <path class="st0" d="M10,515.9c0.8,108.8,36.3,209.4,96,291.2l400.2-291.2H10z"/>
                                    <path class="st0" d="M102.2,222.1c-58,81.7-92.1,181.5-92.2,289.3h494L102.2,222.1z"/>
                                    <polygon class="st0" points="512.4,511.4 512.9,511 511.5,506.6 510.3,510.4 511.6,511.4 	"/>
                                    <polygon class="st0" points="510.6,518.2 511.5,521 512.6,517.7 512,517.2 	"/>
                                    <polygon class="st0" points="514.7,511.4 515.4,509.2 512.9,511 513.1,511.4 	"/>
                                    <polygon class="st0" points="508.5,515.9 506.8,521 510.6,518.2 509.8,515.9 	"/>
                                    <polygon class="st0" points="515.8,514.4 520,511.4 514.7,511.4 514.1,513.2 	"/>
                                    <polygon class="st0" points="508.2,514.5 506.2,515.9 508.5,515.9 508.8,514.9 	"/>
                                    <polygon class="st0" points="509.8,515.9 510.1,515.9 509.8,515.6 	"/>
                                    <polygon class="st0" points="513.6,512.8 513.1,511.4 512.4,511.4 512,511.7 	"/>
                                    <polygon class="st0" points="510.3,510.4 507.4,508.4 508.4,511.4 509.9,511.4 	"/>
                                    <polygon class="st0" points="513,516.5 512.6,517.7 515.9,520 514.6,515.9 513.8,515.9 	"/>
                                    <polygon class="st0" points="514.4,515.4 514.6,515.9 517.8,515.9 515.8,514.4 	"/>
                                    <polygon class="st0" points="508.4,511.4 503.9,511.4 508.2,514.5 509.1,513.7 	"/>
                                    <polygon class="st0" points="511.6,511.4 509.9,511.4 509.2,513.7 512,511.7 	"/>
                                    <polygon class="st0" points="510.1,515.9 512,517.2 513,516.5 513.2,515.9 	"/>
                                    <polygon class="st0" points="514.1,513.2 513.5,512.8 513.9,513.8 	"/>
                                    <polygon class="st0" points="508.8,514.9 509.7,515.6 509.2,513.8 	"/>
                                    <polygon class="st0" points="509.1,513.7 509.2,513.8 509.2,513.7 	"/>
                                    <polygon class="st0" points="513.2,515.9 513.8,515.9 514.4,515.4 513.9,513.8 	"/>
                                </g>
                                <g>
                                    <defs>
                                        <rect id="SVGID_3_" x="10.1" y="10.5" width="1002.9" height="1003.1"/>
                                    </defs>
                                    <clipPath id="SVGID_4_">
                                        <use xlink:href="#SVGID_3_"  style="overflow:visible;"/>
                                    </clipPath>
                                    <path class="st1" d="M511.9,83.4c57.9,0,114.1,11.3,166.9,33.7c51.1,21.6,96.9,52.5,136.3,91.9c39.4,39.4,70.3,85.3,91.9,136.3
                                        c22.4,52.9,33.7,109,33.7,166.9s-11.3,114.1-33.7,166.9c-21.6,51.1-52.5,96.9-91.9,136.3c-39.4,39.4-85.3,70.3-136.3,91.9
                                        c-52.9,22.4-109,33.7-166.9,33.7c-57.9,0-114.1-11.3-166.9-33.7c-51.1-21.6-96.9-52.5-136.3-91.9c-39.4-39.4-70.3-85.3-91.9-136.3
                                        C94.3,626.3,83,570.1,83,512.2s11.3-114.1,33.7-166.9c21.6-51.1,52.5-96.9,91.9-136.3c39.4-39.4,85.3-70.3,136.3-91.9
                                        C397.8,94.7,454,83.4,511.9,83.4 M511.9,78.9c-239.3,0-433.4,194-433.4,433.4c0,239.3,194,433.4,433.4,433.4s433.4-194,433.4-433.4
                                        C945.2,272.9,751.2,78.9,511.9,78.9"/>
                                </g>
                                <g>
                                    <defs>
                                        <rect id="SVGID_5_" x="10.1" y="10.5" width="1002.9" height="1003.1"/>
                                    </defs>
                                    <clipPath id="SVGID_6_">
                                        <use xlink:href="#SVGID_5_"  style="overflow:visible;"/>
                                    </clipPath>
                                    <g class="st2">
                                        <g>
                                            <defs>
                                                <rect id="SVGID_7_" x="24.2" y="25.8" width="981.1" height="979.6"/>
                                            </defs>
                                            <clipPath id="SVGID_8_">
                                                <use xlink:href="#SVGID_7_"  style="overflow:visible;"/>
                                            </clipPath>
                                            <g class="st3">
                                                <defs>
                                                    <rect id="SVGID_9_" x="24.2" y="25.8" width="981.1" height="979.6"/>
                                                </defs>
                                                <clipPath id="SVGID_10_">
                                                    <use xlink:href="#SVGID_9_"  style="overflow:visible;"/>
                                                </clipPath>
                                                <g class="st4">
                                                    <text transform="matrix(0.4553 0.8904 -0.8904 0.4553 911.2006 294.0482)" class="st5 st6 st7">M</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.4117 0.9113 -0.9113 0.4117 923.0263 317.3745)" class="st5 st6 st8">e</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.3759 0.9266 -0.9266 0.3759 930.2175 333.2959)" class="st5 st6 st9">c</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.3378 0.9412 -0.9412 0.3378 936.7961 349.4543)" class="st5 st6 st8">h</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.299 0.9543 -0.9543 0.299 943.2617 367.5231)" class="st5 st6 st10">a</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.2598 0.9657 -0.9657 0.2598 948.5024 384.1521)" class="st5 st6 st11">n</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.2297 0.9733 -0.9733 0.2297 953.4212 402.7365)" class="st5 st6 st8">i</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.2012 0.9795 -0.9795 0.2012 955.4709 411.1389)" class="st5 st6 st10">c</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.163 0.9866 -0.9866 0.163 958.9929 428.2527)" class="st5 st6 st10">a</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.1344 0.9909 -0.9909 0.1344 961.783 445.5093)" class="st5 st6 st8">l</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.8631 0.505 -0.505 0.8631 731.2141 114.4049)" class="st5 st6 st8">M</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.8368 0.5476 -0.5476 0.8368 753.7357 127.6807)" class="st5 st6 st12">o</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.8184 0.5747 -0.5747 0.8184 769.8036 138.2769)" class="st5 st6 st10">t</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.806 0.5919 -0.5919 0.806 778.3488 144.2829)" class="st5 st6 st7">i</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.7874 0.6164 -0.6164 0.7874 785.3809 149.3443)" class="st5 st6 st13">o</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.7607 0.6491 -0.6491 0.7607 800.4847 161.1675)" class="st5 st6 st12">n</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.9951 -9.917553e-02 9.917553e-02 0.9951 457.2624 63.0113)" class="st5 st6 st10">G</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.9983 -5.897236e-02 5.897236e-02 0.9983 481.6549 60.6925)" class="st5 st6 st12">r</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.9996 -2.666387e-02 2.666387e-02 0.9996 493.7982 59.9347)" class="st5 st6 st7">a</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.9999 1.131952e-02 -1.131952e-02 0.9999 511.2561 59.4599)" class="st5 st6 st7">v</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.9992 3.974147e-02 -3.974147e-02 0.9992 528.7445 59.7248)" class="st5 st6 st8">i</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.9982 6.068357e-02 -6.068357e-02 0.9982 537.4371 60.0596)" class="st5 st6 st9">t</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.9958 9.127964e-02 -9.127964e-02 0.9958 547.8499 60.6368)" class="st5 st6 st10">y</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.6769 -0.7361 0.7361 0.6769 175.7935 212.6965)" class="st5 st6 st8">T</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.706 -0.7083 0.7083 0.706 188.782 198.5961)" class="st5 st6 st12">e</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.7404 -0.6722 0.6722 0.7404 200.9645 186.1774)" class="st5 st6 st8">m</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.7742 -0.6329 0.6329 0.7742 221.7456 167.4517)" class="st5 st6 st10">p</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.7991 -0.6012 0.6012 0.7991 236.5889 155.3315)" class="st5 st6 st11">e</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.8184 -0.5746 0.5746 0.8184 250.6207 144.8342)" class="st5 st6 st9">r</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.8368 -0.5475 0.5475 0.8368 260.5521 137.8037)" class="st5 st6 st8">a</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.8533 -0.5215 0.5215 0.8533 275.2007 128.2828)" class="st5 st6 st13">t</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.8699 -0.4932 0.4932 0.8699 284.0195 122.7958)" class="st5 st6 st10">u</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.8866 -0.4626 0.4626 0.8866 300.7924 113.3581)" class="st5 st6 st13">r</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.9013 -0.4331 0.4331 0.9013 311.5524 107.6864)" class="st5 st6 st7">e</text>
                                                </g>
                                                <g class="st14">
                                                    <text transform="matrix(0.1818 -0.9833 0.9833 0.1818 68.7179 439.8216)" class="st5 st15 st7">C</text>
                                                </g>
                                                <g class="st14">
                                                    <text transform="matrix(0.2274 -0.9738 0.9738 0.2274 72.8859 417.4813)" class="st5 st15 st12">h</text>
                                                </g>
                                                <g class="st14">
                                                    <text transform="matrix(0.2669 -0.9637 0.9637 0.2669 77.251 398.8368)" class="st5 st15 st8">e</text>
                                                </g>
                                                <g class="st14">
                                                    <text transform="matrix(0.3153 -0.949 0.949 0.3153 81.7612 382.0492)" class="st5 st15 st9">m</text>
                                                </g>
                                                <g class="st14">
                                                    <text transform="matrix(0.3538 -0.9353 0.9353 0.3538 90.777 355.5135)" class="st5 st15 st7">i</text>
                                                </g>
                                                <g class="st14">
                                                    <text transform="matrix(0.3809 -0.9246 0.9246 0.3809 93.7791 347.391)" class="st5 st15 st7">c</text>
                                                </g>
                                                <g class="st14">
                                                    <text transform="matrix(0.4165 -0.9091 0.9091 0.4165 100.42 331.2653)" class="st5 st15 st7">a</text>
                                                </g>
                                                <g class="st14">
                                                    <text transform="matrix(0.4428 -0.8966 0.8966 0.4428 107.7593 315.3862)" class="st5 st15 st7">l</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.207 0.9783 -0.9783 0.207 40.8903 591.7054)" class="st5 st15 st8">B</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.2392 0.971 -0.971 0.2392 45.846 614.5371)" class="st5 st15 st7">i</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.2678 0.9635 -0.9635 0.2678 47.9948 623.5413)" class="st5 st15 st11">o</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.2961 0.9551 -0.9551 0.2961 53.3697 642.5697)" class="st5 st15 st10">l</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.3242 0.946 -0.946 0.3242 56.0366 651.4066)" class="st5 st15 st9">o</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.3624 0.932 -0.932 0.3624 62.5049 670.2547)" class="st5 st15 st10">g</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.3898 0.9209 -0.9209 0.3898 69.7594 688.6703)" class="st5 st15 st16">i</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.4153 0.9097 -0.9097 0.4153 73.2964 697.1806)" class="st5 st15 st8">c</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.4487 0.8937 -0.8937 0.4487 80.8454 713.6967)" class="st5 st15 st8">a</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.4733 0.8809 -0.8809 0.4733 88.9845 729.7626)" class="st5 st15 st12">l</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.7278 0.6858 -0.6858 0.7278 178.0555 850.191)" class="st5 st15 st13">R</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.7566 0.6539 -0.6539 0.7566 195.1772 866.2278)" class="st5 st15 st9">a</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.7818 0.6236 -0.6236 0.7818 208.942 878.1343)" class="st5 st15 st8">d</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.8002 0.5997 -0.5997 0.8002 224.4812 890.4195)" class="st5 st15 st9">i</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.8169 0.5768 -0.5768 0.8169 231.822 895.9947)" class="st5 st15 st10">a</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.834 0.5518 -0.5518 0.834 246.6237 906.3693)" class="st5 st15 st13">t</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.8453 0.5342 -0.5342 0.8453 255.6881 912.3498)" class="st5 st15 st7">i</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.8611 0.5084 -0.5084 0.8611 263.4198 917.3279)" class="st5 st15 st10">o</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.8817 0.4717 -0.4717 0.8817 280.6219 927.4693)" class="st5 st15 st10">n</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.9953 9.701606e-02 -9.701606e-02 0.9953 454.8195 984.4495)" class="st5 st15 st13">S</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.9986 5.308087e-02 -5.308087e-02 0.9986 476.5053 986.5272)" class="st5 st15 st9">o</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.9999 1.124230e-02 -1.124230e-02 0.9999 496.4449 987.5758)" class="st5 st15 st7">u</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.9995 -3.016451e-02 3.016451e-02 0.9995 516.2941 987.7824)" class="st5 st15 st9">n</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.9974 -7.211167e-02 7.211167e-02 0.9974 536.2598 987.1753)" class="st5 st15 st12">d</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.8698 -0.4934 0.4934 0.8698 735.0059 931.5848)" class="st5 st15 st8">P</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.8514 -0.5246 0.5246 0.8514 753.7939 920.826)" class="st5 st15 st8">r</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.8339 -0.5519 0.5519 0.8339 764.7227 914.1386)" class="st5 st15 st8">e</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.8124 -0.5831 0.5831 0.8124 779.8788 904.092)" class="st5 st15 st10">s</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.7899 -0.6133 0.6133 0.7899 794.6103 893.5134)" class="st5 st15 st10">s</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.7651 -0.6439 0.6439 0.7651 808.9836 882.3515)" class="st5 st15 st9">u</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.7429 -0.6695 0.6695 0.7429 824.1653 869.5023)" class="st5 st15 st8">r</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.7212 -0.6927 0.6927 0.7212 833.6537 860.987)" class="st5 st15 st8">e</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.417 -0.9089 0.9089 0.417 941.3138 715.6695)" class="st5 st6 st7">E</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.3881 -0.9216 0.9216 0.3881 950.2286 695.979)" class="st5 st6 st13">l</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.3624 -0.932 0.932 0.3624 953.8536 687.5162)" class="st5 st6 st8">e</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.3277 -0.9448 0.9448 0.3277 960.4285 670.6048)" class="st5 st6 st10">c</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.2995 -0.9541 0.9541 0.2995 966.2903 653.5023)" class="st5 st6 st9">t</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.2766 -0.961 0.961 0.2766 969.5578 643.1237)" class="st5 st6 st10">r</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.2552 -0.9669 0.9669 0.2552 973.0373 630.9592)" class="st5 st6 st13">i</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.2284 -0.9736 0.9736 0.2284 975.4316 622.0965)" class="st5 st6 st10">c</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.1924 -0.9813 0.9813 0.1924 979.5754 604.3933)" class="st5 st6 st9">a</text>
                                                </g>
                                                <g class="st4">
                                                    <text transform="matrix(0.1653 -0.9862 0.9862 0.1653 982.985 586.679)" class="st5 st6 st7">l</text>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <path class="st17" d="M672.9,802.7l3,2.9l3.7-4.2l2.8-2.9c-6.8-6.6-11.1-15.7-11.1-25.9c0-20,16.5-36.2,36.9-36.2
                                        s36.9,16.2,36.9,36.2c0,10.3-4.4,19.6-11.5,26.2l2.8,2.9v0l4.3,4.2l2.8-2.6l-4.2-4.7c5.8-6.7,9.4-15.3,9.7-24.7h5.5v-4.1h-5.6
                                        c-0.6-8.6-3.9-16.5-9.2-22.8l3.9-4.3l-2.8-2.8l-3.8,4.1c-6.8-6.6-15.9-10.8-25.9-11.5V727h-4v5.5c-10.9,0.3-20.8,4.7-28,11.8
                                        l-3.9-3.9l-2.5,3l3.8,3.7c-5.6,6.6-9,15.1-9.3,24.3H662v3.9h5.4c0.6,8.8,4,16.9,9.4,23.3L672.9,802.7z"/>
                                    <path class="st17" d="M708.4,839c35.7,0,64.6-29,64.6-64.8c0-35.8-28.9-64.8-64.6-64.8c-35.7,0-64.7,29-64.7,64.8
                                        C643.7,810,672.7,839,708.4,839 M708.3,717.7c31.4,0,56.8,25.5,56.8,57c0,31.5-25.4,57-56.8,57c-31.4,0-56.8-25.5-56.8-57
                                        C651.5,743.2,676.9,717.7,708.3,717.7"/>
                                    <path class="st17" d="M712,767.1c-0.9-0.4-1.8-0.6-2.8-0.6c-3.7,0-6.8,3.1-6.8,7c0,0.5,0.1,1,0.2,1.5l-7.4,6.1l4.7,4.9l5.9-6.6
                                        c1,0.6,2.1,1,3.4,1c3.7,0,6.8-3.1,6.8-6.9c0-1.5-0.5-2.8-1.2-4l16.3-18.2L712,767.1z"/>
                                    <path class="st17" d="M761.3,387.8c1.2,0.6,5.3,2.2,6.7,2.8c0.1,3.1,0.6,6.1,1.4,9c-0.7,0.5-2.2,1.5-4.3,3.3
                                        c-3.2,2.7-2.4,5-1.6,6.4c0.8,1.4,3.2,5.1,4.9,7.7c1.7,2.6,3.1,3.6,5.9,2.1c2-1,4.2-2.1,5.3-2.7c2.4,2.3,5.1,4.3,8,6
                                        c-0.1,0.7-0.4,2.3-0.9,5.6c-0.8,5,3.5,5.5,9.5,6.9c6,1.5,7.2,0.5,8-1.4c0.6-1.4,1.8-4.9,2.3-6.4c3.6-0.1,7-0.6,10.3-1.6
                                        c0.8,1,2.3,2.8,3.7,4.5c2,2.4,3.3,2.5,5.3,1.5c2-1,6.4-3.9,9.2-5.8c2.8-1.9,2-3.7,1.4-5.3c-0.5-1.2-1.9-4.2-2.5-5.4
                                        c2.2-2.4,4.2-5.1,5.7-8c1,0.1,2.5,0.3,4.6,0.6c3.8,0.5,5.1-0.5,5.6-1.9c0.5-1.3,1.7-4.8,2.5-9.6c0.9-4.8-0.7-5.7-2.2-6.3
                                        c-1.5-0.6-5.9-1.8-5.9-1.8l0,0.1c-0.1-3.4-0.5-6.8-1.4-9.9c1-0.7,2.7-1.9,4.7-3.5c3-2.3,1.5-4.7,0.7-5.9c-0.8-1.3-3-5.2-4.7-8
                                        c-1.7-2.8-3.5-2.9-5.5-2.1c-1.9,0.8-5.2,2.7-5.2,2.7v0c-2.6-2.5-5.4-4.7-8.6-6.4c0.2-0.8,0.4-2,0.7-3.8c0.8-4.8-1.4-6-2.5-6.3
                                        c-1.1-0.3-7.7-2-10.7-2.4c-3-0.4-4.3,1.1-4.7,2.7c-0.3,1.2-1.3,3.9-1.8,5.2c-3.7,0.1-7.3,0.7-10.6,1.8c-0.7-0.9-1.9-2.4-3-3.8
                                        c-1.7-2.1-3.5-3-5.4-2c-1.9,1-6.8,3.8-9.1,5.5c-2.3,1.7-2.4,3.6-1.8,5.3c0.5,1.5,2.2,4.6,2.7,5.6c-2.3,2.5-4.3,5.4-5.9,8.4
                                        c-1.2-0.2-3.7-0.5-5.4-0.8c-2.4-0.3-3.9,0-4.7,2.7c-0.8,2.7-1.1,3.6-2.2,8.3C758.8,386.2,759.8,387,761.3,387.8 M806.1,371.8
                                        c9.3,0,16.9,7.6,16.9,17c0,9.4-7.6,17-16.9,17c-9.3,0-16.9-7.6-16.9-17C789.3,379.4,796.8,371.8,806.1,371.8"/>
                                    <path class="st17" d="M849.2,414.8c-1.3,0.9-4.7,3.4-6.3,4.9c-1.6,1.5-1.5,2.9-0.9,4.2c0.5,1,2,3.3,2.5,4c-1.5,2.1-2.7,4.4-3.7,6.8
                                        c-0.9,0-2.8-0.1-4.1-0.1c-1.8,0-2.9,0.3-3.3,2.4c-0.4,2.1-0.5,2.8-0.9,6.4c-0.4,3.6,0.4,4.2,1.6,4.6c1,0.4,4.1,1.2,5.3,1.5
                                        c0.4,2.3,1,4.5,1.9,6.6c-0.5,0.4-1.5,1.4-2.9,2.9c-2.1,2.3-1.3,4-0.6,5c0.7,1,2.9,3.5,4.4,5.3c1.5,1.8,2.6,2.4,4.6,1.1
                                        c1.4-1,2.9-2,3.7-2.5c2,1.5,4.2,2.8,6.6,3.8c0,0.6-0.1,1.8-0.1,4.3c-0.1,3.8,3.1,3.8,7.8,4.3c4.6,0.6,5.5-0.2,5.9-1.7
                                        c0.3-1.1,0.9-3.8,1.1-5c2.7-0.4,5.2-1.1,7.6-2.1c0.7,0.7,1.9,1.9,3.2,3c1.7,1.6,2.7,1.6,4.1,0.6c1.4-0.9,4.5-3.5,6.4-5.2
                                        c1.9-1.7,1.2-3,0.6-4.1c-0.5-0.9-1.8-3-2.4-3.8c1.5-2,2.7-4.2,3.6-6.5c0.7,0,1.9,0,3.5,0c2.9,0,3.8-0.9,4-1.9c0.2-1,0.8-3.7,1-7.5
                                        c0.2-3.7-1-4.2-2.2-4.5c-1.2-0.3-4.6-0.8-4.6-0.8l0,0c-0.3-2.6-1-5-2-7.3c0.7-0.6,1.9-1.7,3.2-3c2-2,0.7-3.6,0-4.5
                                        c-0.7-0.9-2.7-3.6-4.2-5.6c-1.6-1.9-2.9-1.9-4.3-1.1c-1.4,0.8-3.6,2.5-3.6,2.5v0c-2.1-1.7-4.5-3.1-7-4.1c0.1-0.6,0.1-1.6,0.2-2.9
                                        c0.1-3.7-1.6-4.4-2.4-4.5c-0.8-0.1-6-0.8-8.2-0.8c-2.3,0-3.1,1.2-3.3,2.4c-0.1,0.9-0.6,3-0.9,4.1c-2.8,0.4-5.4,1.2-7.8,2.3
                                        c-0.6-0.6-1.7-1.6-2.6-2.6C851.9,414.4,850.5,413.9,849.2,414.8 M866.3,432.1c7-0.8,13.3,4.2,14.2,11.2c0.8,7-4.1,13.4-11.1,14.2
                                        c-7,0.8-13.3-4.2-14.2-11.2C854.3,439.3,859.3,432.9,866.3,432.1"/>
                                    <polygon class="st17" points="820.1,643.7 808.4,637.7 820.1,679.4 853.2,649.6 838.8,648.8 854.7,582.9 815.5,597.1 844.4,544.8 
                                        813.1,544.8 785,632 828.2,615.5 	"/>
                                    <path class="st17" d="M684.3,250c0,8.3,6.7,15,15,15c8.3,0,15-6.7,15-15c0-8.3-6.7-15-15-15C691,234.9,684.3,241.7,684.3,250"/>
                                    <path class="st17" d="M664.9,296.4l27.6-27.1c-5.1-1.8-9.3-5.6-11.7-10.5l-27.2,27l-10.8-10.1V306h32.5L664.9,296.4z"/>
                                    <path class="st17" d="M679.9,243.4c1.8-5.4,5.7-9.7,10.8-12.1l-25.6-25.4l10.4-10.2h-32.7v32.2l10.6-10.5L679.9,243.4z"/>
                                    <path class="st17" d="M718,258.5c-2.3,5-6.6,9-11.8,10.8l27.8,27.3l-10.1,9.4h32.8v-30.7l-11.2,10.4L718,258.5z"/>
                                    <path class="st17" d="M718.8,243.5l26.9-26.4l10.9,10.6v-32.1h-33L734,206l-25.7,25.5C713.2,233.9,717.1,238.3,718.8,243.5"/>
                                    <path class="st17" d="M207.2,425.2v-35.9c2.5,0,4.3-2.4,4.3-4.7c0-2.3-1.4-5.3-4.2-5.3h-36.1c-4.3,0-4.2,5.3-4.2,5.3
                                        c0,4.2,4.3,5,4.3,5v36c0,0-23.5,47-26.6,53.2c-3.1,6.2,0,8.9,3.3,8.9h82.2c5.6,0,5.9-4.6,3.7-9
                                        C231.8,474.4,207.2,425.2,207.2,425.2 M172.5,443.9l7.9-16.2v-38h17.4l0,5H191c-1.9,0-3.5,1.6-3.5,3.5c0,1.9,1.6,3.5,3.5,3.5h6.9
                                        l0,11.3H191c-1.9,0-3.5,1.6-3.5,3.5c0,1.9,1.6,3.5,3.5,3.5h6.9l0,7l8.7,17H172.5z"/>
                                    <path class="st17" d="M198.1,342.5c3.4,0,6.2-2.6,6.2-5.9c0-3.2-2.8-5.9-6.2-5.9c-3.4,0-6.2,2.6-6.2,5.9
                                        C192,339.9,194.7,342.5,198.1,342.5"/>
                                    <path class="st17" d="M196.9,353.9c-4.5,0-8.1,3.7-8.1,8.1c0,4.5,3.6,8.1,8.1,8.1c4.5,0,8.1-3.6,8.1-8.1
                                        C205,357.6,201.4,353.9,196.9,353.9"/>
                                    <path class="st17" d="M181.6,367.3c2.4,0,4.5-0.8,6.3-2.1c-0.4-1-0.6-2.1-0.6-3.2c0-3.5,1.9-6.5,4.6-8.2c-1.2-4.6-5.3-8-10.3-8
                                        c-5.9,0-10.7,4.8-10.7,10.7C170.9,362.5,175.7,367.3,181.6,367.3"/>
                                    <path class="st17" d="M328,268.6v-68.9c0-10.1-9.4-15.9-16.5-15.1c-7,0.8-14.4,5.9-14.4,16v67.9c-9.1,5.3-15.2,15.1-15.2,26.3
                                        c0,16.8,13.7,30.5,30.6,30.5c16.9,0,30.6-13.6,30.6-30.5C343.1,283.7,337,273.9,328,268.6 M312.5,319c-13.4,0-24.3-10.8-24.3-24.1
                                        c0-10,6.1-18.6,14.9-22.3v-6.7v-1.4v-63.4c0-5.2,2.6-10.2,8.7-10.6c6.1-0.4,10,3.7,10,10.3v62.7v2.3v6.7v0l0,0
                                        c8.8,3.6,14.9,12.2,14.9,22.3C336.7,308.2,325.9,319,312.5,319"/>
                                    <path class="st17" d="M316.3,275.8v-66.3h-7.7v66.3c-8.9,1.8-15.7,9.6-15.7,19.1c0,10.7,8.7,19.4,19.5,19.4
                                        c10.8,0,19.5-8.7,19.5-19.4C332,285.5,325.3,277.6,316.3,275.8"/>
                                    <rect x="339.1" y="202.6" class="st17" width="23.4" height="5.9"/>
                                    <rect x="339.1" y="229" class="st17" width="23.4" height="5.9"/>
                                    <rect x="339.1" y="255" class="st17" width="23.4" height="5.9"/>
                                    <rect x="339.1" y="241.6" class="st17" width="13.7" height="5.9"/>
                                    <rect x="339.1" y="215.6" class="st17" width="13.7" height="5.9"/>
                                    <path class="st17" d="M534,779.5c-1.1,2.5,0,5.3,2.5,6.4v0c0.2,0.1,8.3,3.8,16.2,11.6c3.9,3.9,7.8,8.8,10.6,14.8
                                        c2.9,6,4.7,13,4.8,21.4c0,1.1,0,2.2-0.1,3.3l0,0.1c-0.3,6.2-1.8,11.7-4,16.6c-3.3,7.4-8.5,13.5-13.8,18.2c-5.3,4.7-10.8,8-14.6,9.9
                                        c-2.4,1.2-3.4,4.1-2.3,6.5c1.2,2.4,4.1,3.4,6.5,2.3c6.1-3,15-8.6,22.8-17.4c3.9-4.4,7.5-9.5,10.2-15.5c2.7-5.9,4.5-12.7,4.9-20.1v0
                                        l0-0.1c0.1-1.3,0.1-2.6,0.1-3.9c0-10.1-2.4-18.7-5.9-26c-5.3-10.9-13.1-18.5-19.6-23.4c-6.5-4.9-11.7-7.2-11.9-7.3
                                        C537.9,775.9,535.1,777,534,779.5"/>
                                    <path class="st17" d="M546.5,860.7c4.9-5.4,9.3-13.1,10.7-23.4l0-0.2c0.1-1.4,0.2-2.7,0.2-4c0-6.4-1.6-12-4-16.8
                                        c-3.6-7.1-8.9-12.2-13.2-15.5c-4.3-3.4-7.8-5-8-5.1c-2.4-1.2-5.3-0.1-6.5,2.3c-1.2,2.4-0.1,5.3,2.3,6.5v0c0,0,5.2,2.6,10.2,7.5
                                        c2.5,2.4,4.9,5.5,6.6,9c1.8,3.5,2.9,7.5,2.9,12.2c0,0.9-0.1,1.9-0.2,2.9c-1.2,8.3-4.4,13.8-8.3,18.1c-3.8,4.2-8.3,7-11.7,9.1
                                        c-2.3,1.4-3,4.4-1.6,6.7c1.4,2.3,4.4,3,6.7,1.6C536.1,869.4,541.6,866.1,546.5,860.7"/>
                                    <path class="st17" d="M531.6,847.4c1.4-1.5,2.7-3.4,3.6-5.6c0.9-2.3,1.5-4.9,1.5-7.8v-0.2c0-3.2-0.9-6.1-2.1-8.5
                                        c-1.9-3.6-4.4-6.1-6.5-7.9c-2.1-1.7-3.7-2.7-3.9-2.8c-2.4-1.3-5.3-0.5-6.6,1.9c-1.3,2.4-0.5,5.3,1.9,6.6h0c0,0,2.2,1.3,4.1,3.3
                                        c1,1,1.9,2.2,2.5,3.4c0.6,1.3,1,2.5,1,4v0.1c0,1.7-0.3,3-0.7,4.1c-0.7,1.6-1.7,2.8-2.9,3.8c-1.2,1-2.5,1.6-3.4,2
                                        c-2.5,1-3.7,3.9-2.6,6.4c1,2.5,3.9,3.7,6.4,2.6C525.7,852,528.8,850.4,531.6,847.4"/>
                                    <path class="st17" d="M497.5,786.5c-2.8,3.2-26.2,26.5-26.2,26.5h-21.2c-5.3,0-5.2,5.6-5.2,5.6v29.4c0,4.5,2.8,5.8,5.2,5.8h21
                                        c0,0,21.8,22.3,24.8,25.4c3,3.1,4.2,3.2,6.2,2.8c2-0.4,4.1-1.4,4.1-6.4v-83.9C506.2,784.8,500.3,783.3,497.5,786.5"/>
                                    <path class="st17" d="M338.2,755.4c5.2,6.4,3.1,15.3,3.1,15.3h48.2c1.8,0,3.5-0.8,3.4-5.8c-0.6-9.8-2.6-16.5-2.6-16.5
                                        c-5.9-25.4-28.2-40.1-31.2-42c-3.1-1.9-5.3-2-7.1,1c-1.8,3-23.6,41-23.6,41C334.5,750.4,338.2,755.4,338.2,755.4"/>
                                    <path class="st17" d="M255.6,770.7c3.5,0,47.3,0.1,47.3,0.1c-1.3-6.2,1.1-11.9,1.1-11.9c2.9-7.7,11.7-10.3,11.7-10.3
                                        s-23.1-40.2-24-41.8c-0.9-1.6-2.5-2.7-6.7-0.1c-8.2,5.4-13,10.5-13,10.5c-19.1,17.7-20.7,44.4-20.9,48
                                        C251.1,768.6,252.2,770.6,255.6,770.7"/>
                                    <path class="st17" d="M335,781.7c-4.7,4.3-10.9,5-10.9,5c-8.1,1.3-14.8-4.9-14.8-4.9s-23.1,40.2-24.1,41.8
                                        c-0.9,1.6-1.1,3.5,3.3,5.8c8.8,4.3,15.6,5.9,15.6,5.9c24.9,7.6,48.8-4.4,52-6.1c3.2-1.7,4.3-3.6,2.6-6.6
                                        C357,819.6,335,781.7,335,781.7"/>
                                    <path class="st17" d="M310.1,766.8c0,6.7,5.4,12.1,12.1,12.1c6.7,0,12.1-5.4,12.1-12.1c0-6.6-5.4-12-12.1-12
                                        C315.6,754.8,310.1,760.2,310.1,766.8"/>
                                    <path class="st17" d="M244.6,584c2.8-26.4-17-39.9-21.6-42.5c-4.6-2.6-8.3-3.9-9.3-1.8c-1,2.1-0.5,3.3,2.1,4.8
                                        c7.9,4.9,14.1,13.9,13.7,23.5c-0.1,3.4-0.9,6.5-2,9.4c-6.9-5.6-15.6-9-25.2-9c-9.7,0-18.6,3.4-25.5,9.2c-1.2-3.1-1.8-6.4-1.8-9.9
                                        c0-14.3,11.8-22.4,11.8-22.4s1-0.7,2.7-1.8c1.8-1.1,2.1-2.2,1.5-3.3c-0.6-1.1-1.3-1.9-3.9-1.1c-2.6,0.8-5.8,2.4-11.4,6.6
                                        c-20.1,15.8-16,38.6-16,38.6c-28.2,13.3-25.5,39.8-25.1,43.2c0.4,3.4,1.2,5.8,4,5.3c2.8-0.5,2.6-2.5,2.8-4.9
                                        c0.2-2.4,0.7-7.7,3.6-13.1c5.1-8.5,11.8-11.8,17.8-12.8c-0.3,2.1-0.5,4.2-0.5,6.4c0,17.3,11,32,26.4,37.5l-0.1,0.1
                                        c-15.1,16.5-32.2,7.6-34.8,6.1c-2.6-1.5-3.7-1.3-4.5-0.3c-0.8,1-1.2,2.5-0.2,3.6c0.9,1,7.4,6.4,13.3,8c22.8,7.7,39.9-5.8,39.9-5.8
                                        c27.5,18.9,50.3,0.1,51.9-1.2c1.6-1.3,2.5-2.3,1.3-4.2c-1.2-1.9-2.3-1.5-6.2,0.9c-11.3,5.6-24.1,2.2-30.8-4.3
                                        c-1-0.9-1.9-1.9-2.7-2.9c15.3-5.6,26.3-20.2,26.3-37.4c0-2.1-0.2-4.1-0.5-6.2c2.6,0.4,4.9,1.1,6.6,1.9
                                        c15.9,7.8,15.8,23.5,15.8,23.5c-0.3,5.4,2.2,5.4,2.2,5.4c3.6,0,4.2-4.1,3.5-14.6C267.3,593.3,244.6,584,244.6,584 M202.3,582
                                        c6.7,0,12.7,2.5,17.3,6.6c-4.9,4.3-11,6.7-16.6,6.8c-7.4-0.1-13.7-2.6-18.4-6.6C189.4,584.6,195.5,582,202.3,582 M194.7,629.3
                                        c-0.1,1.4-0.3,2.8-0.5,4c-10.5-3.4-18.2-13.3-18.2-25c0-1.8,0.2-3.6,0.5-5.3C191.4,608.6,194.9,623.1,194.7,629.3 M202.3,617.8
                                        c-5.3,0-9.6-4.3-9.6-9.6c0-5.3,4.3-9.6,9.6-9.6c5.3,0,9.6,4.3,9.6,9.6C211.9,613.5,207.6,617.8,202.3,617.8 M210.4,633.3
                                        c-1.4-8.6,1.1-17.7,7.4-23.8c3.3-3.1,6.8-5.1,10.3-6.3c0.3,1.7,0.5,3.4,0.5,5.1C228.6,620,221,629.9,210.4,633.3"/>
                                    <path class="st17" d="M573.6,229.1c-2.2-6.6-18.4-55.9-18.4-55.9c-2.2-6.8-4.6-7-13.3-7h-14.2c1.4-2.7,2.3-5.8,2.3-9.1
                                        c0-10.4-8.2-18.8-18.2-18.8c-10.1,0-18.2,8.4-18.2,18.8c0,3.3,0.8,6.4,2.3,9.1H476c-3.1,0-5.7,1.4-6.9,4.8
                                        c-1.2,3.3-15.3,47.8-18.6,57.7c-3.2,9.8,3.5,11.4,6.7,11.4h109.5C572.7,240.1,575.8,235.7,573.6,229.1 M503.6,218.8l-5.8-10.8H495
                                        v10.8h-6.5v-26.7h6.5v10.7h2.6l5.5-10.7h6.6l-7,12.9l7.7,13.7H503.6z M502,156.7c0-5.3,4.4-9.6,9.8-9.6c5.4,0,9.8,4.3,9.8,9.6
                                        c0,5.3-4.4,9.6-9.8,9.6C506.4,166.3,502,162,502,156.7 M537.4,208.6v0.5v9.6h-5.5v-2c0,0-3.1,2.7-7.8,2
                                        c-4.7-0.7-11.8-3.6-11.9-13.3c0.3-6.4,4.5-13,12.5-13.5c8-0.5,11.2,3.2,11.2,3.2l-2.8,4.7c0,0-3.2-3-8.4-2.1c-5.3,0.9-6.2,5-6,8.5
                                        c0.1,3.5,2.8,7.4,8.3,7.5c2.6,0,4.2-1.3,5-2.3v-2.3h-3.7v-5.5h9.2V208.6z"/>
                                </g>
                                <text transform="matrix(1 0 0 1 374.7251 488.0718)"><tspan x="0" y="0" class="st18 st6 st19 st20">ENERG</tspan><tspan x="232.2" y="0" class="st18 st6 st19">Y </tspan></text>
                                <text transform="matrix(1 0 0 1 350.0171 570.3262)"><tspan x="0" y="0" class="st18 st6 st19 st20">SOURCE</tspan><tspan x="282" y="0" class="st18 st6 st19">S</tspan></text>
                                </svg>

                        </div>
                    </td>
                    <td style="padding: 10px; background: rgba(0, 86, 180, 0.16); width: 80%">
                        <table style="border-collapse: collapse; padding: 20px">
                            <tr class="motion-desc common-desc">
                                <td>
                                    <h3>Motion: </h3>
                                    <p>The rapid, forward motion of the reach rod did not allow much time to react. By introducing at risk hand and body placement, the worker was exposed to the motion when something unexpected happened.</p>
                                </td>
                            </tr>
                            <tr class="gravity-desc common-desc">
                                <td>
                                    <h3>Gravity: </h3>
                                    <p>This energy source was present as a hazard in a number of ways. The reach rod and control box are heavy. The injured worker noticed two co-workers struggling and jumped in to help. The weight and distance travelled
                                        with the equipment made maneuvering it difficult. During the initial seconds of the incident, the equipment was thankfully shut down but gravity caused the entire unit to rest on the workers inner thigh, causing
                                        bruising, soreness and discomfort. </p>
                                </td>
                            </tr>
                            <tr class="mechanical-desc common-desc">
                                <td>
                                    <h3>Mechanical: </h3>
                                    <p>The IWM was set to autotravel and the goose was transmitting energy through powered forward motion to components of the system. Without quick human intervention, this mechanical energy hazard would have continued forward,
                                        and caused serious injury to the worker in the line of fire between the pipe and the control box. September.
                                    </p>
                                </td>
                            </tr>
                            <tr class="electrical-desc common-desc">
                                <td>
                                    <h3>Electrical: </h3>
                                    <p>The rapid, forward motion of the reach rod did not allow much time to react. By introducing at risk hand and body placement, the worker was exposed to the motion when something unexpected happened.</p>
                                </td>
                            </tr>
                            <tr class="pressure-desc common-desc">
                                <td>
                                    <h3>Pressure: </h3>
                                    <p>The rapid, forward motion of the reach rod did not allow much time to react. By introducing at risk hand and body placement, the worker was exposed to the motion when something unexpected happened.</p>
                                </td>
                            </tr>
                            <tr class="sound-desc common-desc">
                                <td>
                                    <h3>Sound: </h3>
                                    <p>The rapid, forward motion of the reach rod did not allow much time to react. By introducing at risk hand and body placement, the worker was exposed to the motion when something unexpected happened.</p>
                                </td>
                            </tr>
                            <tr class="radiation-desc common-desc">
                                <td>
                                    <h3>Radiation: </h3>
                                    <p>The rapid, forward motion of the reach rod did not allow much time to react. By introducing at risk hand and body placement, the worker was exposed to the motion when something unexpected happened.</p>
                                </td>
                            </tr>
                            <tr class="biological-desc common-desc">
                                <td>
                                    <h3>Biological: </h3>
                                    <p>The rapid, forward motion of the reach rod did not allow much time to react. By introducing at risk hand and body placement, the worker was exposed to the motion when something unexpected happened.</p>
                                </td>
                            </tr>
                            <tr class="chemical-desc common-desc">
                                <td>
                                    <h3>Chemical: </h3>
                                    <p>The rapid, forward motion of the reach rod did not allow much time to react. By introducing at risk hand and body placement, the worker was exposed to the motion when something unexpected happened.</p>
                                </td>
                            </tr>
                            <tr class="temperature-desc common-desc">
                                <td>
                                    <h3>Temperature: </h3>
                                    <p>The rapid, forward motion of the reach rod did not allow much time to react. By introducing at risk hand and body placement, the worker was exposed to the motion when something unexpected happened.</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

            </tbody>
        </table>
        <table style="width: 100%; padding: 20px">
            <tbody>
                <tr>
                    <td>
                        <h2>What Can We Do?</h2>
                        <h3>Learning Opportunites</h3>
                        <p>On September 10, 2018 at 2:00 pm the set up crew was moving the internal welding machine control box to the next joint of pipe. This is normally done by 2 people holding up the control box as it is propelled forward with the auto
                            traveler until it can be set inside the next joint of pipe.</p>
                        <ul>
                            <li>Science has proven this technique can help workers identify over 85% of hazards</li>
                            <li>Discuss and point out energy sources at the worksite often, ask questions and share personal experience.</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <img src="" id="image" alt="">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#motion').on('click', function() {
                $('.motion-desc').fadeToggle();
                $(this).toggleClass('active');
            })
            $('#mechanical').on('click', function() {
                $('.mechanical-desc').fadeToggle();
                $(this).toggleClass('active');
            })
            $('#electrical').on('click', function() {
                $('.electrical-desc').fadeToggle();
                $(this).toggleClass('active');
            })
            $('#pressure').on('click', function() {
                $('.pressure-desc').fadeToggle();
                $(this).toggleClass('active');
            })
            $('#sound').on('click', function() {
                $('.sound-desc').fadeToggle();
                $(this).toggleClass('active');
            })
            $('#radiation').on('click', function() {
                $('.radiation-desc').fadeToggle();
                $(this).toggleClass('active');
            })
            $('#biological').on('click', function() {
                $('.biological-desc').fadeToggle();
                $(this).toggleClass('active');
            })
            $('#chemical').on('click', function() {
                $('.chemical-desc').fadeToggle();
                $(this).toggleClass('active');
            })
            $('#temperature').on('click', function() {
                $('.temperature-desc').fadeToggle();
                $(this).toggleClass('active');
            })
            $('#gravity').on('click', function() {
                $('.gravity-desc').fadeToggle();
                $(this).toggleClass('active');
            })
        })

        $('body').on('click', function() {
            window.scrollTo(0, 20);
            html2canvas(document.querySelector("#capture"), {
                // letterRendering: 1,
                allowTaint: true,
                scale: 0.9
            }).then(canvas => {
                // document.body.removeChild(canvas);
                // var wheel_img = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
                // document.body.appendChild(wheel_img);
                // window.location.href = wheel_img;

                $('#image').attr("src", $(canvas).get(0).toDataURL("img/png"));
            });
        });
    </script>
</body>

</html>