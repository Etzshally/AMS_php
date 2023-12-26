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


		}
	</style>

</head>
<body>
	<div class="first">
	<div align="right" style="margin-right: 30px; ">
		<!-- <button class="btn btn-default" onclick="GoBack();"><i class="mdi mdi-arrow-left"></i> Back</button> -->
		<button class="button-norm"> <a href="/ADMS/studentreg.php?id=0" ><i class="mdi mdi-plus"></i> Add New</a> </button> <!-- class="btn btn-success" -->
	</div>
	<table border="">
		<thead>
			
			<th>Student ID</th>
			<th>Student Name</th>
			<th>Student Faculty</th>
			<th>Class</th>
			<th>Phone No</th>
			<th>Email</th>
			<th>Action</th>
			

		</thead>
		

<?php

// $server = "localhost";
// $username = "root";
// $password = "";
// $dbname = "sunway";
// // create connection
// $conn = mysqli_connect($server, $username,$password,$dbname);


		
		

		$sql = "SELECT s.RowId, s.StudentName, f.FacultyName as StudentFaculty,c.className as Enrolledclass, s.PhoneNo, s.Email  FROM student as s left join faculty f on s.StudentFaculty = f.RowId left join class c on s.Enrolledclass = c.RowId where s.IsActive=1;";
		$query = mysqli_query($conn, $sql);

		if (mysqli_num_rows($query)>0) 
		{
			while ($rows = mysqli_fetch_assoc($query)) 
			{
				echo '<tr>';
				echo '<td>'.$rows['RowId'].'</td>';
				echo '<td>'.$rows['StudentName'].'</td>';
				echo '<td>'.$rows['StudentFaculty'].'</td>';
				echo '<td>'.$rows['Enrolledclass'].'</td>';
				echo '<td>'.$rows['PhoneNo'].'</td>';
				echo '<td>'.$rows['Email'].'</td>';
				echo '<td><button class="button-norm"> <a href ="studentreg.php?id='.$rows['RowId'].'">
				Edit </a></button></td>';	
				// <a href = "studentreg.php?id='.$rows['RowId'].'">Delete</a>
				echo '</tr>';
			}
		}
		
		?>
	</table>
</div>
</body>
</html>