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

    <link rel="canonical" href="<?php echo base_url(); ?>">
    <meta name="robots" content="index,follow">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="asset/css/w3codify.css">
    
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
    
    <input type="hidden" value="<?php echo base_url(); ?>" id="base_url">
    <div style='display:none;position:absolute;z-index:6;top:75px;right:0;height:75px;padding-top:22px;padding-right:20px;padding-left:20px;background-color:#ffc107;' id='googleSearch'>
       <div class='gcse-search'>
         <input type="text" style="width: 500px;">
         <i class="fas fa-search" style="border: 1px solid black;padding: 6px;background-color: white;cursor: pointer;"></i>
       </div>
    </div>
    <div class="w3-bar w3-card-2 notranslate" style="padding-left:12px;padding-right:16px;">
      <a href="<?php echo base_url(); ?>" class="w3-bar-item w3-button w3-hover-none w3-left w3-padding-16" title="Home" style="width:77px;"><img src="asset/images/final-logo.png" height="43" alt="W3Codify"></a>
      <a class="w3-bar-item w3-button w3-hide-small barex bar-item-hover w3-padding-24" href="javascript:void(0)" onclick="w3_open_nav('tutorials')" id="navbtn_tutorials" title="Tutorials" style="width:116px">Tools <i class="fas fa-chevron-down"></i><i class='fas fa-chevron-up' style="display:none"></i></a>
      <a class="w3-bar-item w3-button w3-hide-small barex bar-item-hover w3-padding-24" href="javascript:void(0)" title="Video Tutorials">Blogs </a>
      <a class="w3-bar-item w3-button w3-hide-small barex bar-item-hover w3-padding-24" href="javascript:void(0)" title="Video Tutorials">Contact </a>
      <a class="w3-bar-item w3-button bar-item-hover w3-padding-24" href="javascript:void(0)" onclick="w3_open()" id="navbtn_menu" title="Menu" style="width:100px">Menu <i class='fa fa-caret-down'></i><i class='fa fa-caret-up' style="display:none"></i></a>
      <div class="w3-right w3-padding-16">
        <a class="w3-bar-item w3-button bar-icon-hover w3-right" href="javascript:void(0)" style="padding-left:12px;padding-right:12px;margin-right:8px" title='Search W3Codify' id="nav_search_btn"><i class="fas fa-search"></i></a>
        <a class="w3-bar-item w3-button bar-icon-hover w3-right w3-hide-small" style="padding-left:12px;padding-right:12px" href="javascript:void(0)" onclick="changecodetheme(this)" title='Toggle Dark Code'><i class="fa fa-adjust"></i></a>
      </div>
    </div>
    <div id='myAccordion' class="w3-card-2 w3-center w3-hide-large" style="display:none;cursor:default;background-color:#E7E9EB">
      <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-xxlarge w3-right">&times;</a><br>
      <div class="w3-container w3-padding-32">
        <a class="w3-button w3-block" style="font-size:22px;" onclick="open_xs_menu('tutorials');" href="javascript:void(0);">Tools <i class='fa fa-caret-down'></i></a>
        <div id="sectionxs_tutorials" class="w3-left-align w3-show" style="background-color:#282A35;color:white;"></div>
        <a class="w3-button w3-block" style="font-size:22px;" href="javascript:void(0)">Blogs</a>
        <a class="w3-button w3-block" style="font-size:22px;" href="javascript:void(0)">Contact</a>
      </div>
    </div>
    <nav id="nav_tutorials" class="w3-hide-small navex" style="position:absolute;background-color:#000000;color:white;padding-bottom:60px;">
      <div class="w3-content" style="max-width:1100px;font-size:18px">
        <span onclick="w3_close_nav('tutorials')" class="w3-button w3-xxxlarge w3-display-topright w3-hover-white" style="padding-right:30px;padding-left:30px;">&times;</span><br>
        <div class="w3-row-padding w3-bar-block">
           <div class="w3-container" style="padding-left:13px">
              <h2 style="color:#ffc107;"><b>Optimization Tools</b></h2>
           </div>
           <div class="w3-col l3 m6">
              <h3 class="w3-margin-top">Beautify Tools</h3>
              <a class="w3-bar-item w3-button" target="_blank" href="<?php echo base_url(); ?>beautify-json">Beautify JSON</a>
              <a class="w3-bar-item w3-button" target="_blank" href="<?php echo base_url(); ?>beautify-xml">Beautify XML</a>
           </div>
           <div class="w3-col l3 m6">
              <h3 class="w3-margin-top">Minify Tools</h3>
              <a class="w3-bar-item w3-button" target="_blank" href="<?php echo base_url(); ?>minify-json">Minify JSON</a>
              <a class="w3-bar-item w3-button" target="_blank" href="<?php echo base_url(); ?>minify-xml">Minify XML</a>
           </div>
        </div>
      </div>
      <br class="hidesm">
    </nav>

    <!-- MAIN -->
    <div class="w3-main" id="main">
      <div class="w3-row w3-padding-32 ws-black">
        <div class="w3-content" style="max-width:1400px">
          <div class="w3-col l6 w3-center" style="padding:3%;">
            <h1 style="font-weight:700;margin-top:-18px!important;">Beautify</h1>
            <p style="font-size:19px;">The language for building web pages</p>
            <a href="javascript:void(0)" class="w3-button tut-button" id="bjson_btn" style="margin-bottom:2px;">JSON Code</a>
            <br>
            <a href="javascript:void(0)" class="w3-button ref-button" id="bxml_btn">XML Code</a>
          </div>
          <div class="w3-col l6" style="padding:3%">
            <div class="grey-color w3-card-2 w3-round" style="padding:16px;">
              <h3>Beautify Example:</h3>
              <div class="w3-code htmlHigh notranslate green-border" id="bjson_sec">
                <span class="jscolor" style="color:black"><span class="jsnumbercolor" style="color:red"></span>{<br>&nbsp;&nbsp;<span class="jsstringcolor" style="color:brown">"employees"</span>:[<br><span class="jsnumbercolor" style="color:red"></span>&nbsp;&nbsp;&nbsp;&nbsp;{<span class="jsstringcolor" style="color:brown">"firstName"</span>:<span class="jsstringcolor" style="color:brown">"John"</span>, <span class="jsstringcolor" style="color:brown">"lastName"</span>:<span class="jsstringcolor" style="color:brown">"Doe"</span>}, <br><span class="jsnumbercolor" style="color:red"></span>&nbsp;&nbsp;&nbsp;&nbsp;{<span class="jsstringcolor" style="color:brown">"firstName"</span>:<span class="jsstringcolor" style="color:brown">"Anna"</span>, <span class="jsstringcolor" style="color:brown">"lastName"</span>:<span class="jsstringcolor" style="color:brown">"Smith"</span>},<br><span class="jsnumbercolor" style="color:red"></span>&nbsp;&nbsp;&nbsp; {<span class="jsstringcolor" style="color:brown">"firstName"</span>:<span class="jsstringcolor" style="color:brown">"Peter"</span>, <span class="jsstringcolor" style="color:brown">"lastName"</span>:<span class="jsstringcolor" style="color:brown">"Jones"</span>}<br><span class="jsnumbercolor" style="color:red">
                </span>&nbsp;&nbsp;]<br>}<br><span class="jsnumbercolor" style="color:red">
                </span> </span>
              </div>
              <div class="w3-code cssHigh notranslate green-border" id="bxml_sec" style="display: none;">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>?xml<span class="attributecolor" style="color:red"> version<span class="attributevaluecolor" style="color:mediumblue">="1.0"</span> encoding<span class="attributevaluecolor" style="color:mediumblue">="UTF-8"</span>?</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>note<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>to<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Tove<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/to<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>from<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jani<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/from<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>heading<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Reminder<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/heading<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Don't forget me this weekend!<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/note<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
              </div>
              <a href="<?php echo base_url(); ?>beautify-json" target="_blank" id="b_btn" class="w3-button tryit-button">Try it Yourself</a>
            </div>
          </div>
        </div>
      </div>
      <div class="w3-row w3-padding-32 ws-yellow">
        <div class="w3-content" style="max-width:1400px">
          <div class="w3-col l6 w3-center" style="padding:3%">
            <h1 style="font-weight:700">Minify</h1>
            <p style="font-size:19px;">The language for styling web pages</p>
            <a href="javascript:void(0)" class="w3-button w3-block tut-button" id="mjson_btn">JSON Code</a><br>
            <a href="javascript:void(0)" class="w3-button w3-block ref-button black-color" id="mxml_btn">XML Code</a>
          </div>
          <div class="w3-col l6" style="padding:3%">
            <div class="grey-color w3-card-2 w3-round" style="padding:16px;">
              <h3>Minify Example:</h3>
              <div class="w3-code htmlHigh notranslate green-border" id="mjson_sec">
                <span class="jscolor" style="color:black"><span class="jsnumbercolor" style="color:red"></span>{<span class="jsstringcolor" style="color:brown">"employees"</span>:[<span class="jsnumbercolor" style="color:red"></span>{<span class="jsstringcolor" style="color:brown">"firstName"</span>:<span class="jsstringcolor" style="color:brown">"John"</span>, <span class="jsstringcolor" style="color:brown">"lastName"</span>:<span class="jsstringcolor" style="color:brown">"Doe"</span>}, <span class="jsnumbercolor" style="color:red"></span>{<span class="jsstringcolor" style="color:brown">"firstName"</span>:<span class="jsstringcolor" style="color:brown">"Anna"</span>, <span class="jsstringcolor" style="color:brown">"lastName"</span>:<span class="jsstringcolor" style="color:brown">"Smith"</span>},<span class="jsnumbercolor" style="color:red"></span>{<span class="jsstringcolor" style="color:brown">"firstName"</span>:<span class="jsstringcolor" style="color:brown">"Peter"</span>, <span class="jsstringcolor" style="color:brown">"lastName"</span>:<span class="jsstringcolor" style="color:brown">"Jones"</span>}<span class="jsnumbercolor" style="color:red">
                </span>]}<span class="jsnumbercolor" style="color:red">
                </span> </span>
              </div>
              <div class="w3-code cssHigh notranslate green-border" id="mxml_sec" style="display: none;">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>?xml<span class="attributecolor" style="color:red"> version<span class="attributevaluecolor" style="color:mediumblue">="1.0"</span> encoding<span class="attributevaluecolor" style="color:mediumblue">="UTF-8"</span>?</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>note<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>to<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Tove<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/to<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>from<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jani<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/from<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>heading<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Reminder<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/heading<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Don't forget me this weekend!<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/note<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
              </div>
              <a href="<?php echo base_url(); ?>minify-json" target="_blank" id="m_btn" class="w3-button tryit-button">Try it Yourself</a>
            </div>
          </div>
        </div>
      </div>

      <footer class="w3-container w3-center w3-padding-12">
        <p class="w3-medium">© 2022 Copyright, All Rights Reserved.</p>
      </footer>
    </div>
    <!-- END MAIN -->
    <script>
      var base_url = document.getElementById("base_url").value;
      function w3_open() {
        var x = document.getElementById("myAccordion");
        if (x.style.display === 'none') {
          x.style.display = 'block';
          if (document.getElementById("navbtn_menu")) {
            document.getElementById("navbtn_menu").getElementsByTagName("i")[0].style.display = "none";
            document.getElementById("navbtn_menu").getElementsByTagName("i")[1].style.display = "inline";
          }
        } else {
          x.style.display = 'none';
          if (document.getElementById("navbtn_menu")) {
            document.getElementById("navbtn_menu").getElementsByTagName("i")[0].style.display = "inline";
            document.getElementById("navbtn_menu").getElementsByTagName("i")[1].style.display = "none";
          }
        }
      }
      function w3_close() {
        document.getElementById("myAccordion").style.display = "none";
      }
      function open_xs_menu(x) {
        if (document.getElementById("sectionxs_" + x).innerHTML == "") {
        document.getElementById("sectionxs_" + x).innerHTML = document.getElementById("nav_" + x).innerHTML;
        } else {
         document.getElementById("sectionxs_" + x).innerHTML = "";
        }
      }
      function w3_open_nav(x) {
        if (document.getElementById("nav_" + x).style.display == "block") {
          w3_close_nav(x);
        } else {
          w3_close_nav("tutorials");
          // w3_close_nav("references");
          // w3_close_nav("exercises");
          document.getElementById("nav_" + x).style.display = "block";
          if (document.getElementById("navbtn_" + x)) {
            document.getElementById("navbtn_" + x).getElementsByTagName("i")[0].style.display = "none";
            document.getElementById("navbtn_" + x).getElementsByTagName("i")[1].style.display = "inline";
            document.getElementById("navbtn_" + x).classList.add("mystyle");
          }
          if (x == "search") {
            if (document.getElementById("gsc-i-id1")) {document.getElementById("gsc-i-id1").focus(); }
          }
        }
      }
      function w3_close_all_nav() {
        w3_close_nav("tutorials");
        // w3_close_nav("references");
        // w3_close_nav("exercises");
        w3_close();
      }
      function w3_close_nav(x) {
        document.getElementById("nav_" + x).style.display = "none";
        if (document.getElementById("navbtn_" + x)) {
          document.getElementById("navbtn_" + x).getElementsByTagName("i")[0].style.display = "inline";
          document.getElementById("navbtn_" + x).getElementsByTagName("i")[1].style.display = "none";
          document.getElementById("navbtn_" + x).classList.remove("mystyle");
        }
      }
      function changecodetheme() {
        var cc = document.body.className;
        if (cc.indexOf("darktheme") > -1) {
          document.body.className = cc.replace("darktheme", "");
          localStorage.setItem("preferredmode", "light");
        } else {
          document.body.className += " darktheme";
          localStorage.setItem("preferredmode", "dark");
        }
      }

      document.getElementById("bjson_btn").onclick = function(event) {
        document.getElementById("bxml_sec").style.display = 'none';
        document.getElementById("bjson_sec").style.display = 'block';
        document.getElementById("b_btn").href = base_url+'beautify-json';
      }

      document.getElementById("bxml_btn").onclick = function(event) {
        document.getElementById("bjson_sec").style.display = 'none';
        document.getElementById("bxml_sec").style.display = 'block';
        document.getElementById("b_btn").href = base_url+'beautify-xml';
      }

      document.getElementById("mjson_btn").onclick = function(event) {
        document.getElementById("mxml_sec").style.display = 'none';
        document.getElementById("mjson_sec").style.display = 'block';
        document.getElementById("m_btn").href = base_url+'minify-json';
      }

      document.getElementById("mxml_btn").onclick = function(event) {
        document.getElementById("mjson_sec").style.display = 'none';
        document.getElementById("mxml_sec").style.display = 'block';
        document.getElementById("m_btn").href = base_url+'minify-xml';
      }

      document.getElementById("nav_search_btn").onclick = function(event) {
        var search = document.getElementById("googleSearch");
        if (search.style.display === "none") {
          search.style.display = "block";
        } else {
          search.style.display = "none";
        }
      }

    </script>
  </body>
</html>
