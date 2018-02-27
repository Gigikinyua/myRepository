<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" media = "(min-width:500px)" href="stylesheet.css">
		<title>Opportunity management</title>
	</head>
	
	<body>
	<?php 
		require ("db.php");
		$error = "";

		if (isset($_POST['login'])) 
		{ 			
			$username = trim($_POST['username']);			
			$password = trim($_POST['password']);	
				
			// sending query		
			$result = mysql_query("SELECT * FROM users WHERE username = '$username' AND password = 
						   '$password'");
						   
			if (!$result) 
			{
				die("Query to show fields from table failed");
			}
									
			$numberOfRows = mysql_num_rows($result);				
			$row = mysql_fetch_array($result);					
				
				if ($numberOfRows == 0) 
				{
					echo " <br><center><font color= 'red' size='3'>Invalid Username and Password !</font></center>";
				} 
				else if ($numberOfRows > 0) 
				{
					session_start();
					
					$_SESSION['is']['login']    = TRUE;
					$_SESSION['is']['username'] = $_POST['username'];
					$_SESSION['logged']="true";
					$session = "1";	
							
				header("location:userHome.html");				 	
				}
		}
	?>
		<div class = "user">
			<form action="" method="post" name="login">
			  <center>
			  <fieldset>
				<table id = "form" border="0" width="407" cellpadding="5">
					 <thead>
						<tr>
							<th colspan="2">Log in</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						  <td width="135"><strong>Username </strong></td>
						  <td width="275"><input type="text" name="username"/> </td>
						</tr>
						<tr>
						  <td><strong>Password </strong></td>
						  <td><input type="text" name="password"/> </td>
						</tr>
						<tbody>
				</table>
				<p><input type="submit" value="Login" class="form-button" name = "login">
				<input type="reset" value="Reset" class="form-button"></p>
				
				<p>Not a member? <a href = "register.php">REGISTER</a></p>
				</fieldset>
			   </center>
			</form>
		</div>
	</body>

</html>