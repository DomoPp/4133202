<?php 
require "conDB.php";

$sql = "SELECT * FROM tb_member";

$result = mysqli_query($link, $sql);
  
require "conDB.php";

$user = $_GET['name'];

$strSQL = "UPDATE tb_member WHERE name ='$user' ";
mysqli_query($link,$strSQL) or die(mysqli_error($link));
?>
