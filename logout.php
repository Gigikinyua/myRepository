<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" media = "(min-width:500px)" href="stylesheet.css">
		<title>Opportunity management</title>
	</head>
	
	<body>
		<div class = "header">
			<div class = "navigation">
				<a href = "userHome.html">Accounts</a>
				<a href = "opportunities.html">Opportunities</a>
				<a href="logout.php">Log out</a>
			</div>
		</div>
		
		<div class = "available">
	
		<?php /*if ($_SESSION['is']['UserName']):?>
					<li><a href="logout.php">Logout</a></li>
					<?php endif;*/?>
					
		<?php
			session_start();

			  
			  
					
					@session_unset();

			  
			 echo '<meta http-equiv="refresh" content="2;url=login.php">';

			 echo '<img src="images/LoadingProgressBar.gif">';
		 ?>
		</div> 
	</body>
</html>
