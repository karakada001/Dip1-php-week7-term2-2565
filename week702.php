<?php
    Class Calculation{
        public $a, $b, $c; //property

        function sum(){ //method
            $this->c = $this->a + $this->b;
        }
    }
    $c1 = new Calculation(); //instance object
?>