<?php 
	include("connection.php");
	if($_SERVER['REQUEST_METHOD']=="GET"){
		$Table = $_GET['Class'];
		$RowId = $_GET['id'];
		$ClassDate = $_GET['ClassDate'];
		$status=$_GET['status'];
		$SubjectName=$_GET['SubjectName'];

	}
	if($status==1){
		$sql = "update ".$Table." set ".$ClassDate." = 1 where RowId= ".$RowId.";";
	}else{
		$sql = "update ".$Table." set ".$ClassDate." = 0 where RowId= ".$RowId.";";
	}
	$query = mysqli_query($conn, $sql);
	if (!$query)
	  {
	  	echo("Error description: " . mysqli_error($query));
	  }
	  else{
	  		header("Location: /ADMS/MakeAttendance.php?id=".$Table."&SubjectName=".$SubjectName."");
	  		ob_flush();
	}

?>