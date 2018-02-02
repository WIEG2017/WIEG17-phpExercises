<?php
include 'menuItems.php';
include 'menuItems.php';
?>
<html>
    <head>
        <title><?php 
        echo "My Site";        
        if (isset($pageName)) {
            echo " - $pageName";
        }
        ?></title>
        <style>
            <?php
            include 'style.css';
            ?>
        </style>
    </head>
    <body>
    <?php
        if (isset($showTitle) && $showTitle == true) {
            echo "<h1>Cool import site title</h1>";
        }
    ?>
<ul>
    <?php
        foreach($menuItems as $item) {
            echo "<li>$item</li>";
        }
     ?>
     <br/>
</ul>