<?php
  include("connection.php");
  $userid=$_POST["userid"];
  $password=$_POST["password"];
   
  $query= 'Select * from student where UserId= "'.$userid.'" And UserPWD = "'.$password.'";'; 
  
  $sql= mysqli_query($conn,$query);
  if (!$sql)
  {
  	echo("Error description: " . mysqli_error($sql));
  }
  else{
  	if(mysqli_num_rows($sql)>0){
  		$userinfo = mysqli_fetch_assoc($sql);
      $id=$userinfo['RowId'];
  		$UserName= $userinfo['StudentName'];
      $UserFaculty = $userinfo['StudentFaculty'];
      $UserAdmin = $userinfo['IsAdmin'];
      $UserEnrolledClass= $userinfo['Enrolledclass'];
      $UserPhoneNo = $userinfo['PhoneNo'];
      $UserEmail = $userinfo['Email'];
      $UserId = $userinfo['UserId'];
      $UserActive = $userinfo['IsActive'];
      if($UserAdmin=='Yes'){
        header("Location: admindashboard.php");
      }
      else{
        header("Location: StudentDashboard.php?id='$id'");
      }
  	}else{
      // $_SESSION['message'] = 'userid or password doesnot match';
      //   $message = 'userid or password doesnot match';
      //redirect_to('\ADMS\home.php');
      header("Location: /ADMS/home.php?message=user id or password doesnot match");

    }
  }
  function redirect_to( $location = NULL ) {
        if ($location != NULL) {
            header("Location: {$location}");
            exit;
        }
    }

?>