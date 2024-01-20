<?php

trait parentt {
    public function test1(){
        echo "test1"; 
    }
}

trait child {
    public function test2(){
        echo "test2"; 
    }
}

class validation{
    use parentt,child;
    public function test(){
        echo "test"; 
    }

}



$val = new Validation ;
$val->test();
echo"<hr>";
$val->test1();
echo"<hr>";
$val->test2();
?>