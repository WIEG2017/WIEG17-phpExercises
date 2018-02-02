<?php

    function listItems($array) {
        krsort($array);
        foreach($array as $key => $value) {
            echo "<li>$key</li>";
        }
    }

    function listOptions($array) {
        krsort($array);
        foreach($array as $key => $value) {
            echo "<option value='$key'>$key</option>";
        }
    }

    function createGurka($points, $name, $description) {
        return array("points" => $points, "name" => $name, "description" => $description);
    }

    function findGurka($name, $array) {
        foreach($array as $gurka) {
            if ($gurka['name'] == $name) {
                return $gurka;
            }
        }
    }

    function listGurkItems($array) {
        
        foreach($array as $gurka) {
            echo "<li><b>".$gurka["points"]."</b> points: ".$gurka["name"]."</li>";
        }
    }

    function listGurkOptions($array) {

        foreach($array as $key => $gurka) {
            echo "<option value='".$gurka['name']."'>".$gurka['name']."</option>";
        }
    }