<?php
include "connection.php";
$id=$_GET['id'];
//$qn=mysqli_query($connection,"UPDATE `i` SET
//`qstn`='$question',`type`='$ty' where `qstn_id`='$id'" );
$re=$result=mysqli_query($connection,"DELETE FROM `instructions` WHERE `id`='$id'");
header("Location:remove_edit_instruction.php");
 ?>
