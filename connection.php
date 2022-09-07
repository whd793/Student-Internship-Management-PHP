<?php

$servername="159.203.120.63";
$username="isaac";
$password="FrogFriend22";
$dbname="InternForm456";


//FrogFriend22

$con=new mysqli($servername, $username, $password,$dbname);

if ($con->connect_error){
	die("Connection Failed:".$conn->connect_error);	
}

?>
