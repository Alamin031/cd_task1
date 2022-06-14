<?php
//include("../control/process.php");
session_start();

echo $_SESSION["name"];
echo $_SESSION["lname"];
echo $_SESSION["birthday"];
?>

<tr><td> <a href="../control/login.php"><input type="button" value="Log In" ></a>
