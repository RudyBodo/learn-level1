<?php

$fakultas = array("Elektro", "Kedokteran", "FKM");
$fakultas[0] = "Pertanian";
array_push($fakultas, "Peternakan");

foreach ($fakultas as $key => $value) {
	echo $key . ": " . $value . "\n";
}
?>


