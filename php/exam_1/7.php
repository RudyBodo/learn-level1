<?php

//- buatlah program calculator yang dengan mudah dapat digunakan kembali.
$a = 20;
$b = 30;
$pilih = 3;

switch ($pilih) {
	case 1:
		echo $a + $b ."\n";
		break;
	case 2 :
		echo $a - $b ."\n"; 
		break;
	case 3:
		echo $a * $b ."\n";
		break;
	case 4:
		echo $a / $b ."\n";
		break;
	default:
		echo "Tidak ada inputan \n";
		break;
}

?>