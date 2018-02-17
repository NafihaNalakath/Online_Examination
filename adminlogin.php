
<?php
include 'connection.php';
$u=$_POST["adminname"];
$p=$_POST["password"];
$q1="SELECT * FROM `admin` WHERE  `password` LIKE '$p' AND `name` LIKE '$u'";
$r1=mysqli_query($connection,$q1);

if($result=mysqli_fetch_array($r1))
{

  session_start();
  $_SESSION['login_user']="$u";
  header("Location:home.php") ;

}else {


  header("Location:index.html") ;

}
 ?>
