<?php
include "connection.php";
$id=uniqid();
$in=$_POST['instruction'];
$instruction=$_POST['instruction'];
$instruction_query=mysqli_query($connection,"INSERT INTO `instructions`(`qstn_id`, `instruction`) VALUES ('$id','$instruction')");
header("Location:home.php");
 //$q=mysqli_query($connection,$instruction_query);

//$id=$_GET['id'];
//$qn=mysqli_query($connection,"UPDATE `instructions` SET
//`instruction`='$in', where `id`='$id'" );
?>
