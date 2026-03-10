<?php 
$angka = 10;
echo "Nilai angka: " . $angka;

$text = "Hello, World!";
echo "<br>Nilai text: " . $text;

$boolean = true;
echo "<br>Nilai boolean: " . ($boolean ? "true" : "false");

$array = [1, 2, 3, 4, 5];
echo "<br>Nilai array: " . implode(", ", $array);

$nullValue = null;
echo "<br>Nilai null: " . ($nullValue === null ? "null" : $nullValue);



?>