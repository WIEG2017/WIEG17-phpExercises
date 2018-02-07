<?php 

class Person {
    
    public $name = "Myggan";

    public function __construct($name = null) {

        if ($name != null) {
            $this->name = $name;
        }
    }

    public function talk() {
        echo "my name is ".$this->name;
    }
}

$myDude = new Person("Björnen");

$myDude->talk();
