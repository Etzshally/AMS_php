<?php
	include('menu.php');
	include('connection.php');
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
		<button class="button-norm"> <a href="/ADMS/ClassSubjectReg.php?id=0" ><i class="mdi mdi-plus"></i> Add New</a> </button> <!-- class="btn btn-success" -->
	</div>
	<table border="">
		<thead>
			
			<th>SubjectClass ID</th>
			<th>Faculty Name</th>
			<th>Class Name </th>
			<th>Subject Name</th>			
			<th>Is Active</th>
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

		$sql = "SELECT cs.RowId, s.SubjectName, f.FacultyName, c.ClassName, cs.IsActive,cs.CreatedBy ,CONCAT(cs.SubjectName,cs.Faculty,cs.Class) as organizedclass,cs.SubjectName as SubjectCode  FROM classsubject cs
				INNER JOIN subject s on cs.SubjectName = s.SubjectCode
				INNER JOIN faculty f on cs.Faculty = f.RowId
				INNER JOIN class c on cs.Class = c.RowId ";
				//echo $sql;
		$query = mysqli_query($conn, $sql);

		if (mysqli_num_rows($query)>0) 
		{
			while ($rows = mysqli_fetch_assoc($query)) 
			{
				echo '<tr>';
				echo '<td>'.$rows['RowId'].'</td>';
				echo '<td>'.$rows['FacultyName'].'</td>';
				echo '<td>'.$rows['ClassName'].'</td>';
				echo '<td>'.$rows['SubjectName'].'</td>';
				echo '<td>'.$rows['IsActive'].'</td>';
				echo '<td>'.$rows['CreatedBy'].'</td>';
				//echo '<td> <input type="button" onclick="myfunc()" value="Organized Class" /> </td>';
				 echo '<td><button class="button-primary"> <a href ="AddOrganizedClass.php?id='.$rows['organizedclass'].'">
				 organized class </a></button ><button class="button-norm"><a href ="MakeAttendance.php?id='.$rows['organizedclass'].'&SubjectName='.$rows['SubjectName'].'">
				 Make Attendance</a></button></td>';
				//<a href = "delete.php?id='.$rows['id'].'">Delete</a>
				echo '</tr>';
			}
		}
		
		?>
	</table>
	</div>
</body>
</html>
