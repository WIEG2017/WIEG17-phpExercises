<?php

    $karlstadsBidrag = array(
        "favolåten" => array("name" => "Livet på en pinne", "poäng" => 10, "placering" => 7),
        array("namn" => "Dance you off", "poäng" => 7,5, "placering" => 1),
        array("name" => "Kikkis låt", "poäng" => 4, "placering" => 8)
    );
    
    $karlstadsBidrag[] = array("namn" => "All the feels", "poäng" => 3, "placering" => 4);

    function printBidrag($bidragsArray) {

        foreach($bidragsArray as $bidrag) {
            if (isset($bidrag["name"])) {
                echo "<b>".$bidrag["name"]."</b>: ".$bidrag["poäng"];
            }
            else {
                die("Something was wrong in the");
            }
            echo "<br/>";
        }
    }

    printBidrag($karlstadsBidrag);

