<?php

$linux = array("ubuntu", "ClearOS", "Slackware");
$linux[0] = "Redhat";
array_push($linux, "Archlinux");

foreach ($linux as $key => $value) {
	echo $key . ": " . $value . "\n";
}
?>


