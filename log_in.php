<?php
include "protected/settings.php";
session_start();
if($_POST["pw"] == pw) {
	$_SESSION["loggedin"] = true;
	$_SESSION["username"] = $_POST["name"];
	header("Location: hub.php");
} else {
	$_SESSION["loggedin"] = false;
	header("Location: index.php");
}
?>