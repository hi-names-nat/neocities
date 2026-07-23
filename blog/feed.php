<?php
  require("./atom.gen.php");
  $start = 0;

    $next_entry = $start;

    $arr = scandir("entries/");
    array_shift($arr); array_shift($arr); //remove . and ..

    $arr_size = count($arr);

$feed   = new atomfeed();
$feed->title = "Hexaaelia's Blog";
      $feed->subtitle = "Blog for dragony nonsense";
      $feed->id_uri = "https://hexaaelia.gay/blog";
      $feed->feed_uri = "https://hexaaelia.gay/blog/feed.php";
      $feed->addcategories(["personal", "tech", "moto"]); 
      $feed->addauthor("Hexaaelia Skye", "Hexaaelia@hexaaaelia.gay", "https://hexaaelia.gay", "author");
    rsort($arr);
    while ($next_entry < count($arr)) {

      $file = fopen("./entries/" . $arr[$next_entry], "r");
      $ent_title = stream_get_line($file, 256, "\n");
      $ent_title = str_replace(["\\", "#"], "", $ent_title);
      $ent_date = stream_get_line($file, 256, "\n");
      $ent_date = str_replace(["\\", "#"], "", $ent_date);
      $ent_date = strtotime($ent_date);
      $ent_sub = stream_get_line($file, 256, "\n");
      $ent_sub = str_replace(["\\", "#"], "", $ent_sub);
      $ent_cont = stream_get_line($file, 10000);
      $ent_cont = str_replace(["\\", "#"], "", $ent_cont);
      $feed->addentry("https://hexaaelia.gay/blog", $ent_title, $ent_date, "Hexaaelia Skye", $ent_cont, $ent_sub);
      header("content-type: application/atom+xml");
      $next_entry++;
  }

      echo($feed->render());
?>
