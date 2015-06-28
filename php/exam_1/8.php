<?php

// buatlah program untuk mengeluarkan output berbentuk tree dari sebuah angka terbesar ke terkecil. Misal: 
//Jika angka yg dimaksudkan adalah 3.
//Maka output dari program: 
//3 
//22 
//111

for ($i=5; $i>=1; $i--) { 
	for ($j=1; $j<=$i; $j++) { 
		echo $i;
	}
	echo "\n";
}


?>