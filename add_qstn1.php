<?php
include "connection.php";
$type=$_POST["type"];
$qstn=$_POST["qstn"];
$inst=$_POST["instruction"];
$id=uniqid();
//correct answer of question
$answer=$_POST["canswr"];

//multiple choices
$an1=$_POST["answer1"];
$an2=$_POST["answer2"];
$an3=$_POST["answer3"];
$an4=$_POST["answer4"];

$insrtruction_query=mysqli_query($connection,"INSERT INTO `instructions`(`qstn_id`, `instruction`) VALUES('$id','$inst')");
$Question_query="INSERT INTO `questions`(`qstn_id`,`qstn`, `type`) VALUES ('$id','$qstn','$type')";

$result1=mysqli_query($connection,$Question_query);
if($answer=='1')
{
  $q1=mysqli_query($connection,"INSERT INTO `answers`(`qstnid`, `answers`, `correct_answer`)
    VALUES ('$id','$an1','1')");
    $q1=mysqli_query($connection,"INSERT INTO `answers`(`qstnid`, `answers`, `correct_answer`)
      VALUES ('$id','$an2','0')");
    $q1=mysqli_query($connection,"INSERT INTO `answers`(`qstnid`, `answers`, `correct_answer`)
        VALUES ('$id','$an3','0')");
     $q3=mysqli_query($connection,"INSERT INTO `answers`(`qstnid`, `answers`, `correct_answer`)
         VALUES ('$id','$an4','0')");
  }
    else if ($answer=='2')
  {
  $q1=mysqli_query($connection,"INSERT INTO `answers`(`qstnid`, `answers`, `correct_answer`)
    VALUES ('$id','$an1','0')");
    $q1=mysqli_query($connection,"INSERT INTO `answers`(`qstnid`, `answers`, `correct_answer`)
      VALUES ('$id','$an2','1')");
    $q1=mysqli_query($connection,"INSERT INTO `answers`(`qstnid`, `answers`, `correct_answer`)
        VALUES ('$id','$an3','0')");
     $q3=mysqli_query($connection,"INSERT INTO `answers`(`qstnid`, `answers`, `correct_answer`)
         VALUES ('$id','$an4','0')");
    }

    else if($answer=='3')
    {
    $q1=mysqli_query($connection,"INSERT INTO `answers`(`qstnid`, `answers`, `correct_answer`)
      VALUES ('$id','$an1','0')");
      $q1=mysqli_query($connection,"INSERT INTO `answers`(`qstnid`, `answers`, `correct_answer`)
        VALUES ('$id','$an2','0')");
      $q1=mysqli_query($connection,"INSERT INTO `answers`(`qstnid`, `answers`, `correct_answer`)
          VALUES ('$id','$an3','1')");
       $q3=mysqli_query($connection,"INSERT INTO `answers`(`qstnid`, `answers`, `correct_answer`)
           VALUES ('$id','$an3','0')");
      }

    elseif($answer=='4')
      {
      $q1=mysqli_query($connection,"INSERT INTO `answers`(`qstnid`, `answers`, `correct_answer`)
        VALUES ('$id','$an1','0')");
        $q1=mysqli_query($connection,"INSERT INTO `answers`(`qstnid`, `answers`, `correct_answer`)
          VALUES ('$id','$an2','0')");
        $q1=mysqli_query($connection,"INSERT INTO `answers`(`qstnid`, `answers`, `correct_answer`)
            VALUES ('$id','$an3','0')");
         $q3=mysqli_query($connection,"INSERT INTO `answers`(`qstnid`, `answers`, `correct_answer`)
             VALUES ('$id','$an3','1')");
        }
header("Location:add_qstn.php") ;

 ?>
