<?php
	include("connection.php");
	
	
	$FacultyName="";
	$IsActive = "";
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		$id=$_GET['id'];
		
	
	if($id != '0'){
		$sql="SELECT * FROM faculty where RowId='$id'";

		$query=mysqli_query($conn,$sql);
		$model=mysqli_fetch_assoc($query);
		$FacultyName = $model['FacultyName'];
		$IsActive = $model['IsActive'];
		
	}
	}

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

		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<input type="hidden" name="Id" value="<?php echo $_GET['id']; ?>">
				<fieldset>
					<legend>Faculty Registration</legend>
			<table>
				<tr>
					<td>Faculty Name:</td>
					<td><input type="text" name="FacultyName" value="<?php echo $FacultyName; ?>"></td>
				</tr>

				<tr>
					<td>Is Active:</td>
					<td>
						<select name="IsActive"  value="<?php echo $IsActive; ?>">
							
							<option value="1"  <?php if(1 == $IsActive){ echo "selected"; } ?> > Yes </option>
							<option value="0"  <?php if(0 == $IsActive){ echo "selected"; } ?> > NO </option>
							<option value="" <?php if("" == $IsActive){ echo "selected"; } ?> > select is active</option>
							
						</select>
					</td>

				</tr>

				<input type="submit" class="button-primary" name="submit" value="submit">
				<button class="button-danger">
				<a href="/ADMS/regedfaculty.php">Back</a>
				</button>

				

				
			</table>
			</fieldset>
		</form>
	

</body>
</html>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$RowId=$_POST["Id"];
	//echo $RowId;
	$FacultyName=$_POST['FacultyName'];
	//$faculty =$_POST['faculty'];
	$IsActive = $_POST['IsActive'];
	
	$sql ="";
	$user = "";


	if($RowId == '0'){
		$sql = 'insert into faculty values("","'.$FacultyName.'" , "'.$IsActive.'" , "'.$user.'", NOW());'; 
	}
	else {
		$sql = 'update faculty set FacultyName = "'.$FacultyName.'", IsActive = "'.$IsActive.'" where RowId = "'.$RowId.'";'; 
	}
	echo $sql;
	$query = mysqli_query($conn, $sql);
	 if (!$query)
	  {
	  	echo "false";
	  	echo("Error description: " . mysqli_error($query));
	  }else{
	  	//echo "success";
	  	//exit(header("Location: \ADMS\facultyreg.php")); 
	  		header( "Location: /ADMS/regedfaculty.php");
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