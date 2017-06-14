<?php

if (isset($_POST['submit'])) {

$length = $_POST['length'];
$width = $_POST['width'];



Function solve_area_rectangle ($l,$w) {
	return "Area of rectangle with length: " . $l . " and width: " . $w . " is: " . $l * $w;
}

echo solve_area_rectangle($length,$width);
} 

else {
	echo "No Input Batman";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Function Example</title>
</head>
<body>

<h2>Solve for area of the Rectangle</h2>
<form method="POST" action="">
	Length:<input type="text" name="length" placeholder="0">
	Width:<input type="text" name="width" placeholder="0">
	<input type="submit" name="submit" value="Solve for the Area">

</form>

</body>
</html>