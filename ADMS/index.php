<!DOCTYPE html>
<html>
<head>
	<title>Attendence Management System</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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

      li a:hover {
        background-color: #111111;
      }
      .button-primary {
        background-color: blue;
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
      }
      .button-norm {
        background-color: green;
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
      }
/*.button-back {
  background-color: ;
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
}*/
      body {
        background-image: url("image/backg.jpg");
              background-repeat:no-repeat;
            background-size:cover;
            opacity :0.99;
            color:red;
            font-family: arial;
            font-size: 20px;
      }
      fieldset{
        background: rgba(194, 194, 163, 0.85);
        
      }
      legend{
            color:red;
          }
</style>
</head>
<body>
	<div>

		<ul>
			 <li><a href="/ADMS/home.php?message=">Sign In</a></li>
			 <!-- <li><a href="#signup.php">Sign Up</a></li> -->
			 <!-- <li><a href="#contact"></a></li> -->
			<li><a href="#">About</a></li>

			<li style="float: right; color: white; margin-top: 10px"> Attendace Managemet System</li>
		</ul>
	</div>
</body>
</html>