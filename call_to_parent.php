<?php
    
    class Grandpa {

        function __construct($value) {
            echo "Value:" . $value;
        }
    }

    class Child extends Grandpa {

        function __construct($value) {
            parent::__construct($value);
        }
    }

    new Child("1");
    new Child("2");
    new Child();