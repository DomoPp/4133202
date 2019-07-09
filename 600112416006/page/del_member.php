<?php
require "conDB.php";

$user = $_GET['name'];

$strSQL = "DELETE FROM tb_member WHERE name ='$user' ";
mysqli_query($link,$strSQL) or die(mysqli_error($link));

?>