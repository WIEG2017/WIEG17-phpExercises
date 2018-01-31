<!doctype HTML>
<?php 
 $myVar = "<h1>Yes it works :) Every PHP <u>file</u> is a single global scope</h1>";
?>
<html>
    <head>
    </head>
    <body>
        <?php
            echo $myVar;
        ?>
    </body>
</html>