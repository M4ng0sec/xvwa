<?php

$con = mysql_connect("db","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }else{
	$conn1 = new mysqli("db", "root", "", "xvwa");
	echo 00000;
	echo "------";
	if(!$conn1){
		echo 2222;
	}else{
		echo 1111;
	}
}

?>
