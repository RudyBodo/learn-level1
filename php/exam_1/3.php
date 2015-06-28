<?php

//- buatlah program untuk memunculkan deretan angka dari 1 sampai dengan 100. Dengan ketentuan setiap kali bertemu dengan angka yang habis dibagi empat, angka tsb diganti dengan kata Friend. Sedangkan jika bertemu dengan angka yang habis dibagi 7, maka ganti dengan kata Foe. 
//Sedangkan jika bertemu angka yang habis dibagi 4 dan 7 munculkan FriendFoe.
for ($i=0; $i <=100 ; $i++) {
		if ($i % 4 ==0) {
			echo "Friend \n";
		}

		elseif ($i % 7 == 0) {
			echo "Foe\n";
		}

		elseif ($i % 4 == 0 and $i % 7 == 0) {
			echo "Friend Foe\n";
		}
		else
			echo $i ."\n";
	}
	echo "\n";
?>