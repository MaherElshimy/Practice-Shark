<?php

class calc { 
    public $number1 ; 
    public $number2 ; 
    public $result ; 


    function add(){
        $this->result = $this->number1 + $this->number2 ;
        return $this->result; 
    }

    function sub(){
        $this->result = $this->number1 - $this->number2 ;
        return $this->result; 
    }

    function mult(){
        $this->result = $this->number1 * $this->number2 ;
        return $this->result; 
    }

    function div(){
        $this->result = $this->number1 / $this->number2 ;
        return $this->result; 
    }

    function print_calc(){
        echo $this->result;
    }
}


$object =new Calc(); 
$object->number1 = 20 ;
$object->number2 = 10 ;
$object->add();
$object->print_calc();
echo "<hr>";
$object->sub();
$object->print_calc();
echo "<hr>";
$object->mult();
$object->print_calc();
echo "<hr>";
$object->div();
$object->print_calc();
echo "<hr>";



class car {
    public $color ; 
    public function move(){
        echo "move";
    }
}

class bmw extends car {
    public function stop(){
        echo "stop";
    }

}


?>