<?php

$i=1;
	while ($i <= 5) {
		if ($i==2) {
			echo $i . " hai Handsome \n";
		}
		echo $i . "\n";
		$i=$i+1;
	}

//nilai variable bertambah 1 dari nilai infinite loop yang sudah di dekalrasikan karena di dalam statemet berulang sebanyak 5 kali.
echo "Nilai variable i di luar statement (while) adalah $i \n";
?>