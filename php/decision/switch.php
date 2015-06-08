<?php

$angka = 3;//metode decision menggunakan tipe data integer
	
	switch ($angka) {
		case 1:
			echo "variable angka bernilai satu \n";
			break;
		case 2:
			echo "variable angka bernilai dua \n";
			break;
		case 3:
			echo "variable angka bernilai tiga \n";
			break;
		default:
			echo "variable angka bernilai di luar jangkauan switch \n";
			break;
	}

echo "\n";

$nomor = "satu";//metode decision menggunakan tipe data string

	switch ($nomor) {
		case 'satu':
			echo "angka 1\n";
			break;
		case 'dua':
			echo "angka 2\n";
			break;
		case 'tiga':
			echo "angka 3\n";
			break;
		default:
			echo "angka tidak masuk dalam jangkauan\n";
			break;
	}
?>