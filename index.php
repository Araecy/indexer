<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.min.css">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./script.js" defer></script>
</head>

<?php

$curPageName = substr($_SERVER["SERVER_NAME"], strrpos($_SERVER["SERVER_NAME"], "/"));
?>

<div id="site-name-wrapper">
    <p class="animated_rainbow_1"> <?php echo "D2C1 " . $curPageName . " index pagina!"; ?> </p>
</div>

<?php
# The current directory
$directory = dir("./");

// iterator aswel as the path to the root folder (aka: this is the folder selector)
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('./'));
$files = array();
?>

<div id="link-wrapper">
    <blockquote>
        <?php
            foreach ($it as $filename) {

                if ($filename->isDir()) {
                    continue;
                }

                // $files[] = $filename->getPathname(); 
                echo $files[$filename->getPathname()] = $filename->getPathname();
                echo str_replace("", "", "<p><a href='$filename'>" . "<span class='kaas'>" . $filename . "</span>" . "</a></p>\n" . "<hr>");
            }
        ?>
    </blockquote>
</div>