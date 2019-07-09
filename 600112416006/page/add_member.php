<?php
include "conDB.php";

$user =$_POST['user'];
$age =$_POST['age'];
$sex=$_POST['sex'];
$fav_a =$_POST['fav_a'];
$fav_b =$_POST['fav_b'];
$provice =$_POST['provice'];

$fav=$fav_a.",".$fav_b;

$strzzsql = "INSERT INTO tb_member 
             VALUES ('$user','$age','$sex','$fav','$provice')";

$result = mysqli_query($link, $strzzsql);
             
?>