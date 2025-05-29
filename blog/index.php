<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEX/BLOG</title>
    <!-- The style.css file allows you to change the look of your web pages.
         If you include the next line in all your web pages, they will all share the same look.
         This makes it easier to make new pages for your site. -->
    <link href="/style.css" rel="stylesheet" type="text/css" media="all">
    <link href="blog_styles.css" rel="stylesheet" type="text/css" media="all">

</head>
<body>
    <div class="content" id="content">
        <h1 class="h0" aria-hidden="true" role="presentation">blogblogblogblogblogblogblog<b class="h0_inner" aria-hidden="false">Blog</b>blogblogblogblogblog</h1>
        <?php
            require __DIR__ . '/../vendor/autoload.php';
            use Michelf\MarkdownExtra;

            $start = $_GET['start']; if (empty($start)) {$start = 0;}
            $amt = $_GET['amt']; if (empty($amt)) {$amt = 5;}
            $rev = $_GET['rev']; if (empty($rev)) {$rev = false;}

            $next_entry = $start;

            $arr = scandir("entries/");
            array_shift($arr); array_shift($arr); //remove . and ..

            $arr_size = count($arr);

            if ($rev) {sort($arr);}
            else {rsort($arr);}
            while ($next_entry < $amt + $start && $next_entry < count($arr)) {
                echo MarkdownExtra::defaultTransform(file_get_contents("entries/" . $arr[$next_entry]));
                $next_entry++;
            }

        ?>
        <table style="width: 100%; text-align: center;">
            <tr>
                <td>
                    <?php
                    $last = $start - $amt;
                    if ($last < 1) {$last = 0;}

                    if ($start==0) echo("prev");
                    else echo("<a href='./index.php?start=$last&amt=$amt&rev=$rev'>prev</a>"); ?></td>
                <td>
                    posts per page<br>
                    <a href="./index.php?start=<?=$start?>&amt=5&rev=<?=$rev?>">5</a>
                    <a href="./index.php?start=<?=$start?>&amt=10&rev=<?=$rev?>">10</a>
                    <a href="./index.php?start=<?=$start?>&amt=20&rev=<?=$rev?>">20</a>
                    <br>
                    <a href="./index.php?start=<?=$start?>&amt=<?=$amt?>&rev=0">
                        newest first
                    </a>
                    <span style="width:20px;display: inline-block"></span>
                    <a href="./index.php?start=<?=$start?>&amt=<?=$amt?>&rev=1">
                        oldest first
                    </a>
                </td>
                <td><?php
                    if ($next_entry==$arr_size) echo("next");
                    else echo("<a href='./index.php?start=$next_entry&amt=$amt&rev=$rev'>next</a>"); ?></td>
            </tr>
        </table>
    </div>

    <?php require '../_php_components/navbar.php' ?>
</body>

