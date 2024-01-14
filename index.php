<?php

$con = mysqli_connect("localhost" ,"root","","shark management" );

// $phone = $_POST['phone'];
// $user_id = $_POST['user_id'] ; 

// mysqli_query($con, "INSERT INTO `phone` (`phone`, `user_id`) VALUES ('$phone','$user_id')");

// $sql = "DELETE FROM `phone` WHERE `id` = 2 " ;
// $sql = "UPDATE `phone` SET `phone` = 3333 WHERE `id` = 3 " ;
// $sql = "SELECT * FROM `phone` " ;
$sql = "SELECT * FROM `student` " ;
$my_queryy = mysqli_query ($con, $sql );
$data = mysqli_fetch_all($my_queryy ,1);

// echo "<pre>";
// print_r($data);
// echo "</pre>";

if (mysqli_affected_rows($con)==1) {
    echo "Inserted" ; 
} elseif (mysqli_affected_rows($con) == -1 ) {
    echo "Syntax error" ;  
} else { 
    echo "Not inserted";    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($data as $row ) :?>
        <li><?php echo $row['name'] ?> </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>