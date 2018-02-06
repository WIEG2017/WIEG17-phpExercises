<?php

    $myArray = array("Janne", "Jensen", "Anett");
    $myName = "Viktor!";
    
    $myArray[0] = "J8nn3";
    
    $myNewArray = array();
    $myWantedIndex = 2;
    $myNewArray[$myWantedIndex] = "Viktor";
    print_r($myNewArray);
    print "<br/>";
    for($i = 0; $i < count($myArray); $i++) {
        $k = $i;
        if ($i == $myWantedIndex) {
            $k++;
        }
        $myNewArray[$k] = $myArray[$i];
        print_r($myNewArray);
        print "<br/>";
    }
    //print_r($myArray);
    //print_r($myNewArray);

    // $myName = "!rotkiV";
    // array_push($myArray, $myName);

