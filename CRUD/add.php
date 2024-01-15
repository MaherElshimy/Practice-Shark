<?php 

$name = $_POST ['student'];
$connect_with_DB = mysqli_connect("localhost","root" , "" ,"shark management");


$query = "INSERT INTO `student` (`name`) VALUES ('$name')" ; 
mysqli_query($connect_with_DB , $query);


if (mysqli_affected_rows($connect_with_DB)==1) {
    header("location:show.php");
} elseif (mysqli_affected_rows($connect_with_DB) == -1 ) {
    echo "Syntax error" ;  
} else { 
    echo "Not inserted";    
}


?>