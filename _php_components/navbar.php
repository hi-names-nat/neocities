<link href="/style_sidepanel.css" rel="stylesheet" type="text/css" media="all">
<div class='sidepanel'>
      <dir>
        FS /  <br>
        │ <br>
        ├ <a href='index.html'>HOME</a>  <br>
        │ <br>
        ├ <a href='about.php'>ABOUT</a> <br>
        │ <br>
        ├ <a href='blog/index.html'>BLOG</a> <br>
        │ <br>
        <li>
        <input id='2' class='dir-collapse-input' type='checkbox'>
        ├ <a href='index.html'>CONTACT/</a> <label class='dir-collapse-input-label' id='2_label' for='2'></label><br>
        <div class='dir-collapse'>
          │ │         <br>
          │ ├ <a>QandA</a>
        </div>
        </li>
        │ <br>
        <li>
        <input id='1' class='dir-collapse-input' type='checkbox'>
        ├ <a>CREATION/</a> <label class='dir-collapse-input-label' id='1_label' for='1'></label><br>
          <div class='dir-collapse'> 
          │ │         <br>
          │ ├ <a>GAMES</a>   <br>
          │ │         <br>
          │ ├ <a>MUSIC</a> <br>
          │ │         <br>
          │ ├ <a>WRITINGS</a> <br>
          </div>
        </li>
        │ <br>
        <li>
        <input id='3' class='dir-collapse-input' type='checkbox'>
        ├ <a>ETC/</a> <label class='dir-collapse-input-label' id='3_label' for='3'></label><br>
          <div class='dir-collapse'> 
          │ │         <br>
          │ ├ <a>FURSONA</a>   <br>
          │ │         <br>
          │ ├ <a>THX & CREDITS</a> <br>
          │ │         <br>
          │ ├ <a>ASSETS</a> <br>
          </div>
        </li>
          │          <br>
          ├ <a>SUPPORT</a> <br>
      </dir>
    </div>
    <script>
    for (const lbl of document.getElementsByClassName('dir-collapse-input-label')) {
      lbl.onclick = function() {
        lbl.classList.toggle('open');
      }
    }
    </script>