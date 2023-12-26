<?php 
	include("menu.php");
	include("connection.php");
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
			background-color: #c2c2a3
			opacity:0.01;


		}
	</style>
</head>
<body>
	<div class="first">
	<div align="right" style="margin-right: 30px; ">
		<!-- <button class="btn btn-default" onclick="GoBack();"><i class="mdi mdi-arrow-left"></i> Back</button> -->
		<button class="button-norm"> <a href="/ADMS/classreg.php?id=0" ><i class="mdi mdi-plus"></i> Add New</a> </button> <!-- class="btn btn-success" -->
	</div>
	<table border="">
		<thead>
			
			<th>Class ID</th>
			<th>Class Name</th>
			<th>Faculty</th>
			<th>IsActive </th>
			<th>Created By</th>
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

		$sql = "SELECT f.FacultyName ,c.*  FROM class c left join faculty f on c.Faculty = f.RowId";
		$query = mysqli_query($conn, $sql);

		if (mysqli_num_rows($query)>0) 
		{
			while ($rows = mysqli_fetch_assoc($query)) 
			{
				echo '<tr>';
				echo '<td>'.$rows['RowId'].'</td>';
				echo '<td>'.$rows['ClassName'].'</td>';
				echo '<td>'.$rows['FacultyName'].'</td>';
				echo '<td>'.$rows['IsActive'].'</td>';
				echo '<td>'.$rows['CreatedBy'].'</td>';
				echo '<td><button class="button-norm"><a href ="classreg.php?id='.$rows['RowId'].'">
				Edit </a></button></td>';
				//<a href = "delete.php?id='.$rows['id'].'">Delete</a> 
				echo '</tr>';
			}
		}
		
		?>
	</table>
	</div>
</body>
</html>
