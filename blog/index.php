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
            $dir = new DirectoryIterator("entries/");
            $arr = array();
            foreach ($dir as $fileinfo) {
                if (!$fileinfo->isDot()) {
                    $file = file_get_contents("entries/" . $fileinfo);
                    array_push($arr, $file);
                }
            }
            rsort($arr);
            foreach ($arr as $val){
                echo MarkdownExtra::defaultTransform($val);
            }
        ?>
    </div>

    <?php require '../_php_components/navbar.php' ?>
</body>

