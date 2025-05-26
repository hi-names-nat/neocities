<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The web site of hexate</title>
    <!-- The style.css file allows you to change the look of your web pages.
         If you include the next line in all your web pages, they will all share the same look.
         This makes it easier to make new pages for your site. -->
    <link href="/style.css" rel="stylesheet" type="text/css" media="all">

</head>
<body>
    <div class="content">
        <?php 
            require __DIR__ . '/../vendor/autoload.php';
            use Michelf\MarkdownExtra;
            $dir = new DirectoryIterator("entries/");
            foreach ($dir as $fileinfo) {
                if (!$fileinfo->isDot()) {
                    $file = file_get_contents("entries/" . $fileinfo);
                     echo MarkdownExtra::defaultTransform($file);
                }
            }
            // $file = file_get_contents("entries/0_test.md");
            // echo MarkdownExtra::defaultTransform($file);
        ?>
    </div>

    <?php require '../_php_components/navbar.php' ?>
</body>

