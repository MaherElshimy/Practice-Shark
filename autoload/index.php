<?php

spl_autoload_register(function($x){
    include $x.'.php';
});


$validate = new validation() ; 
$validate->test();
echo "<br>";

$db = new db(); 
$db->test();
echo "<br>";

?>
