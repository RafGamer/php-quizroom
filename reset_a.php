<?php
if($_GET["pw"] == "saasmannistsaasmann") {
	chdir("temp/");
	$files = glob("*.{txt}", GLOB_BRACE);
	foreach($files as $file) {
		if(is_file($file)) {
			unlink($file);
		}
	}
	header("Location: hub.php");
} else {
	header("Location: hub.php");
}
?>