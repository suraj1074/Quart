<?php
	$servername = "localhost";
	$username = "username";
	$password = "password";
	$con = mysql_connect($servername,$username,$password);
	if(!$con){
		die(mysql_error());
	}
	else{
		if(!mysql_select_db("quart")){
			die(mysql_error());
		}
	}
?>
