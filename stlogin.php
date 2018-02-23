
<?php
include 'connection.php';

$u=$_POST["studentname"];
$r=$_POST["rollnumber"];
$q1="SELECT * FROM `students` WHERE  `rollnumber` LIKE '$r' AND `studentname` LIKE '$u'";
$r1=mysqli_query($connection,$q1);
if($result=mysqli_fetch_array($r1))
{
  session_start();
  $_SESSION[login_user]="$u";
  $_SESSION[roll_num]="$r";
  header("Location:einstruction.php");
}else {
    echo "Inavalid student name or rollnuber";
    header("Location:index.html") ;
}
 ?>
