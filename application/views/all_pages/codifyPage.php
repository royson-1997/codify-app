<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>W3Codify</title>
    <link rel="icon" href="<?php echo base_url(); ?>asset/images/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/w3inner.css">

  </head>
  <body>

    <div id="tryitLeaderboard">
    <!-- TryitLeaderboard -->
    </div>

    <div class="trytopnav">
      <div class="w3-bar" style="overflow:auto">
        <a id="tryhome" href="https://www.w3schools.com/" target="_blank" title="w3schools.com Home" class="w3-button w3-bar-item topnav-icons fa fa-home"></a>
        <a href="javascript:void(0);" onclick="retheme()" title="Change Theme" class="w3-button w3-bar-item topnav-icons fa fa-adjust"></a>
        <a href="javascript:void(0);" onclick="reset()" title="Reset" class="w3-button w3-bar-item topnav-icons fa fa-sync-alt"></a>
        <a href="javascript:void(0);" title="Copy Data" class="w3-button w3-bar-item topnav-icons fa fa-copy" id="copyButton" style="display: none;"></a>
        <button id="runbtn" class="w3-button w3-bar-item w3-hover-white w3-hover-text-green" onclick="submitIT();">Run &#10095;</button>
        <span class="w3-right w3-hide-small" style="padding:8px 16px 8px 0;display:block;float:right;font-size:16px;margin-top:4px"><span id="framesize">Result Size: <span>668 x 445</span></span></span>
      </div>
    </div>

    <div id="shield" style="display: none;"></div>

    <a href="javascript:void(0)" id="dragbar" style="width: 5px; top: 144px; left: 669.5px; height: 445px; cursor: col-resize;"></a>

    <div id="container">

      <div id="menuOverlay" class="w3-overlay w3-transparent" style="cursor:pointer;z-index:4"></div>
      <div id="textareacontainer">
        <div id="textarea">
          <div id="textareawrapper" style="border-left:4px solid #ffc107;">
            <input type="hidden" id="preData" value='{"employees":[{"firstName":"John", "lastName":"Doe"}, {"firstName":"Anna", "lastName":"Smith"},{"firstName":"Peter", "lastName":"Jones"} ]}'>
            <textarea autocomplete="off" id="textareaCode" wrap="logical" spellcheck="false">{"employees":[{"firstName":"John", "lastName":"Doe"}, {"firstName":"Anna", "lastName":"Smith"},{"firstName":"Peter", "lastName":"Jones"} ]}</textarea>
          </div>
        </div>
      </div>
      <div id="iframecontainer">
        <div id="iframe">
          <div id="iframewrapper" style="border-left:4px solid #04AA6D;overflow-x: hidden;overflow-y: auto;">
            <pre id="innerCode"></pre>
          </div>
        </div>
      </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

      submitIT();
      document.getElementById("copyButton").style.display = "none";

      function output(inp) {
        document.getElementById("innerCode").innerHTML = inp;
      }

      function submitIT(){
        var obj = document.getElementById("textareaCode").value;
        try {
          obj = JSON.parse(obj);
          var str = JSON.stringify(obj, undefined, 2);
          output(str);
          document.getElementById("copyButton").style.display = "block";
        } catch (e) {
          document.getElementById("copyButton").style.display = "none";
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Invalid JSON Format!'
          });
        }
        return true;
      }

      function reset(){
        document.getElementById("textareaCode").innerHTML = '';
        var obj = document.getElementById("preData").value;
        document.getElementById("textareaCode").value = obj;
        submitIT();
        document.getElementById("copyButton").style.display = "none";
      }

      document.getElementById("copyButton").addEventListener("click", function() {

        var r = document.createRange();
        r.selectNode(document.getElementById("innerCode"));
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(r);
        document.execCommand('copy');
        window.getSelection().removeAllRanges();

        Swal.fire({
          icon: 'success',
          title: 'Your Data is Copy to Clipboard.',
          showConfirmButton: false,
          timer: 1600
        })

      });

    </script>

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
