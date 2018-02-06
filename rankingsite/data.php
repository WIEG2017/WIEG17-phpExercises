<?php
    $gurkArray = array(
        "0 poäng. all annan gurka" => "Vet inte riktigt",
        "5 poäng 1/2. Zuccuni" => "Lite äcklig sådär, helt ok",
        "-1000 poäng. salt gurka" => "fy fan",
        "8 poäng. Vanligt gurka" => "Smakar mest vatten, god"
    );

    $gurkItemArray = array( 
        0 => createGurka(0, "All annan gurka", "Vet inte riktigt"),
        1 => createGurka(5, "Zuccuni", "Lite äcklig sådär, helt ok"),
        2 => createGurka(-1000, "Salt gurka", "fy fan"),
        3 => createGurka(8, "Vanlig gurka", "Smakar mest vatten, god")
    );

    define("SITE_NAME", "Viktors Gurksite 🥒");