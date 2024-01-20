<?php

// class car {
//     private function move(){
//         echo "move"; 
//     }
// }




// class bmw extends car {
//     public function stop(){
//         $this->move(); 
//     }

// }


// $car = new bmw; 
// $car -> stop();



// class user{ 
//     private $password ; 
//     public function set_password($p) {
//         $this->password = md5($p);
//     }
//     public function get_password() {
//         return $this->password;
//     }

// }


// $u = new user() ; 
// $u->set_password("Maher");
// echo $u->get_password();


// interface car {
//     public function move(); 
//     public function stop(); 
// }


// class bmw implements car {

//     public function move() {

//     }
//     public function stop() {
        
//     }

// }




// abstract class db{
//     abstract function insert();
//     abstract function select();
//     abstract function update();
//     abstract function delete();

//     function connect(){
//         echo "connect"; 
//     }

// }



// class car {
    
//     private $color ; 

//     public function __set($name , $value) {
//         echo "This $name not access because it is private";
//     }

//     public function __get($name) {
//         echo "This $name not access";
//     }

//     public function __call($name,$argument) {
//         echo "This method $name not found ...";
        
//         print_r($argument);
//     }


    
// }

// $a = new car ; 
// $a->color = "Green";
// echo "<br>";
// echo $a->color ;
// echo "<br>";
// $a->Test('maher' , [10,51]);



// class calc { 
//     public function __call($name,$argument) {
//         if ($name == 'add') {

//             if (count($a) > 2 ) {
//                 echo $argument[0] + $argument[1] + $argument[2];
//             } else {
//                 echo $argument[0] + $argument[1];
//             }
//         }
//     }
// }

// class newcalc extends calc {
//     // public function add($x , $y) {
//     //     echo ($x+$y) /2;  // Overwrite
//     // }

// }

// $c = new newcalc();
// $c->add(20,10);









?>