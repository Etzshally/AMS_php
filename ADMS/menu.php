<!DOCTYPE html>
<html>
<head>
	<title>Attendence Management System</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
	  
	  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
  	<style>

	  ul{
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
	</style>
</head>
<body>
	<div>

		<ul>
			<li><a href="/ADMS/regedfaculty.php">Faculty Setup</a></li>
			<li><a href="/ADMS/regedSubject.php">Subject Setup</a></li>
			<li><a href="/ADMS/regedstudent.php">Student Setup</a></li>
			<li><a href="/ADMS/regedclass.php">Class Setup</a></li>
			<li><a href="/ADMS/RegedClassSubject.php">Make Attendance</a></li>
			<!--  <li><select>
			 	<option><a href="/ADMS/regedclass.php">Class Setup</a></option>
			 	<option><a href="/ADMS/RegedClassSubject.php">Make Attendance</a></option>
			 </select></li> -->
			 
			 
			 
			 <!-- <li><a href="#signup.php">Sign Up</a></li> -->
			 <!-- <li><a href="#contact"></a></li> -->
			<li><a href="#">About</a></li>

			<li style="float: right; color: white; margin-top: 10px"> <a href="/ADMS/index.php"><strong>Sign Out</strong></a></li>
		</ul>
	</div>
	<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav> -->
	

</body>
</html>