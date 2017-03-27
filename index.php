<?php
$con = mysql_connect("localhost","slabinoha","");
mysql_select_db("c9", $con);
$val = $_GET['val'];
$query = "
  INSERT INTO `temperature` VALUES (NULL, ".$val.", now());";
mysql_query($query);  
mysql_close($con);
?>