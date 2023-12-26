<?php
	include("connection.php");
	//include("menu.php");
	// print_r($_GET);	
	$StudentName="";
	$StudentFaculty="";
	$IsAdmin="";
	$Enrolledclass="";
	$PhoneNo = "";
	$Email = "";
	$UserId = "";
	$UserPwd = "";
	$ConformUserPwd="";
	$IsActive = "";
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		$id=$_GET['id'];
		//echo $id;
		if($id != 0){
			$sql="SELECT * FROM student where RowId='$id'";

			$query=mysqli_query($conn,$sql);
			$model=mysqli_fetch_assoc($query);
			$StudentName = $model['StudentName'];
			$StudentFaculty = $model['StudentFaculty'];
			$IsAdmin = $model['IsAdmin'];
			$Enrolledclass = $model['Enrolledclass'];
			$PhoneNo = $model['PhoneNo'];
			$Email = $model['Email'];
			$UserId = $model['UserId'];
			$IsActive = $model['IsActive'];
		}
	}
	//echo $IsActive;

	$facquery = "Select RowId, FacultyName from faculty;";
	$result1 = mysqli_query($conn, $facquery);

	$enrolledcalssquery	= "Select RowId , ClassName from class ;";
	$result2 = mysqli_query($conn, $enrolledcalssquery);
	ob_start();

	
?>

<!DOCTYPE html>
<?php include("menu.php"); ?>
<html>
<head>
	<title></title>
	<style type="text/css">
		fieldset {
  display: block;
  margin-left: 23%;
  margin-right: 23%;
  padding-top: 0.35em;
  padding-bottom: 0.625em;
  padding-left: 0.75em;
  padding-right: 0.75em;
  border: 2px groove (internal value);
}
	</style>
</head>
<body>
	
		<form method="POST" action="" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
			<fieldset>
				<legend>Student Regestration</legend>
			<table>
				<tr>
					<td>Student/ Admin Name:</td>
					<td> <input type="text" name="StudentName" value="<?php echo $StudentName; ?>" ></td>

				</tr>

				<tr>
					<td>Student Faculty:</td>
					<td>
						
						<select name="StudentFaculty">
							<?php while($facrow1 = mysqli_fetch_array($result1)):; ?>
							<option value= "<?php echo $facrow1[0]; ?>"  <?php if($facrow1[0] == $StudentFaculty){ 	echo "selected"; } ?> ><?php echo $facrow1[1];  ?> 
							</option>
							<?php endwhile; ?>
							<option value=""  <?php if("" == $StudentFaculty){ echo "selected"; } ?>>select faculty</option>
						</select>
					</td>

				</tr>


 					<tr>
 						<td>IS Admin</td>
 						<td><select name="IsAdmin" value="<?php echo $IsAdmin; ?>">
 							<option value=" ">select IS Admin</option>
 							<option value="Yes"  <?php if("Yes" == $IsAdmin){ echo "selected"; } ?> > Yes </option>
							<option value="No"  <?php if("No" == $IsAdmin){ echo "selected"; } ?> > NO </option>	

 						</select></td>
 					</tr>

 					<tr>
 						<td>Enrolled Class</td>
 						<td>
 							<select name="Enrolledclass">
 								<option value="">select enrolled class</option>
 								<?php while($eclrow1 = mysqli_fetch_array($result2)):; ?>
								<option value= "<?php echo $eclrow1[0]; ?>"  <?php if($eclrow1[0] == $Enrolledclass){ echo "selected"; } ?> ><?php echo $eclrow1[1];  ?> 
								</option>
								<?php endwhile; ?>
 							</select>
 						</td>
 					</tr>

 					<tr>
 						<td>Student Phoneno:</td>

 						<td> <input type="number" name="PhoneNo" value="<?php echo $PhoneNo; ?>"></td>
 					</tr>
 					<tr>
 						<td>Email:</td>
 						<td><input type="email" name="Email" value="<?php echo $Email; ?>"></td>
 					</tr>

 					<tr>
 						<td>Student UserID: </td>
 						<td><input type="text" name="UserId" value="<?php echo $UserId; ?>"></td>
 					</tr>
 					<tr>
 						<td>Password:</td>
 						<td> <input type="password" name="UserPwd" value="<?php echo $UserPwd; ?>"></td>
 					</tr>

 						<tr>
						<td> Confirm Password:</td>
 						<td> <input type="password" name="ConformUserPwd" value="<?php echo $ConformUserPwd; ?>">
 						</td>

 				
 						
 					</tr>
 					<tr>
 					<td>Is Active:</td>
					<td>
						<select name = "IsActive">
							<option value=""> select is active</option>
							<option value="1"  <?php if(1 == $IsActive){ echo "selected"; } ?> > Yes </option>
							<option value="0"  <?php if(0 == $IsActive){ echo "selected"; } ?> > NO </option>							
						</select>
					</td>
				</tr>

				<input type="submit" class="button-primary"  name="submit" value="submit">
				<button class="button-danger" >
				<a href="/ADMS/regedstudent.php">Back</a>
				</button>


			</table>
				</fieldset>
		</form>


</body>
</html>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$RowId=$_POST['id'];
	$StudentName=$_POST['StudentName'];
	$StudentFaculty= $_POST['StudentFaculty'];
	$IsAdmin=$_POST['IsAdmin'];
	$Enrolledclass= $_POST['Enrolledclass'];
	$PhoneNo = $_POST['PhoneNo'];
	$Email = $_POST['Email'];
	$UserId = $_POST['UserId'];
	$UserPwd = $_POST['UserPwd'];
	$ConformUserPwd= $_POST['ConformUserPwd'];
	$IsActive = $_POST['IsActive'];
	$sql ="";
	$user = "";


	if($RowId =='0'){
		$sql = 'insert into student values("","'.$StudentName.'" , "'.$StudentFaculty.'" , "'.$IsAdmin.'" , "'.$Enrolledclass.'", "'.$PhoneNo.'" , "'.$Email.'" , "'.$UserId.'" , "'.$UserPwd.'" , "'.$IsActive.'" , "'.$user.'", NOW());'; 
	}
	else {
		$sql = 'update student set StudentName = "'.$StudentName.'", StudentFaculty = "'.$StudentFaculty.'", IsAdmin = "'.$IsAdmin.'", Enrolledclass = "'.$Enrolledclass.'", PhoneNo = "'.$PhoneNo.'", Email = "'.$Email.'", UserId = "'.$UserId.'", IsActive = "'.$IsActive.'" where RowId = "'.$RowId.'";'; 
	}
	//echo $sql;
	$query = mysqli_query($conn, $sql);
	 if (!$query)
	  {
	  	echo("Error description: " . mysqli_error($query));
	  }
	  else{
	  		header("Location: /ADMS/regedstudent.php");
	  		ob_flush();

	  }



  // if (empty($_POST["name"])) {
  //   $nameErr = "Name is required";
  // } else {
  //   $name = test_input($_POST["name"]);
  // }

  // if (empty($_POST["email"])) {
  //   $emailErr = "Email is required";
  // } else {
  //   $email = test_input($_POST["email"]);
  // }

  // if (empty($_POST["website"])) {
  //   $website = "";
  // } else {
  //   $website = test_input($_POST["website"]);
  // }

  // if (empty($_POST["comment"])) {
  //   $comment = "";
  // } else {
  //   $comment = test_input($_POST["comment"]);
  // }

  // if (empty($_POST["gender"])) {
  //   $genderErr = "Gender is required";
  // } else {
  //   $gender = test_input($_POST["gender"]);
  // }
}
?>