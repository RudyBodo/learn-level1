<?php

//operator logika
$hasil1 = true and false;
echo '$hasil1 = ';
echo var_dump($hasil1)."\n"; // $hasil1 = bool(true) 
 
$hasil2 = (true and false);
echo '$hasil2 = ';
echo var_dump($hasil2)."\n"; // $hasil2 = bool(false) 
 
$hasil3 = (true xor false);
echo '$hasil3 = ';
echo var_dump($hasil3)."\n"; // $hasil3 = bool(true) 
 
$hasil4 = (false or true && false);
echo '$hasil4 = ';
echo var_dump($hasil4)."\n"; // $hasil4 = bool(false) 
 
$a=true;
$b=false;
$hasil5 = ($a and $b || $a or b);
echo '$hasil5 = ';
echo var_dump($hasil5); // $hasil5 = bool(true)

//fungsi var_dumb($variable) diguanakan untuk mengetahui informasi nilai variable 
?>