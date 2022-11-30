<?php
class person{
    public $name = "Elon Mask"; $age=50;//property

    function __construct($name , $age)
    {
        $this->name = $n;
        $this->age = $a;
    }
    function show (){
        print($this->name . $this->age);
    }
}

    $obj1 = new Person ("Mark Zuckerberg",50);
   // $obj1->name = "Mark Zuckerberg<br />";
   // $obj1->age = 50;
    $obj1->show();
?>