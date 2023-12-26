<?php
	include('connection.php'); 
	ob_start();  //Turn on output buffering
	$Table="";
	if($_SERVER["REQUEST_METHOD"]=="GET"){
		$Table =$_GET['id'];
	}
	

	$date = date("m_d");
	$classdate= $Table.$date;
	
	$sql = 'alter table '.$Table.' add '.$classdate.' int;' ;
	$query= mysqli_query($conn, $sql);
	if (!$query)
	  {
	  	echo("Error description: " .mysqli_error($query2));
	  }
	  else{
	  		header("Location: /ADMS/RegedClassSubject.php");
	  		ob_flush();   // To output what is stored in the internal buffer
	  }
	

?>