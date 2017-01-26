<?php
$function = $_POST["function"];
$username = $_POST["username"];
$answer = $_POST["answer"];
$passwd = $_POST["passwd"];
switch($function) {
	case("sendanswer"):
	echo file_put_contents("temp/" . $username . ".txt", $answer);
	break;
}
?>