<?php

session_start();
unset($_SESSION['pass']);
echo "logout successfully";
echo "<br>";
echo "Comeback again " . $_SESSION["user"];



?>