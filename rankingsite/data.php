<?php
    $gurkArray = array(
        "0 poäng. all annan gurka" => "Vet inte riktigt",
        "5 poäng 1/2. Zuccuni" => "Lite äcklig sådär, helt ok",
        "-1000 poäng. salt gurka" => "fy fan",
        "8 poäng. Vanligt gurka" => "Smakar mest vatten, god"
    );

    $gurkItemArray = array( 
        createGurka(0, "All annan gurka", "Vet inte riktigt"),
        createGurka(5, "Zuccuni", "Lite äcklig sådär, helt ok"),
        createGurka(-1000, "Salt gurka", "fy fan"),
        createGurka(8, "Vanlig gurka", "Smakar mest vatten, god")
    );