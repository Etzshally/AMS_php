<?php
$server="localhost";
$username="root";
$dbpassword="";
$dbname="adms";

$conn=mysqli_connect($server,$username,$dbpassword,$dbname);
IF (!$conn) {
	die("CONNECTION FAILED:" .mysqli_connect_error());
}


?>