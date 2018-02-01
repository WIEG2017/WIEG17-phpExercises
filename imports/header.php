<?php
include 'menuItems.php';
?>
<html>
    <head>
        <title><?php echo $pageName ?></title>
        <style>
            <?php
            include 'style.css';
            ?>
        </style>
    </head>
    <body>
<h1>Cool import site - <?php echo $pageName ?></h1>
<ul>
    <?php
        foreach($menuItems as $item) {
            echo "<li>$item</li>";
        }
     ?>
     <br/>
</ul>