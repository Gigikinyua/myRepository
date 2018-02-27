<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" media = "(min-width:500px)" href="stylesheet.css">
		<title>Opportunity management</title>
	</head>
	
	<body>
		<?php

		if (isset($_POST['submit']))
			{	   
			include 'db.php';
							$username=$_POST['username'] ;
							
							$password=$_POST['password'] ;
														
				 $insert = mysql_query("INSERT INTO users(username,password) VALUES ('$username','$password')"); 
											
			if($insert) {			 
				header("Location: login.php");
			} else {
				echo "<br><center><font color= 'red' size='3'>Could not register.</center></font>";
			}															
					
			}
				   
		?>
		<div class = "user">
			<form action="" method="post" name="register">
			  <center>
			  <fieldset>
				<table id = "form" border="0" width="407" cellpadding="5">
					 <thead>
						<tr>
							<th colspan="2">Signup information</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						  <td width="128"><strong>Username </strong></td>
						  <td width="269"><input type="text" name="username"/> </td>
						</tr>
						<tr>
						  <td><strong>Password </strong></td>
						  <td><input type="password" name="password"/> </td>
						</tr>
						<tbody>
				</table>
				<p><input type="submit" class="form-button" value="Register" name = "submit">
				<input type="reset" value="Reset" class="form-button"></p>
				
				<p>Already a member? <a href = "login.php">LOGIN</a></p>
				</fieldset>
			   </center>
			</form>
		</div>
	</body>

</html>