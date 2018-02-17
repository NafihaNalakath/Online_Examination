<?php
include "connection.php";
$q1=$_POST["answer1"];
$q2=$_POST["answer2"];
$q3=$_POST["answer3"];
$q4=$_POST["answer4"];
$q5=mysqli_query($connection,UPDATE `questions` SET `qstn_id`='',`qstn`='',`type`='easy' );

?>
