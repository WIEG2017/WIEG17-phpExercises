<?php

    // Abstrakt klass, kan inte skapas med new
    abstract class Person {
        private $country = "sweden"; // Privata attribut går inte att nå utifån klassen
        protected $firstName; // Protected går att nå bara från denna klass, eller subklasser
        protected $familyName;

        // Konstruktorn körs när klassen vid new
        public function __construct($newFirstName, $newLastName) {
            $this->setMyName($newFirstName, $newLastName);
        }

        // Privata funktioner kan bara nås innifrån klassen
        private function setMyName($newFirstName, $newLastName) {
            $this->firstName = $newFirstName;
            $this->familyName = $newLastName;
        }

        // Abstrakta funktioner måsta ha { } i subklasserna
        abstract public function sayMyName();

        // Publika funktioner kan köras vartifrån som helst
        public function moveCountry($newName, $newCountry) {
            
            // This är samma som "det här objektet"
            $this->country = $newCountry;
            
            // Kallelse till privat metod:
            $this->setMyName($newName, $this->familyName);
        }
    }

    // Man ärver från Person
    // Man är en subklass
    // Person är Mans superklass
    class Man extends Person {

        // Man kan overrida, skriva över, funktioner
        // abstrakta funktioner måste skrivas över
        public function sayMyName() {
            echo $this ->firstName . " is my name";
        }

        public function peeStandingUp() {
            echo true;
        }
    }
    
    class Woman extends Person {
        
        // Man kan skapa helt nya funktioner och 
        // attribut i subklasserna
        public function multitask() {
            echo true;
        }

        public function sayMyName() {
            echo "my name is...   " . $this->firstName;
        }
    }

    $myLisaPerson = new Woman("Lisa", "Simpson");
    $myBartPerson = new Man("Bart", "Simpson");
    $myHomerPerson = new Man("Homer", "Simpson");

    // Anrop till metoder och attribut görs med
    // thin arrow: ->
    $myLisaPerson->sayMyName();
    echo "<br/>";
    $myBartPerson->sayMyName();
    echo "<br/>";
    $myHomerPerson->sayMyName();
    echo "<br/>";
    //print_r($myLisaPerson);