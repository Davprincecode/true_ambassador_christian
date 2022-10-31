<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "trueAmbassador";

$con = mysqli_connect($db_host, $db_username, $db_password, $db_name);
if(!$con){
die("connection failed: ".mysqli_connect_error());
}