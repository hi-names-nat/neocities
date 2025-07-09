<link href="/style_sidepanel.css" rel="stylesheet" type="text/css" media="all">
<?php
    if  (!$NoCore) {
        echo "<img class='img_floater' src='/_assets/core.png' aria-hidden='true' role='presentation'>";
    }
?>
<nav class='sidepanel'>
    <div class="dos-button skip-content"><a class="skip-content" href="#content">Skip to main content</a></div>
      <dir>
        FS /  <br>
        │ <br>
        ├ <a href='/home.php'>HOME</a>  <br>
        │ <br>
        ├ <a href='/about.php'>ABOUT</a> <br>
        │ <br>
        ├ <a href='/blog/index.php'>BLOG</a> <br>
        │ <br>
        <li>
        <input id='1' class='dir-collapse-input' type='checkbox'>
        ├ <a href='/contact/index.php'>CONTACT/</a> <label class='dir-collapse-input-label' id='1_label' for='1'></label><br>
        <div class='dir-collapse'>
          │ │         <br>
<!--          │ ├ <a href="/contact/q-and-a.php">QandA</a>-->
            │ ├ <a class="content-disabled">QandA</a>
        </div>
        </li>
        │ <br>
        <li>
        <input id='2' class='dir-collapse-input' type='checkbox'>
        ├ <a href="/creation/">CREATION/</a> <label class='dir-collapse-input-label' id='2_label' for='2'></label><br>
          <div class='dir-collapse'> 
          │ │         <br>
          │ ├ <a href="/creation/games/">GAMES</a>   <br>
          │ │         <br>
          │ ├ <a href="/creation/musique/">MUSIC</a> <br>
          │ │         <br>
          │ ├ <a href="/creation/writings/">WRITINGS</a> <br>
          </div>
        </li>
        │ <br>
        <li>
        <input id='3' class='dir-collapse-input' type='checkbox'>
        ├ <a href="/etc/">ETC/</a> <label class='dir-collapse-input-label' id='3_label' for='3'></label><br>
          <div class='dir-collapse'> 
          │ │         <br>
          │ ├ <a href="/etc/sonas/index.php">FURSONA</a>   <br>
          │ │         <br>
          │ ├ <a href="/etc/thx.php">THX & CREDITS</a> <br>
          │ │         <br>
          │ ├ <a href="/download/">ASSETS</a> <br>
          </div>
        </li>
          │          <br>
          ├ <a href="/support.php">SUPPORT</a> <br>

      </dir>
    <div>
<!--        <a href="/creation/musique/nettunes.php" target="_" style="position: absolute;bottom: 30px;width: 100%;left: 0;text-align: center;color:var(--color-terminal-greenlink">Want music while you browse?</a>-->
    </div>
    </nav>
    <script>
    let i = 0;
    let collapses = document.getElementsByClassName('dir-collapse-input');
    for (const lbl of document.getElementsByClassName('dir-collapse-input-label')) {
        let val = "hexaaelia_nav_state_" + i.toString()
        var a = localStorage.getItem(val);
        if (a) {
            lbl.classList.add(a);
            collapses[i].checked = true
        }
      lbl.onclick = function() {
        lbl.classList.toggle('open');
          if (lbl.classList.contains('open'))
            localStorage.setItem(val, 'open');
          else
            localStorage.removeItem(val);
      }
        i++
    }
    </script>