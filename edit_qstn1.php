<?php
include "connection.php";
$id=$_GET['id'];
//$name=$_GET['name'];
$ty=$_POST['type'];
$answer=$_POST['canswr'];
$question=$_POST['question'];
    $qn=mysqli_query($connection,"UPDATE `questions` SET
    `qstn`='$question',`type`='$ty' where `qstn_id`='$id'" );
    for($i=1;$i<5;$i++)
    {
    ${'answer'.$i}=$_POST['answer'.$i];
    echo ${'answer'.$i};
    ${'an'.$i}=${'answer'.$i};
}
    //$an=mysqli_query($connection,"UPDATE `answers` SET
    //`answers`='$a',`correct_answer`='$correctan' where `id`='$id'");
    $del=mysqli_query($connection,"DELETE from `answers` WHERE `qstnid`='$id'");
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
                 VALUES ('$id','$an4','0')");
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
                   VALUES ('$id','$an4','1')");
              }
header("Location:remove_edit.php");

      echo"qstn edited successfully";

?>
