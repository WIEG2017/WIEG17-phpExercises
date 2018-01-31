<!doctype HTML>
<?php 
 $myVar = "<h1>Yes it works :) Every PHP <u>file</u> is a single global scope</h1>";
?>
<html>
    <head>
    </head>
    <body>
        <?php
            
            function factorial($number) { // A: $number = 5 // B: $number = 4 // C: $number = 3 // D: $number = 2 // E: $number = 1
                if ($number == 1) {
                    return 1; // F: return 1
                }
                else {
                    return $number * factorial($number-1); // A: return 5 * B // B: return 4 * V // C: return 3 * D // D: return 2 * E // E: return 1 * F
                }
            }

            $results = factorial(5);

            echo "the results was $results" // echo the results was A

            // function facultyAsALoop($number) {
            //     $sum = 1;
            //     for ($i = 0; $i < $number; $i++) {
            //         $nextNumber = $number - $i;
            //         $sum = $sum * $nextNumber;
            //     }
            //     return $sum;
            // }
        ?>
    </body>
</html>