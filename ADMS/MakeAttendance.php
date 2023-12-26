<?php
	include('menu.php');
	include('connection.php');
	if($_SERVER["REQUEST_METHOD"]=="GET"){
		$Table = $_GET['id'];
		$SubjectName = $_GET['SubjectName'];
	}
	//echo $Table;
	$date = date("m_d");
	$classdate= $Table.$date;


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table{
			margin-left: 30px;
			margin-right: 50px;
			width:95%;

		}
		tr,td,th{
			border: 1px solid black;			
			margin-right: 10%;
			padding: 10px;


		}
	</style>

</head>
<body>

	<div class="first">
	<div align="right" style="margin-right: 30px; ">
		<!-- <button class="btn btn-default" onclick="GoBack();"><i class="mdi mdi-arrow-left"></i> Back</button> -->
		<!-- <button> <a href="/ADMS/ClassSubjectReg.php?id=0" ><i class="mdi mdi-plus"></i> Add New</a> </button>  --><!-- class="btn btn-success" -->
	</div>
	<table border="">
		<form>
			<fieldset>
				<legend><?php echo $SubjectName;  ?> &nbsp; Date : <?php echo date("Y/m/d l"); ?></legend>
			</fieldset>
		</form>
		<thead>
			
			<th>Roll ID</th>
			<th>Student Name</th>
			<th>Attend </th>
			<!-- <th> Name</th>			
			<th>Is Active</th>
			<th>Created By</th> -->
			<th>Action</th>
			

		</thead>
		

<?php

// $server = "localhost";
// $username = "root";
// $password = "";
// $dbname = "sunway";
// // create connection
// $conn = mysqli_connect($server, $username,$password,$dbname);


		
		//include 'config.php';

		$sql = "SELECT RowId, StudentName, ".$classdate." as Attend FROM ".$Table;
				//echo $sql;
		$query = mysqli_query($conn, $sql);

		if (mysqli_num_rows($query)>0) 
		{
			while ($rows = mysqli_fetch_assoc($query)) 
			{
				echo '<tr>';
				echo '<td>'.$rows['RowId'].'</td>';
				echo '<td>'.$rows['StudentName'].'</td>';
				echo '<td>'.$rows['Attend'].'</td>';
				// echo '<td>'.$rows['SubjectName'].'</td>';
				// echo '<td>'.$rows['IsActive'].'</td>';
				// echo '<td>'.$rows['CreatedBy'].'</td>';
				//echo '<td> <input type="button" onclick="myfunc()" value="Organized Class" /> </td>';
				 echo '<td><button class="button-primary"> <a href ="Attendance.php?id='.$rows['RowId'].'&Class= '.$Table.'&ClassDate= '.$classdate.'&status=1&SubjectName='.$SubjectName.'"> Present </a></button><button class="button-danger"> <a href ="Attendance.php?id='.$rows['RowId'].'&Class= '.$Table.'&ClassDate= '.$classdate.'&status=0&SubjectName='.$SubjectName.'"> Absent </a></button>

				 </td>';
				//<a href = "delete.php?id='.$rows['id'].'">Delete</a>
				echo '</tr>';
			}
		}
		
		?>
	</table>
	
</div>

</body>
</html>
