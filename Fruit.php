<?php

class Fruit{

    protected string $name;
    protected string $color;
    
    function set_name($name,){
        $this->name= $name;
     
        

    }
    function set_color($color,){
        $this->color= $color;
        

    }

    function __construct($name, $color){
        $this->name= $name;
        $this->color= $color;
    }


    function get_name(){
        return $this->name;
    }

}


$fruit= new Fruit('Apfel', 'Gelb');




var_dump($fruit);
