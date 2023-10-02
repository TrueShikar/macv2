<!--
* Copyright 2021-2023 SnehTV, Inc.
* Licensed under MIT (https://github.com/mitthu786/TS-JioTV/blob/main/LICENSE)
* Created By : TechieSneh
-->
<?php error_reporting(0); ?>
<html lang="en">

<head>
    <title><?php echo $_GET['n']; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="ENJOY FREE LIVE TV">
    <meta name="keywords" content="LIVETV, SPORTS, MOVIES, MUSIC">
    <meta name="author" content="TSNEH">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css" />
    <script src="https://cdn.plyr.io/3.6.3/plyr.js"></script>

    <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/37fVLxB/f4027915ec9335046755d489a14472f2.png">
    <script type='text/javascript' src='https://content.jwplatform.com/libraries/IDzF9Zmk.js'></script>

</head>

<body bgcolor="white">
    <style>
        img {
            width: 100%;
            height: auto;
        }
        .jw-svg-icon-pause {
            background-image: url("");
        }

        [class~=jw-svg-icon-pause] path,
        [class~=jw-svg-icon-replay] path,
        [class~=jw-svg-icon-next] path,
        .jw-state-paused .jw-svg-icon-play path,
        [class~=jw-svg-icon-volume-0] path,
        [class~=jw-svg-icon-buffer] path,
        [class~=jw-svg-icon-volume-100] path,
        [class~=jw-svg-icon-rewind] path {
            display: none;
        }

        html {
            font-family: Poppins;
        }

        [class~=jw-svg-icon-fullscreen-on],
        [class~=jw-svg-icon-fullscreen-off],
        .jw-svg-icon-pause,
        [class~=jw-svg-icon-cc-off],
        .jw-svg-icon-close,
        [class~=jw-state-paused] [class~=jw-svg-icon-play],
        .jw-svg-icon-rewind,
        .jw-svg-icon-volume-100,
        [class~=jw-svg-icon-replay],
        [class~=jw-svg-icon-playlist],
        [class~=jw-svg-icon-buffer],
        [class~=jw-svg-icon-quality-100],
        [class~=jw-svg-icon-volume-0],
        [class~=jw-svg-icon-settings],
        [class~=jw-svg-icon-next] {
            background-size: contain;
        }

        [class~=jw-svg-icon-quality-100],
        [class~=jw-svg-icon-replay],
        .jw-svg-icon-pause,
        .jw-svg-icon-rewind,
        [class~=jw-svg-icon-buffer],
        [class~=jw-svg-icon-fullscreen-on],
        .jw-svg-icon-close,
        [class~=jw-svg-icon-playlist],
        [class~=jw-svg-icon-cc-off],
        .jw-svg-icon-volume-100,
        [class~=jw-state-paused] [class~=jw-svg-icon-play],
        [class~=jw-svg-icon-next],
        [class~=jw-svg-icon-settings],
        [class~=jw-svg-icon-fullscreen-off],
        [class~=jw-svg-icon-volume-0] {
            background-repeat: no-repeat;
        }

        [class~=jw-svg-icon-buffer] {
            background-image: url("");
        }

        html {
            background: #fff;
        }

        [class~=jw-icon-playback]:hover [class~=jw-svg-icon-pause] {
            background-image: url("");
        }

        [class~=jw-icon-replay]:hover [class~=jw-svg-icon-replay] {
            background-image: url("");
        }

        [class~=jw-svg-icon-replay] {
            background-image: url("");
        }

        .jw-svg-icon-rewind {
            background-image: url("");
        }

        .loading-text span:nth-child(1),
        .loading-text span:nth-child(4),
        [class~=loading-text] span:nth-child(2),
        [class~=loading-text] span:nth-child(3) {
            filter: blur(0px);
        }

        [class~=jw-state-paused] [class~=jw-svg-icon-play] {
            background-image: url("");
        }

        .jw-state-paused .jw-icon-playback:hover .jw-svg-icon-play {
            background-image: url("");
        }

        [class~=jw-svg-icon-next] {
            background-image: url("");
        }

        html {
            margin-left: 0;
        }

        .loading-text span:nth-child(1) {
            animation: blur-text 1.5s 0s infinite linear alternate;
        }

        [class~=jw-icon-rewind]:hover [class~=jw-svg-icon-rewind] {
            background-image: url("");
        }

        [class~=jw-icon-next]:hover [class~=jw-svg-icon-next] {
            background-image: url("");
        }

        .jw-svg-icon-volume-100 {
            background-image: url("");
        }

        html {
            margin-bottom: 0;
        }

        .jw-icon-volume:hover .jw-svg-icon-volume-100 {
            background-image: url("");
        }

        [class~=jw-svg-icon-volume-0] {
            background-image: url("");
        }

        [class~=jw-svg-icon-cc-off] {
            background-image: url("");
        }

        [class~=loading-text] span:nth-child(2) {
            animation: blur-text 1.5s .2s infinite linear alternate;
        }

        [class~=jw-icon-volume]:hover [class~=jw-svg-icon-volume-0] {
            background-image: url("");
        }

        html {
            margin-right: 0;
        }

        [class~=jw-svg-icon-playlist] {
            background-image: url("");
        }

        [class~=loading-text] span:nth-child(3) {
            animation: blur-text 1.5s .4s infinite linear alternate;
        }

        html {
            margin-top: 0;
        }

        [class~=jw-svg-icon-close] path,
        .jw-svg-icon-cc-off path,
        [class~=jw-svg-icon-playlist] path,
        [class~=jw-svg-icon-quality-100] path,
        [class~=jw-svg-icon-fullscreen-off] path,
        [class~=jw-svg-icon-settings] path,
        [class~=jw-svg-icon-fullscreen-on] path {
            display: none;
        }

        [class~=jw-icon-cc-off]:hover [class~=jw-svg-icon-cc-off] {
            background-image: url("");
        }

        [class~=jw-svg-icon-settings] {
            background-image: url("");
        }

        [class~=jw-svg-icon-quality-100] {
            background-image: url("");
        }

        [class~=jw-playlist-btn]:hover [class~=jw-svg-icon-playlist] {
            background-image: url("");
        }

        #myElement {
            position: reletive;
        }

        .jw-svg-icon-close {
            background-image: url("");
        }

        [class~=jw-icon-settings]:hover [class~=jw-svg-icon-settings] {
            background-image: url("");
        }

        [class~=jw-svg-icon-fullscreen-on] {
            background-image: url("");
        }

        .jw-settings-quality:hover .jw-svg-icon-quality-100 {
            background-image: url("");
        }

        [class~=jw-settings-close]:hover [class~=jw-svg-icon-close] {
            background-image: url("");
        }

        #myElement {
            width: 100% !important;
        }

        html {
            padding-left: 0;
        }

        .loading-text span:nth-child(4) {
            animation: blur-text 1.5s .6s infinite linear alternate;
        }

        [class~=loading-text] span:nth-child(7),
        [class~=loading-text] span:nth-child(6),
        [class~=loading-text] span:nth-child(8),
        [class~=loading-text] span:nth-child(5) {
            filter: blur(0px);
        }

        html {
            padding-bottom: 0;
        }

        #myElement {
            height: 100% !important;
        }

        [class~=loading-text] span {
            display: inline-block;
        }

        [class~=loading-text] span {
            margin-left: .052083333in;
        }

        [class~=loading-text] span:nth-child(5) {
            animation: blur-text 1.5s .8s infinite linear alternate;
        }

        [class~=jw-svg-icon-fullscreen-off] {
            background-image: url("");
        }

        [class~=loading-text] span:nth-child(6) {
            animation: blur-text 1.5s 1s infinite linear alternate;
        }

        [class~=loading] {
            position: fixed;
        }

        [class~=loading],
        .loading-text {
            top: 0;
        }

        [class~=loading-text] span {
            margin-bottom: 0;
        }

        html {
            padding-right: 0;
        }

        [class~=jw-icon-fullscreen]:hover [class~=jw-svg-icon-fullscreen-on] {
            background-image: url("");
        }

        .loading-text,
        [class~=loading] {
            left: 0;
        }

        [class~=loading],
        .loading-text {
            width: 100%;
        }

        [class~=loading] {
            height: 100%;
        }

        [class~=loading] {
            background: #fff;
        }

        [class~=loading] {
            z-index: 9999;
        }

        .loading-text {
            position: absolute;
        }

        [class~=loading-text] span {
            margin-right: .052083333in;
        }

        html {
            padding-top: 0;
        }

        [class~=loading-text] span {
            margin-top: 0;
        }

        [class~=loading-text] span {
            font-size: 37.5pt;
        }

        [class~=loading-text] span {
            font-weight: bold;
        }

        [class~=loading-text] span {
            color: #fff;
        }

        .loading-text {
            bottom: 0;
        }

        [class~=loading-text] span {
            font-family: "Quattrocento Sans", sans-serif;
        }

        .loading-text {
            right: 0;
        }

        [class~=jw-icon-fullscreen]:hover [class~=jw-svg-icon-fullscreen-off] {
            background-image: url("");
        }

        .loading-text {
            margin-left: auto;
        }

        .loading-text {
            margin-bottom: auto;
        }

        .loading-text {
            margin-right: auto;
        }

        .loading-text {
            margin-top: auto;
        }

        .loading-text {
            text-align: center;
        }

        [class~=loading-text] span:nth-child(7) {
            animation: blur-text 1.5s 1.2s infinite linear alternate;
        }

        .loading-text {
            height: 100px;
        }

        .loading-text {
            line-height: 1.041666667in;
        }

        [class~=loading-text] span:nth-child(8) {
            animation: blur-text 1.5s 1.4s infinite linear alternate;
        }

        @keyframes blur-text {
            0% {
                filter: blur(0px);
            }

            100% {
                filter: blur(4px);
            }
        }

        [class~=scrollbar-track-y] {
            background: #131720 !important;
        }

        [class~=scrollbar-track-y] {
            top: .625pc !important;
        }

        [class~=scrollbar-track-y],
        [class~=scrollbar-track-x] {
            bottom: 10px !important;
        }

        [class~=scrollbar-track-y] {
            height: auto !important;
        }

        [class~=scrollbar-track-y],
        .scrollbar-thumb-y {
            width: 4px !important;
        }

        .scrollbar-thumb-y,
        [class~=scrollbar-track-x],
        [class~=scrollbar-thumb-x],
        [class~=scrollbar-track-y] {
            border-radius: .041666667in !important;
        }

        #videoContainer {
            position: absolute;
        }

        [class~=scrollbar-track-x],
        [class~=scrollbar-track-y] {
            right: 7.5pt !important;
        }

        [class~=scrollbar-track-y],
        [class~=scrollbar-track-x] {
            overflow: hidden;
        }

        .scrollbar-thumb-y {
            background: #000000 !important;
        }

        [class~=scrollbar-track-x] {
            background: #131720 !important;
        }

        [class~=scrollbar-track-x] {
            left: 10px !important;
        }

        [class~=scrollbar-track-x],
        [class~=scrollbar-thumb-x] {
            height: 4px !important;
        }

        [class~=scrollbar-track-x] {
            width: auto !important;
        }

        [class~=scrollbar-thumb-x] {
            background: #000000 !important;
        }

        #videoContainer {
            width: 100% !important;
        }

        #videoContainer {
            height: 240px !important;
        }
        .container {
            position: relative;
            overflow: hidden;
            width: 100%;
            padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
        }

        /* Then style the iframe to fit in the container div with full height and width */
        .responsive-iframe {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
    </style>
<img src = "https://i.ibb.co/LknbmZs/image.png"> </img>




<div class="container">
  <iframe class="responsive-iframe" src="iframe.php?id=<?php echo $_GET['id']; ?>&p=<?php echo $_GET['p']; ?>&n=<?php echo $_GET['n']; ?>"></iframe>
</div>




<p  ><h2 style="font-family:Bradley Hand, cursive"><center> <?php echo $_GET['n']; ?> </center></h2>
<br>
Iframe Source: <p><strong></strong> <span border = "1" class="textarea" role="textbox" contenteditable>http://watch-it.live/playlist/iframe.php?id=<?php echo $_GET['id']; ?>&n=<?php echo $_GET['n']; ?></span></p>
<br><br>
<h2 style="font-family:Bradley Hand, cursive"> Script for sell <a href = 'https://t.me/ipl_stream_support_bot'>@ContactUs</a> </h2>
</h3></p>
    <br>
    <ins data-ad-format="auto" class="adsbygoogle adsbygoogle-noablate" data-ad-client="ca-pub-6949365608691435" data-adsbygoogle-status="done" style="display: block; margin: auto; background-color: transparent; height: 300px;" data-ad-status="filled"><div id="aswift_3_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 300px; width: 360px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: visible;"><iframe id="aswift_1" name="aswift_1" style="left:0;position:absolute;top:0;border:0;width:360px;height:300px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="360" height="300" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-6949365608691435&amp;output=html&amp;h=300&amp;slotname=9093952817&amp;adk=1241010510&amp;adf=1294301629&amp;pi=t.ma~as.9093952817&amp;w=360&amp;rafmt=11&amp;format=360x300&amp;url=https://yo.fan/shikari&amp;host=ca-host-pub-8726151893822553&amp;fwrattr=true&amp;wgl=1&amp;fwr=1&amp;fwrattr=true&amp;rpe=1&amp;resp_fmts=3&amp;sfro=1&amp;wgl=1&amp;dt=1691179907755&amp;bpp=10&amp;bdt=305&amp;idt=289&amp;shv=r20230802&amp;mjsv=m202308010102&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;prev_fmts=0x0&amp;nras=1&amp;correlator=3869567246326&amp;frm=20&amp;pv=1&amp;ga_vid=1384795695.1691178593&amp;ga_sid=1691179908&amp;ga_hid=94239904&amp;ga_fc=1&amp;u_tz=330&amp;u_his=11&amp;u_h=780&amp;u_w=360&amp;u_ah=780&amp;u_aw=360&amp;u_cd=24&amp;u_sd=3&amp;dmc=4&amp;adx=0&amp;ady=1481&amp;biw=360&amp;bih=620&amp;scr_x=0&amp;scr_y=0&amp;eid=44759926%2C44759842%2C44759875%2C31076482%2C31076509%2C31076653%2C31076731%2C44785295%2C31076205&amp;oid=2&amp;pvsid=1054268048300048&amp;tmod=37644952&amp;uas=0&amp;nvt=1&amp;ref=https://yo.fan&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C360%2C0%2C360%2C620%2C360%2C620&amp;vis=1&amp;rsz=%7C%7CeoEbr%7C&amp;abl=CS&amp;pfx=0&amp;fu=128&amp;bc=31&amp;ifi=2&amp;uci=a!2&amp;btvi=1&amp;fsb=1&amp;xpc=nz5SdMYM3E&amp;p=https://yo.fan&amp;dtd=316" data-google-container-id="a!2" data-load-complete="true"></iframe></div></ins>
<ins data-ad-format="auto" class="adsbygoogle adsbygoogle-noablate" data-ad-client="ca-pub-6949365608691435" data-adsbygoogle-status="done" style="display: block; margin: auto; background-color: transparent; height: 300px;" data-ad-status="filled"><div id="aswift_3_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 300px; width: 360px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: visible;"><iframe id="aswift_1" name="aswift_1" style="left:0;position:absolute;top:0;border:0;width:360px;height:300px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="360" height="300" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-6949365608691435&amp;output=html&amp;h=300&amp;slotname=9093952817&amp;adk=1241010510&amp;adf=1294301629&amp;pi=t.ma~as.9093952817&amp;w=360&amp;rafmt=11&amp;format=360x300&amp;url=https://yo.fan/shikari&amp;host=ca-host-pub-8726151893822553&amp;fwrattr=true&amp;wgl=1&amp;fwr=1&amp;fwrattr=true&amp;rpe=1&amp;resp_fmts=3&amp;sfro=1&amp;wgl=1&amp;dt=1691179907755&amp;bpp=10&amp;bdt=305&amp;idt=289&amp;shv=r20230802&amp;mjsv=m202308010102&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;prev_fmts=0x0&amp;nras=1&amp;correlator=3869567246326&amp;frm=20&amp;pv=1&amp;ga_vid=1384795695.1691178593&amp;ga_sid=1691179908&amp;ga_hid=94239904&amp;ga_fc=1&amp;u_tz=330&amp;u_his=11&amp;u_h=780&amp;u_w=360&amp;u_ah=780&amp;u_aw=360&amp;u_cd=24&amp;u_sd=3&amp;dmc=4&amp;adx=0&amp;ady=1481&amp;biw=360&amp;bih=620&amp;scr_x=0&amp;scr_y=0&amp;eid=44759926%2C44759842%2C44759875%2C31076482%2C31076509%2C31076653%2C31076731%2C44785295%2C31076205&amp;oid=2&amp;pvsid=1054268048300048&amp;tmod=37644952&amp;uas=0&amp;nvt=1&amp;ref=https://yo.fan&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C360%2C0%2C360%2C620%2C360%2C620&amp;vis=1&amp;rsz=%7C%7CeoEbr%7C&amp;abl=CS&amp;pfx=0&amp;fu=128&amp;bc=31&amp;ifi=2&amp;uci=a!2&amp;btvi=1&amp;fsb=1&amp;xpc=nz5SdMYM3E&amp;p=https://yo.fan&amp;dtd=316" data-google-container-id="a!2" data-load-complete="true"></iframe></div></ins>
<ins data-ad-format="auto" class="adsbygoogle adsbygoogle-noablate" data-ad-client="ca-pub-6949365608691435" data-adsbygoogle-status="done" style="display: block; margin: auto; background-color: transparent; height: 300px;" data-ad-status="filled"><div id="aswift_3_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 300px; width: 360px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: visible;"><iframe id="aswift_1" name="aswift_1" style="left:0;position:absolute;top:0;border:0;width:360px;height:300px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="360" height="300" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-6949365608691435&amp;output=html&amp;h=300&amp;slotname=9093952817&amp;adk=1241010510&amp;adf=1294301629&amp;pi=t.ma~as.9093952817&amp;w=360&amp;rafmt=11&amp;format=360x300&amp;url=https://yo.fan/shikari&amp;host=ca-host-pub-8726151893822553&amp;fwrattr=true&amp;wgl=1&amp;fwr=1&amp;fwrattr=true&amp;rpe=1&amp;resp_fmts=3&amp;sfro=1&amp;wgl=1&amp;dt=1691179907755&amp;bpp=10&amp;bdt=305&amp;idt=289&amp;shv=r20230802&amp;mjsv=m202308010102&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;prev_fmts=0x0&amp;nras=1&amp;correlator=3869567246326&amp;frm=20&amp;pv=1&amp;ga_vid=1384795695.1691178593&amp;ga_sid=1691179908&amp;ga_hid=94239904&amp;ga_fc=1&amp;u_tz=330&amp;u_his=11&amp;u_h=780&amp;u_w=360&amp;u_ah=780&amp;u_aw=360&amp;u_cd=24&amp;u_sd=3&amp;dmc=4&amp;adx=0&amp;ady=1481&amp;biw=360&amp;bih=620&amp;scr_x=0&amp;scr_y=0&amp;eid=44759926%2C44759842%2C44759875%2C31076482%2C31076509%2C31076653%2C31076731%2C44785295%2C31076205&amp;oid=2&amp;pvsid=1054268048300048&amp;tmod=37644952&amp;uas=0&amp;nvt=1&amp;ref=https://yo.fan&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C360%2C0%2C360%2C620%2C360%2C620&amp;vis=1&amp;rsz=%7C%7CeoEbr%7C&amp;abl=CS&amp;pfx=0&amp;fu=128&amp;bc=31&amp;ifi=2&amp;uci=a!2&amp;btvi=1&amp;fsb=1&amp;xpc=nz5SdMYM3E&amp;p=https://yo.fan&amp;dtd=316" data-google-container-id="a!2" data-load-complete="true"></iframe></div></ins>
<ins data-ad-format="auto" class="adsbygoogle adsbygoogle-noablate" data-ad-client="ca-pub-6949365608691435" data-adsbygoogle-status="done" style="display: block; margin: auto; background-color: transparent; height: 300px;" data-ad-status="filled"><div id="aswift_3_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 300px; width: 360px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: visible;"><iframe id="aswift_1" name="aswift_1" style="left:0;position:absolute;top:0;border:0;width:360px;height:300px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="360" height="300" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-6949365608691435&amp;output=html&amp;h=300&amp;slotname=9093952817&amp;adk=1241010510&amp;adf=1294301629&amp;pi=t.ma~as.9093952817&amp;w=360&amp;rafmt=11&amp;format=360x300&amp;url=https://yo.fan/shikari&amp;host=ca-host-pub-8726151893822553&amp;fwrattr=true&amp;wgl=1&amp;fwr=1&amp;fwrattr=true&amp;rpe=1&amp;resp_fmts=3&amp;sfro=1&amp;wgl=1&amp;dt=1691179907755&amp;bpp=10&amp;bdt=305&amp;idt=289&amp;shv=r20230802&amp;mjsv=m202308010102&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;prev_fmts=0x0&amp;nras=1&amp;correlator=3869567246326&amp;frm=20&amp;pv=1&amp;ga_vid=1384795695.1691178593&amp;ga_sid=1691179908&amp;ga_hid=94239904&amp;ga_fc=1&amp;u_tz=330&amp;u_his=11&amp;u_h=780&amp;u_w=360&amp;u_ah=780&amp;u_aw=360&amp;u_cd=24&amp;u_sd=3&amp;dmc=4&amp;adx=0&amp;ady=1481&amp;biw=360&amp;bih=620&amp;scr_x=0&amp;scr_y=0&amp;eid=44759926%2C44759842%2C44759875%2C31076482%2C31076509%2C31076653%2C31076731%2C44785295%2C31076205&amp;oid=2&amp;pvsid=1054268048300048&amp;tmod=37644952&amp;uas=0&amp;nvt=1&amp;ref=https://yo.fan&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C360%2C0%2C360%2C620%2C360%2C620&amp;vis=1&amp;rsz=%7C%7CeoEbr%7C&amp;abl=CS&amp;pfx=0&amp;fu=128&amp;bc=31&amp;ifi=2&amp;uci=a!2&amp;btvi=1&amp;fsb=1&amp;xpc=nz5SdMYM3E&amp;p=https://yo.fan&amp;dtd=316" data-google-container-id="a!2" data-load-complete="true"></iframe></div></ins>

</body>

</html>
