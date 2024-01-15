<?php


if (isset($_POST['name'])) {


    $connection_with_DB = mysqli_connect("localhost" , "root", "" , "shark management") ;

    $name = $_POST['name'];
    $id = $_POST['id'];

    $query = "UPDATE `student` SET `name` = '$name' WHERE `id` = $id" ; 
    
    $connect_data = mysqli_query($connection_with_DB , $query);

    if (mysqli_affected_rows($connection_with_DB) == 1 ) {
        header("Location:show.php");
    }
    
    
} else {

$id = $_GET['id'] ; 

$connection_with_DB = mysqli_connect("localhost" , "root", "" , "shark management") ;

$query = "SELECT * FROM `student` WHERE `id` = '$id'" ; 

$connect_data = mysqli_query($connection_with_DB , $query);


$student = mysqli_fetch_assoc($connect_data);
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
    <form action="update.php" method = "POST">
        <input type="text" name="name" value=<?= $student['name']; ?>>
        <input type="hidden" value=<?= $student['id']; ?> name="id">
        <input type="submit">
    </form>
</body>
</html>