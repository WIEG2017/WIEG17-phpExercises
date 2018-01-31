<!doctype HTML>
<?php
    function minsta($numberA, $numberB) {
        if ($numberA < $numberB) {
            return $numberA;
        } else {
            return $numberB;
        }
    }

    function myCoolLoop($start, $stop, $array) { // myCoolLoop($myNumberName = "Det där gamla", $numberofTimesToWrite = 4);
        $realStart = minsta($start, count($array)-1);
        $realStop = minsta($stop, count($array));

        for($i = $realStart; $i < $realStop; $i++) {
            echo "<h2>$array[$i]</h2>";
        }
    }

?>
<html>
    <head>
    </head>
    <body>
        <?php
            echo "<h1>Hello World</h1>";


            $mySongArray = array("Calfonication", "Dreaming of you", "lejonkungenlåten", "hakuna matat", "Himlen är oskyldigt blå");
            
            myCoolLoop(0, 4, $mySongArray);

            # myCoolLoop("test", 30);
            # myCoolLoop($theNumberNameiWantToUseLater, 4); // myCoolLoop("Det där gamla", 4);
            # myCoolLoop("Det här nya", 200); // myCoolLoop("Det här nya", 200);
        ?>
    </body>
</html>