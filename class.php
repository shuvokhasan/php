<?php
    class Cars {
        // Properties
        public $name;
        public $color;

        // Methods
        function set_name($name){
            $this->name = $name;
        }

        function get_name(){
            return $this->name;
        }
    }

    $toyota = new Cars();
    $toyota->set_name('corolla');

    echo $toyota->get_name();