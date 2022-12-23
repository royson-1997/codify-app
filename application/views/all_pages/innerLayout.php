<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->data['title']; ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="<?php echo $this->data['description']; ?>" name="description">
    <meta content="<?php echo $this->data['keywords']; ?>" name="keywords">

    <link rel="apple-touch-icon" sizes="57x57" href="asset/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="asset/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="asset/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="asset/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="asset/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="asset/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="asset/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="asset/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="asset/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="asset/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="asset/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="asset/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/favicon/favicon-16x16.png">
    <link rel="manifest" href="asset/favicon/manifest.json">
    <meta name="application-name" content="W3Codify">
    <meta name="msapplication-TileColor" content="#ffc107">
    <meta name="msapplication-TileImage" content="asset/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffc107">

    <meta property="og:image" content="<?php echo base_url(); ?>asset/images/final-logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="436">
    <meta property="og:image:height" content="228">
    <meta property="og:title" content="<?php echo $this->data['title']; ?>">
    <meta property="og:description" content="<?php echo $this->data['description']; ?>">
    
    <meta name="google-site-verification" content="w-Eqq5Fl-jM00fW1TJcZeOpmIyU1DOEUYX5Nx0Eyrw0" />

    <link rel="canonical" href="<?php echo base_url().$this->data['route_name']; ?>">
    <meta name="robots" content="index,follow">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="asset/css/w3inner.css">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9DRQWPT02H"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-9DRQWPT02H');
    </script>
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MQ3235C');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Google AdSense -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1482270746889345"
     crossorigin="anonymous"></script>

  </head>
  <body>
      
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQ3235C"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="tryitLeaderboard">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1482270746889345"
             crossorigin="anonymous"></script>
        <!-- Inner Codify Page -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-1482270746889345"
             data-ad-slot="9415862032"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>

    <?php $this->load->view($subview); ?>

    <script>
      var currentStack=true;
      if ((window.screen.availWidth <= 768 && window.innerHeight > window.innerWidth) || "" == " horizontal") {restack(true);}
      function restack(horizontal) {
        var tc, ic, t, i, c, f, sv, sh, d, height, flt, width;
        tc = document.getElementById("textareacontainer");
        ic = document.getElementById("iframecontainer");
        t = document.getElementById("textarea");
        i = document.getElementById("iframe");
        c = document.getElementById("container");
        sv = document.getElementById("stackV");
        sh = document.getElementById("stackH");
        tc.className = tc.className.replace("horizontal", "");
        ic.className = ic.className.replace("horizontal", "");
        t.className = t.className.replace("horizontal", "");
        i.className = i.className.replace("horizontal", "");
        c.className = c.className.replace("horizontal", "");
        if (sv) {sv.className = sv.className.replace("horizontal", "")};
        if (sv) {sh.className = sh.className.replace("horizontal", "")};
        stack = "";
        if (horizontal) {
          tc.className = tc.className + " horizontal";
          ic.className = ic.className + " horizontal";
          t.className = t.className + " horizontal";
          i.className = i.className + " horizontal";
          c.className = c.className + " horizontal";
          if (sv) {sv.className = sv.className + " horizontal"};
          if (sv) {sh.className = sh.className + " horizontal"};
          stack = " horizontal";
          document.getElementById("textareacontainer").style.height = "50%";
          document.getElementById("iframecontainer").style.height = "50%";
          document.getElementById("textareacontainer").style.width = "100%";
          document.getElementById("iframecontainer").style.width = "100%";
          currentStack=false;
        } else {
          document.getElementById("textareacontainer").style.height = "100%";
          document.getElementById("iframecontainer").style.height = "100%";
          document.getElementById("textareacontainer").style.width = "50%";
          document.getElementById("iframecontainer").style.width = "50%";
          currentStack=true;
        }
        fixDragBtn();
        showFrameSize();
      }
      function showFrameSize() {
        var t;
        var width, height;
        width = Number(w3_getStyleValue(document.getElementById("iframewrapper"), "width").replace("px", "")).toFixed();
        height = Number(w3_getStyleValue(document.getElementById("iframewrapper"), "height").replace("px", "")).toFixed();
        document.getElementById("framesize").innerHTML = "Result Size: <span>" + width + " x " + height + "</span>";
      }
      var dragging = false;
      var stack;
      function fixDragBtn() {
        var textareawidth, leftpadding, dragleft, containertop, buttonwidth
        var containertop = Number(w3_getStyleValue(document.getElementById("container"), "top").replace("px", ""));
        if (stack != " horizontal") {
          document.getElementById("dragbar").style.width = "5px";
          textareasize = Number(w3_getStyleValue(document.getElementById("textareawrapper"), "width").replace("px", ""));
          leftpadding = Number(w3_getStyleValue(document.getElementById("textarea"), "padding-left").replace("px", ""));
          buttonwidth = Number(w3_getStyleValue(document.getElementById("dragbar"), "width").replace("px", ""));
          textareaheight = w3_getStyleValue(document.getElementById("textareawrapper"), "height");
          dragleft = textareasize + leftpadding + (leftpadding / 2) - (buttonwidth / 2);
          document.getElementById("dragbar").style.top = containertop + "px";
          document.getElementById("dragbar").style.left = dragleft + "px";
          document.getElementById("dragbar").style.height = textareaheight;
          document.getElementById("dragbar").style.cursor = "col-resize";

        } else {
          document.getElementById("dragbar").style.height = "5px";
          if (window.getComputedStyle) {
            textareawidth = window.getComputedStyle(document.getElementById("textareawrapper"),null).getPropertyValue("height");
            textareaheight = window.getComputedStyle(document.getElementById("textareawrapper"),null).getPropertyValue("width");
            leftpadding = window.getComputedStyle(document.getElementById("textarea"),null).getPropertyValue("padding-top");
            buttonwidth = window.getComputedStyle(document.getElementById("dragbar"),null).getPropertyValue("height");
          } else {
            dragleft = document.getElementById("textareawrapper").currentStyle["width"];
          }
          textareawidth = Number(textareawidth.replace("px", ""));
          leftpadding = Number(leftpadding .replace("px", ""));
          buttonwidth = Number(buttonwidth .replace("px", ""));
          dragleft = containertop + textareawidth + leftpadding + (leftpadding / 2);
          document.getElementById("dragbar").style.top = dragleft + "px";
          document.getElementById("dragbar").style.left = "5px";
          document.getElementById("dragbar").style.width = textareaheight;
          document.getElementById("dragbar").style.cursor = "row-resize";
        }
      }
      function dragstart(e) {
        e.preventDefault();
        dragging = true;
        var main = document.getElementById("iframecontainer");
      }
      function dragmove(e) {
        if (dragging)
        {
          document.getElementById("shield").style.display = "block";
          if (stack != " horizontal") {
            var percentage = (e.pageX / window.innerWidth) * 100;
            if (percentage > 5 && percentage < 98) {
              var mainPercentage = 100-percentage;
              document.getElementById("textareacontainer").style.width = percentage + "%";
              document.getElementById("iframecontainer").style.width = mainPercentage + "%";
              fixDragBtn();
            }
          } else {
            var containertop = Number(w3_getStyleValue(document.getElementById("container"), "top").replace("px", ""));
            var percentage = ((e.pageY - containertop + 20) / (window.innerHeight - containertop + 20)) * 100;
            if (percentage > 5 && percentage < 98) {
              var mainPercentage = 100-percentage;
              document.getElementById("textareacontainer").style.height = percentage + "%";
              document.getElementById("iframecontainer").style.height = mainPercentage + "%";
              fixDragBtn();
            }
          }
          showFrameSize();
        }
      }
      function dragend() {
        document.getElementById("shield").style.display = "none";
        dragging = false;
        var vend = navigator.vendor;
        if (window.editor && vend.indexOf("Apple") == -1) {
            window.editor.refresh();
        }
      }
      if (window.addEventListener) {
        document.getElementById("dragbar").addEventListener("mousedown", function(e) {dragstart(e);});
        document.getElementById("dragbar").addEventListener("touchstart", function(e) {dragstart(e);});
        window.addEventListener("mousemove", function(e) {dragmove(e);});
        window.addEventListener("touchmove", function(e) {dragmove(e);});
        window.addEventListener("mouseup", dragend);
        window.addEventListener("touchend", dragend);
        window.addEventListener("load", fixDragBtn);
        window.addEventListener("load", showFrameSize);
      }

      function retheme() {
        var cc = document.body.className;
        if (cc.indexOf("darktheme") > -1) {
          document.body.className = cc.replace("darktheme", "");
          if (opener) {opener.document.body.className = cc.replace("darktheme", "");}
          localStorage.setItem("preferredmode", "light");
        } else {
          document.body.className += " darktheme";
          if (opener) {opener.document.body.className += " darktheme";}
          localStorage.setItem("preferredmode", "dark");
        }
      }
      (
      function setThemeMode() {
        var x = localStorage.getItem("preferredmode");
        if (x == "dark") {
          document.body.className += " darktheme";
        }
      })();

      function w3_getStyleValue(elmnt,style) {
        if (window.getComputedStyle) {
          return window.getComputedStyle(elmnt,null).getPropertyValue(style);
        } else {
          return elmnt.currentStyle[style];
        }
      }
    </script>

  </body>
</html>
