<?php
  $db_host="localhost:3306";
  $db_user="root";
  $db_password="";
  $db_bd="bd_cse_fic";
  $conexion = mysqli_connect($db_host,$db_user,$db_password,$db_bd) or die(mysqli_error());
?>