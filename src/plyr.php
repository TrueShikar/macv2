<html>
<head>
<title><?php echo $_REQUEST["id"]; ?> | LiveTV</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<link rel="shortcut icon" type="image/x-icon" href="">
<link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css" />
<link href="https://fonts.googleapis.com/css?family=Poppins|Quattrocento+Sans" rel="stylesheet"/>
<script src="https://cdn.plyr.io/3.6.3/plyr.js"></script>
<script src="https://cdn.jsdelivr.net/npm/hls.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="assets/js/hide-banner.js"></script>

<style>
html {
  font-family: Poppins;
  background: #000;
  margin: 0;
  padding: 0
}

.loading {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #000;
        z-index: 9999;
    }
    
    .loading-text {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        text-align: center;
        width: 100%;
        height: 100px;
        line-height: 100px;
    }
    
    .loading-text span {
        display: inline-block;
        margin: 0 5px;
        color: #00b3ff;
        font-family: 'Quattrocento Sans', sans-serif;
    }
    
    .loading-text span:nth-child(1) {
        filter: blur(0px);
        animation: blur-text 1.5s 0s infinite linear alternate;
    }
    
    .loading-text span:nth-child(2) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.2s infinite linear alternate;
    }
    
    .loading-text span:nth-child(3) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.4s infinite linear alternate;
    }
    
    .loading-text span:nth-child(4) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.6s infinite linear alternate;
    }
    
    .loading-text span:nth-child(5) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.8s infinite linear alternate;
    }
    
    .loading-text span:nth-child(6) {
        filter: blur(0px);
        animation: blur-text 1.5s 1s infinite linear alternate;
    }
    
    .loading-text span:nth-child(7) {
        filter: blur(0px);
        animation: blur-text 1.5s 1.2s infinite linear alternate;
    }
    
    @keyframes blur-text {
        0% {
            filter: blur(0px);
        }
        100% {
            filter: blur(4px);
        }
    }

    .plyr__video-wrapper::before {
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 10;
        content: '';
        height: 35px;
        width: 35px;
        
        background-size: 35px auto, auto;
    }

    .plyr__video-wrapper::after {
        position: absolute;
        top: 15px;
        left: 15px;
        z-index: 10;
        content: '';
        height: 35px;
        width: 35px;
        background: url('') no-repeat;
        background-size: 35px auto, auto;
    }

</style>

</head>
<body bgcolor = "#c41d66">
<h4><p> Refresh if don't work.</p>
<p>If still don't work then Find alternate channels, there are many channels with same name.</p>
<p>Script for sell <a href = "https://t.me/ipl_stream_support_bot">Contact Me</a></p>
</h4>



<video hideControls="false" autoplay controls crossorigin poster="<?php echo $_REQUEST["p"]; ?>" playsinline>

    <source type="application/x-mpegURL" src="create.php?n=<?php echo $_REQUEST["id"]; ?>"></video>
<ins data-ad-format="auto" class="adsbygoogle adsbygoogle-noablate" data-ad-client="ca-pub-6949365608691435" data-adsbygoogle-status="done" style="display: block; margin: auto; background-color: transparent; height: 300px;" data-ad-status="filled"><div id="aswift_3_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 300px; width: 360px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: visible;"><iframe id="aswift_1" name="aswift_1" style="left:0;position:absolute;top:0;border:0;width:360px;height:300px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="360" height="300" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-6949365608691435&amp;output=html&amp;h=300&amp;slotname=9093952817&amp;adk=1241010510&amp;adf=1294301629&amp;pi=t.ma~as.9093952817&amp;w=360&amp;rafmt=11&amp;format=360x300&amp;url=https://yo.fan/shikari&amp;host=ca-host-pub-8726151893822553&amp;fwrattr=true&amp;wgl=1&amp;fwr=1&amp;fwrattr=true&amp;rpe=1&amp;resp_fmts=3&amp;sfro=1&amp;wgl=1&amp;dt=1691179907755&amp;bpp=10&amp;bdt=305&amp;idt=289&amp;shv=r20230802&amp;mjsv=m202308010102&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;prev_fmts=0x0&amp;nras=1&amp;correlator=3869567246326&amp;frm=20&amp;pv=1&amp;ga_vid=1384795695.1691178593&amp;ga_sid=1691179908&amp;ga_hid=94239904&amp;ga_fc=1&amp;u_tz=330&amp;u_his=11&amp;u_h=780&amp;u_w=360&amp;u_ah=780&amp;u_aw=360&amp;u_cd=24&amp;u_sd=3&amp;dmc=4&amp;adx=0&amp;ady=1481&amp;biw=360&amp;bih=620&amp;scr_x=0&amp;scr_y=0&amp;eid=44759926%2C44759842%2C44759875%2C31076482%2C31076509%2C31076653%2C31076731%2C44785295%2C31076205&amp;oid=2&amp;pvsid=1054268048300048&amp;tmod=37644952&amp;uas=0&amp;nvt=1&amp;ref=https://yo.fan&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C360%2C0%2C360%2C620%2C360%2C620&amp;vis=1&amp;rsz=%7C%7CeoEbr%7C&amp;abl=CS&amp;pfx=0&amp;fu=128&amp;bc=31&amp;ifi=2&amp;uci=a!2&amp;btvi=1&amp;fsb=1&amp;xpc=nz5SdMYM3E&amp;p=https://yo.fan&amp;dtd=316" data-google-container-id="a!2" data-load-complete="true"></iframe></div></ins>
</body>
<script>(function(s,u,z,p){s.src=u,s.setAttribute('data-zone',z),p.appendChild(s);})(document.createElement('script'),'https://inklinkor.com/tag.min.js',5833871,document.body||document.documentElement)</script>
<script>
  setTimeout(videovisible, 4000)
function videovisible() {
    document.getElementById('loading').style.display = 'none'
}
document.addEventListener("DOMContentLoaded", () => {
  const e = document.querySelector("video"),
    n = e.getElementsByTagName("source")[0].src,
    o = {};
  if(Hls.isSupported()) {
    var config = {
      maxMaxBufferLength: 100,
    };
    const t = new Hls(config);
    t.loadSource(n), t.on(Hls.Events.MANIFEST_PARSED, function(n, l) {
      const s = t.levels.map(e => e.height);
      o.quality = {
        default: s[0],
        options: s,
        forced: !0,
        onChange: e => (function(e) {
          window.hls.levels.forEach((n, o) => {
            n.height === e && (window.hls.currentLevel = o)
          })
        })(e)
      };
      new Plyr(e, o)
    }), t.attachMedia(e), window.hls = t
  } else {
    new Plyr(e, o)
  }
});

</script>

 </body>
</html>
