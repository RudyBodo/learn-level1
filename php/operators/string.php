<?php

$a = "My name ";
$b = "is ";
$c = "Rudy handsome ";

//Operator String dengan menggunakan concat.

$hasil="I will to introduce my self ".$a.$b.$c; //remember! dont write as that echo "bla bla bla .$a.$b.$c"
echo $hasil;
echo "\n";

//Operator String dengan menggunakan {$variable}
$d = "I ";
$e = "And ";
$f = "PHP Programming";
$hasil1 = "There is a moment {$d}{$e}{$f}";
echo $hasil1;
echo "\n";

?>