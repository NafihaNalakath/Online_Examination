<?php
include "connection.php";
$r1=$_GET['type'];
if($r1=='easy')
{
  $easy=(mysqli_query($connection,"UPDATE `type` SET `type`='easy' where `id`='0'"));

}
elseif ($r1=='medium')
{
  $medium=(mysqli_query($connection,"UPDATE `type` SET `type`='medium' where `id`='0'"));
}
elseif($r1=='hard')
{
$hard=(mysqli_query($connection,"UPDATE `type` SET `type`='hard' where `id`='0'"));
}
header("location:home.php");
 ?>
