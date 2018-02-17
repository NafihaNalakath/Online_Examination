<?php
include "connection.php";
$id=$_GET['id'];
$instruction=$_POST['instruction'];
$qn=mysqli_query($connection,"UPDATE `instructions` SET `instruction`='$instruction' WHERE `id`='$id' " );
header("Location:remove_edit_instruction.php")
?>
