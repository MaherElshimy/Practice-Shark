<?php 


$id = $_GET ['id']; 
$connect_with_DB = mysqli_connect("localhost","root" , "" ,"shark management");

$query = "DELETE FROM `student` WHERE `id` = '$id'" ; 
mysqli_query($connect_with_DB , $query);



if (mysqli_affected_rows($connect_with_DB)==1) {
    header("location:show.php");
} elseif (mysqli_affected_rows($connect_with_DB) == -1 ) {
    echo "Syntax error" ;  
} else { 
    echo "Not inserted";    
}