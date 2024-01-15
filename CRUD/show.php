<?php 

session_start();
if (empty($_SESSION['user'])) {
    header("location: login.php");
}
$connect_with_DB = mysqli_connect("localhost","root" , "" ,"shark management");
$query = "SELECT * FROM `student`" ; 

$connect_data = mysqli_query($connect_with_DB , $query);


$students = mysqli_fetch_all($connect_data , 1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1">
        <tr>
            <th>id</th>
            <th>name</th>

            <?php if($_SESSION['user']['role'] == 1): ?>
            <th>update</th>
            <th>delete</th>
            <?php endif; ?>
        
        </tr>

        <?php foreach ($students as $student) :?>
        <tr>
            <td><?= $student['id'];?></td>
            <td><?= $student['name'];?></td>

            <?php if($_SESSION['user']['role'] == 1): ?>
            <td><a href="update.php?id=<?= $student['id'];?>">update</a></td>
            <td><a href="delete.php?id=<?= $student['id'];?>">delete</a></td>
            <?php endif; ?>

        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>