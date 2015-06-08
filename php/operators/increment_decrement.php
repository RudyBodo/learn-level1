<?php
//tambah nilai $a sebanyak 1, lalu kirim nilai $a
echo "Postincrement\n";
$a = 5;
echo "$a = $a \n";
echo "$a akan bernilai 5: " . $a++ . " (\$a++)\n";
echo "$a akan bernilai 6: " . $a . "\n";

//kirim nilai $a, lalu tambah nilai $a sebanyak 1
echo "Preincrement\n";
$a = 5;
echo "$a = $a\n";
echo "$a akan bernilai 6: " . ++$a . " (++\$a)\n";
echo "$a akan bernilai 6: " . $a . "\n";
 
//kurang nilai $a sebanyak 1, lalu kirim nilai $a
echo "Postdecrement\n";
$a = 5;
echo "$a = $a\n";
echo "$a akan bernilai 5: " . $a-- . " (\$a--)\n";
echo "$a akan bernilai 4: " . $a . "\n";

//kirim nilai $a sebanyak 1, lalu kirim nilai $a  
echo "Predecrement\n";
$a = 5;
echo "$a = $a\n";
echo "$a akan bernilai 4: " . --$a . " (--\$a)\n";
echo "$a akan bernilai 4: " . $a . "\n";
?>