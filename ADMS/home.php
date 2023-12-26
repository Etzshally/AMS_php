<?php

include("index.php");
//include("connection.php");


?>

<!DOCTYPE html>
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
		input[type=password], select {
		  width: 400px;
		  padding: 12px 20px;
		  margin: 10px 0;
		  margin-left: 20px;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 16px;
		  box-sizing: border-box;
		}
	</style>
	
</head>
<body>
	
	<form method="POST" action="SignIn.php" align="center">
		
	<fieldset>                                <!-- form lie auta boundary vitra halxa -->
		<legend align="center">Sign In</legend>      <!-- yo linemathi head aauxa  -->
	
		<table width="100%">
			<tr style="color: red;">
				<?php
					if (!empty($msg=$_GET['message'])) {
				    	$msg=$_GET['message'];
						echo $msg;
					}
					
				?>
				
			</tr>
		
		<tr>
			<td align ="right"><label>UserID: </label></td>
			<td><input type="text" name="userid"></td>
		</tr>

		<tr>
			<td align ="right" ><label>Password: </label></td>
			<td><input type="password" name="password"></td>
		</tr>

		
		<tr>
			
			<td align="right"><input type="submit" name="submit" value="submit" class="button-primary"></td>
			<td><input type="reset" name="reset" value="reset" class="button-danger"></td>
		</tr>	

		</table>
	</fieldset>
</form>


</body>
</html>