  <div class="trytopnav">
    <div class="w3-bar" style="overflow:auto">
      <a id="tryhome" href="<?php echo base_url(); ?>" target="_blank" title="w3schools.com Home" class="w3-button w3-bar-item topnav-icons fa fa-home"></a>
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
          <input type="hidden" id="preData" value='{"employees":[{"first":"John", "last":"Doe"}, {"first":"Anna", "last":"Smith"},{"first":"Peter", "last":"Jones"} ]}'>
          <textarea autocomplete="off" id="textareaCode" wrap="logical" spellcheck="false">{
  "employees": [
    {
      "first": "John",
      "last": "Doe"
    },
    {
      "first": "Anna",
      "last": "Smith"
    },
    {
      "first": "Peter",
      "last": "Jones"
    }
  ]
}</textarea>
        </div>
      </div>
    </div>
    <div id="iframecontainer">
      <div id="iframe">
        <div id="iframewrapper" style="border-left:4px solid #04AA6D;overflow-x: hidden;overflow-y: auto;">
          <p id="innerCode"></p>
        </div>
      </div>
    </div>
  </div>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>

    submitIT();
    document.getElementById("copyButton").style.display = "none";

    function output(inp) {
      var minified = JSON.stringify(JSON.parse(inp));
      minified.replace(/\s/g,'');
      document.getElementById("innerCode").innerHTML = minified;
    }

    function submitIT(){
      var obj = document.getElementById("textareaCode").value;
      try {
        obj = JSON.parse(obj);
        var str = JSON.stringify(obj, undefined, 2);
        str.replace(/\s/g,'');
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
      obj = JSON.parse(obj);
      var str = JSON.stringify(obj, undefined, 2);
      document.getElementById("textareaCode").value = str;
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
