<!doctype HTML>
<html>
    <head>
    </head>
    <body>
        <?php
            echo "<h1>Hello World</h1>";
            $myNumberName ="Det där";

            Function myCoolLoop($times) {

                for($i = 0; $i = $times; $i++) {
                    $myVar = $i + 1;
                    echo "<h2>$myNumberName är $myVar</h2>";
                }
            }

            myCoolLoop(10);
        ?>
    </body>
</html>