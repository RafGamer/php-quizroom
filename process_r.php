<?php
	chdir("temp/");
	$files = glob("*.{txt}", GLOB_BRACE);
	foreach($files as $file) {
		echo $file . ": " . file_get_contents($file) . "\n";
	}
?>