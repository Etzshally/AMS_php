<?php 
	// include("menu.php");
	include("connection.php");
	$id=$_GET['id'];
	$sql= "SELECT * FROM student where RowId=$id";
	$query = mysqli_query($conn, $sql);
	if(mysqli_num_rows($query)>0){
  		$userinfo = mysqli_fetch_assoc($query);
      	$id=$userinfo['RowId'];
  		$UserName= $userinfo['StudentName'];
      	$UserFaculty = $userinfo['StudentFaculty'];
      	$UserAdmin = $userinfo['IsAdmin'];
      	$UserEnrolledClass= $userinfo['Enrolledclass'];
      	$UserPhoneNo = $userinfo['PhoneNo'];
      	$UserEmail = $userinfo['Email'];
     	$UserId = $userinfo['UserId'];
      	$UserActive = $userinfo['IsActive'];
    }

   
	
		

	ini_set('memory_limit', '20000M');
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		ul {
		  list-style-type: none;
		  margin: 0;
		  padding: 0;
		  overflow: hidden;
		  background-color: #333333;
		}
		 
		li {
		  float: left;
		}

		li a {
		  display: block;
		  color: white;
		  text-align: center;
		  padding: 16px;
		  text-decoration: none;
		}
		li select {
			background-color: #333333;
		  display: block;
		  color: white;
		  text-align: center;
		  padding: 16px;
		  text-decoration: none;
		}

		li a:hover {
		  background-color: #111111;
		}
		fieldset{
		  background: rgba(194, 194, 163, 0.85);
		  color :red;
		}
		legend{
			color:red;
		}
		body {
	  		background-image: url("image/backg.jpg");
	        background-repeat:no-repeat;
	       background-size:cover;
	       opacity :0.5%;	       
	       font-family: arial;
	       font-size: 20px;
		}
		div.first {
  			background: rgba(194, 194, 163, 0.85);
		}
		.button-primary {
		  background-color: rgba(0,0,255,0.9);;
		  border: none;
		  color: white;
		  padding-top: 10px;
		  padding-bottom: 10px;
		  padding-left: 20px;
		  padding-right: 20px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  border-radius: 8px;
		  font-size: 20px;
		  font-weight: 500;
		}
		.button-danger {
		  background-color: red;
		  border: none;
		  color: white;
		  padding-top: 10px;
		  padding-bottom: 10px;
		  padding-left: 20px;
		  padding-right: 20px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  border-radius: 8px;
		  font-size: 20px;
		  font-weight: 500;
		}
		.button-norm {
		  background-color: rgba(0,255,0,0.9);
		  border: none;
		  color: white;
		  padding-top: 10px;
		  padding-bottom: 10px;
		  padding-left: 20px;
		  padding-right: 20px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  border-radius: 8px;
		  font-size: 20px;
		  font-weight: 500;
		}
		input[type=text], select {
		  width: 400px;
		  padding: 12px 20px;
		  margin: 10px 0;
		  margin-left: 20px;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 16px;
		  box-sizing: border-box;
		}
		th{
			background-color: rgba(0,0,0,0.8);
			color: white;
		}
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
		<!-- <button class="button-norm"> <a href="/ADMS/ClassSubjectReg.php?id=0" ><i class="mdi mdi-plus"></i> Add New</a> </button> --> <!-- class="btn btn-success" -->
	</div>
	<table border="">
		<thead>
			
			<th>Subject ID</th>
			<th>Subject Name</th>
			<th>No of class</th>
			<th>Attended class </th>
			<th> Attendance Percentage</th>
			<th>Status</th>			

		</thead>
		

<?php

// $server = "localhost";
// $username = "root";
// $password = "";
// $dbname = "sunway";
// // create connection
// $conn = mysqli_connect($server, $username,$password,$dbname);


		
		//include 'config.php';

		// $sql = "SELECT cs.RowId, s.SubjectName, f.FacultyName, c.ClassName, cs.IsActive,cs.CreatedBy ,CONCAT(cs.SubjectName,cs.Faculty,cs.Class) as organizedclass,cs.SubjectName as SubjectCode  FROM classsubject cs
		// 		INNER JOIN subject s on cs.SubjectName = s.SubjectCode
		// 		INNER JOIN faculty f on cs.Faculty = f.RowId
		// 		INNER JOIN class c on cs.Class = c.RowId ";
		// 		//echo $sql;
		// $query = mysqli_query($conn, $sql);
		 $sql = "SELECT cs.RowId, s.SubjectName ,CONCAT(cs.SubjectName,cs.Faculty,cs.Class) as organizedclass ,cs.SubjectName as SubjectCode  FROM classsubject cs
				INNER JOIN subject s on cs.SubjectName = s.SubjectCode
				INNER JOIN faculty f on cs.Faculty = f.RowId
				INNER JOIN class c on cs.Class = c.RowId 
				where cs.Faculty=$UserFaculty and cs.Class=$UserEnrolledClass ";
				//echo $sql;
		$query1 = mysqli_query($conn, $sql);

		if (mysqli_num_rows($query1)>0) 
		{
			while ($rows = mysqli_fetch_assoc($query1)) 
			{
				echo '<tr>';
				echo '<td>'.$rows['SubjectCode'].'</td>';
				echo '<td>'.$rows['SubjectName'].'</td>';
				$Table= $rows['organizedclass'];
				$QueryTotalClass= "SELECT count(*) AS TotalClass FROM information_schema.columns WHERE table_name ='".$Table."';";
				//echo $QueryTotalClass;
				$query2= mysqli_query(mysqli_connect('localhost', 'root', '','information_schema'), $QueryTotalClass);

				if(mysqli_num_rows($query2)>0){
					$rows2 = mysqli_fetch_assoc($query2);

					$TotalClass = $rows2['TotalClass']-3;
				}

				echo '<td>'.$TotalClass.'</td>';

				$TableColumn = "SELECT COLUMN_NAME as TColumn FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '".$Table."'; ";
				//echo $TableColumn;
				$query3 = mysqli_query(mysqli_connect('localhost', 'root', '','information_schema'), $TableColumn);
				$AttendedClass=0;
				if (mysqli_num_rows($query3)>0) 
				{
					while ($rows3 = mysqli_fetch_assoc($query3)) 
					{	
						
						$checkabsent = "SELECT ".$rows3['TColumn']." FROM ".$Table." WHERE StudentId =".$id." and ".$rows3['TColumn']." <> 0 or ".$rows3['TColumn']." is not null  ;";
						$query4=mysqli_query($conn, $checkabsent);
						if(mysqli_num_rows($query4)>0){
							$AttendedClass ++;
						}				
					}
				}
				$AttendedClass= $AttendedClass-3;


				echo '<td>'.$AttendedClass.'</td>';
				$AttendancePercentage=$AttendedClass/$TotalClass*100;
				echo '<td>' .$AttendancePercentage.'</td>';
				if($AttendancePercentage>=80){
					echo '<td> Qualified </td>';	
				}
				elseif($AttendancePercentage<80 && $AttendancePercentage >70){
					echo '<td> Be Regular </td>';
				}
				else{
					echo '<td> not Qualified </td>';
				}
			}
		}
		
		?>
	</table>
	</div>
</body>
</html>