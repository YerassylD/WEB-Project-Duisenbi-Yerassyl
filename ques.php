<?php
$con = new mysqli("localhost","Yerassyl","87053163124","SF");
$con ->query("SET NAMES utf8");
$id = $_REQUEST["id"];
$query = "SELECT * FROM Add_photo WHERE id=$id";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
$con->close();
?>
Are sure you want to delete</br>
<a href="delete.php?id= <?= $row['id']?>">Yes</a>
<a href="retrieve.php">No</a>


