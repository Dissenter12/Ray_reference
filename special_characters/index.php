<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>special characters</title>
</head>
<body>


<?php

echo $_GET['input1'];
echo $_GET['name'];

?>

GET Request Example
<form action="get_example.php" method="GET">
	Input1:<br>
		<input type="text" name="input1"><br>
	Name:<br>
		<input type="text" name="name"><br><br>
		<input type="submit" value="Submit">	
</form>

<br>
POST Request Example <br>
<form action="post_example.php" method="POST">
	Input1:<br>
		<input type="text" name="input1"><br>
	Name:<br>
		<input type="text" name="name"><br><br>
		<input type="submit" value="Submit">	
</form>

<br>
Session Request Example <br>
<form action="session_home.php" method="POST">
	Username:<br>
		<input type="text" name="username"><br>
	Password:<br>
		<input type="password" name="password"><br><br>
		<input type="submit" value="Submit">	



		




</body>
</html>