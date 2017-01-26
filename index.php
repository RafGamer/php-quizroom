<?php
session_start();
if($_SESSION["loggedin"] == true) {
	header("Location: hub.php");
} else {
	
}
?>
<link rel="stylesheet" href="style.css">
<div class="absoluteCenter">
<form action="log_in" method="post">
	<input type="text" name="name" placeholder="enter name here...">
	<input type="password" name="pw" placeholder="enter here the password">
	<input type="submit" value="Submit">
</form>
</div>