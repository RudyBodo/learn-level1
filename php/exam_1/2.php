<?php

//buatlah program untuk menampilkan angka yang hanya dapat dibagi oleh dirinya sendiri dari deretan sngka 1 sampai dengan 100.

for ($i=0; $i<=100 ; $i++) { 
	if ($i / $i == 1) {
		echo "$i \n";
	} else {
		echo "\n"; 
	}
}

?>