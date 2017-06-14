<?php

session_start();

$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

if (authenticate($username,$password)){
	echo "mclovin ";

	$_SESSION["user"] = $username;
	$_SESSION["pass"] = $password;
} else {
	echo "Incorrect Login Details";
}

function authenticate($username,$password){
	if ($username == 'admin' && $password == 'secret'){
		return true;
	} else {
		return false;
	}
}

echo "Yo, Welcome " . $_SESSION["user"];
echo "your password is" . $_SESSION["pass"];


?>



</form>

<form action="Logout.php" method="post">
	<input type="submit" value="Logout">
</form>