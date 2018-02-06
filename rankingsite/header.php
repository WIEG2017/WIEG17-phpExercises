<!DOCTYPE html>
<?php
    require 'functions.php';
    require 'data.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php 
        echo SITE_NAME;
        
        if (isset($pageTitle)) {
            echo " - ".$pageTitle;
        } else {
            // die("No page title");
        }
        ?>
        </title>
    <style>
    body {
        background: #456;
        color: yellow;
    }
    a {
        color: gold;
    }
    </style>
</head>
<body>
<h1 style="text-align: center"><?php echo SITE_NAME ?></h1>
<ul>
    <li><a href="/rankingsite/index.php">Start</a></li>
    <li><a href="/rankingsite/list.php">Listan</a></li>
    <li><a href="/rankingsite/contact.php">Kontakt</a></li>
</ul>