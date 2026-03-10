<?php 

function hai($nama) {
    return "Hai, " . $nama . "!";
}

function hai2($nama = "Dunia") {
    return "Hai, " . $nama . "!";
}

function hitung(int $x = 10, int $y = 5): int {
    return $x + $y;
}

function hitung2(int $x , int $y ): int {
    return $x + $y;
}

echo hai("dunia");
echo "<br>";
echo hai2("iwan");
echo "<br>";
echo hitung(7, 3);
$NilaiBalik = hitung2(2, 3);
echo "<br>Hasil hitung2: " . $NilaiBalik;


?>