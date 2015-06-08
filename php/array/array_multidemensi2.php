<?php

$data = array("angka" => array("satu","dua","tiga"), 
			  "huruf" => array("a","b","c"));

foreach ($data as $key => $value) {
	echo "is dari index $key  \n";

	foreach ($value as $key1 => $value1) {
		echo $value1 . "\n";
	}
echo "\n";
}
?>