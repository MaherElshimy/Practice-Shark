<?php

spl_autoload_register(function($x){
    if (file_exists("Database/".$x.".php")) {
        include "Database/".$x.".php";
    } else {
        include "lib/".$x.".php";

    }
});


// $validate = new validation() ; 
// $validate->test();
// echo "<br>";

// $db = new db(); 
// $db->test();
// echo "<br>";

validation::welcome();
echo "<br>";
$db = new db(); 
$db->test();

?>
