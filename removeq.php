<?php
include "connection.php";
$id=$_GET['id'];
$name=$_GET['name'];
$result=mysqli_query($connection,"DELETE FROM `questions` WHERE `qstn_id`='$id' and `qstn`='$name'");
$re=$result=mysqli_query($connection,"DELETE FROM `answers` WHERE `qstnid`='$id'");
header("Location:remove_edit.php");
?>
