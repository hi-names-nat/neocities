<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEX/HOME</title>
    <link href="/style.css" rel="stylesheet" type="text/css" media="all">
    <!--    <link href="writings_styles.css" rel="stylesheet" type="text/css" media="all">-->
    <link href="fa-styles.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
<?php $navbar_color_invert=true; ?>
<?php require '../../_php_components/navbar.php' ?>
<div id="content" class='content'>
    <p><a href="index.php">back to landing</a></p>
    <br>
    <?php
    require __DIR__ . '/../../vendor/autoload.php';
    use Michelf\MarkdownExtra;

    $sel = $_GET['entry']; if (empty($sel)) {$sel = 0;}


    $arr = scandir("fa/");
    array_shift($arr); array_shift($arr); //remove . and ..
    rsort($arr);
    $title = pathinfo("fa/$arr[$sel]", PATHINFO_FILENAME);
    echo "<h1>$title</h1>";
    echo MarkdownExtra::defaultTransform(file_get_contents("fa/" . $arr[$sel]));

    ?>
    <table style="width: 100%;background-color: white">
        <?php
        $counter = 0;
        foreach ($arr as $file) {
            $filename = pathinfo("fa/$file", PATHINFO_FILENAME);
            echo "
                    <tr>
                        <th><a href='forever-archives.php?entry=$counter'>$filename</a></th>
                    </tr>";
            $counter++;
        }
        ?>
    </table>
</div>
</body>
</html>
