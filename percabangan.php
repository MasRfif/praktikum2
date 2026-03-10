<?php

$nilai = 85;
if ($nilai >= 90) {
    echo "Grade: A";
} elseif ($nilai >= 80) {
    echo "Grade: B";
} elseif ($nilai >= 70) {
    echo "Grade: C";
} elseif ($nilai >= 60) {
    echo "Grade: D";
} else {
    echo "Grade: E";
}


// if else

$nilai2 = 75;
if ($nilai2 >= 60) {
    echo "<br>Lulus";
} else {
    echo "<br>Tidak Lulus";
}
"\n";

//elif

$nilai3 = 92;
if ($nilai3 >= 90) {
    echo "<br>Grade: A";
} elseif ($nilai3 >= 80) {
    echo "<br>Grade: B";
} elseif ($nilai3 >= 70) {
    echo "<br>Grade: C";
} elseif ($nilai3 >= 60) {
    echo "<br>Grade: D";
} else {
    echo "<br>Grade: E";
}
"\n";

// switch case

$hari = "Rabu";
switch ($hari) {
    case "Senin":
        echo "<br>Hari ini adalah Senin";
        break;
    case "Selasa":
        echo "<br>Hari ini adalah Selasa";
        break;
    case "Rabu":
        echo "<br>Hari ini adalah Rabu";
        break;
    case "Kamis":
        echo "<br>Hari ini adalah Kamis";
        break;
    case "Jumat":
        echo "<br>Hari ini adalah Jumat";
        break;
    default:
        echo "<br>Hari tidak valid";
}
"\n";

// ternary operator

$nilai4 = 78;
$result = ($nilai4 >= 60) ? "Lulus" : "Tidak Lulus";
echo "<br>" . $result;

"\n";

// nested if

$nilai5 = 95;
if ($nilai5 >= 90) {
    echo "<br>Grade: A";
    if ($nilai5 >= 95) {
        echo " (Sangat Baik)";
    }
} elseif ($nilai5 >= 80) {
    echo "<br>Grade: B";
} elseif ($nilai5 >= 70) {
    echo "<br>Grade: C";
} elseif ($nilai5 >= 60) {
    echo "<br>Grade: D";
} else {
    echo "<br>Grade: E";
}
"\n";

//for 

for ($i = 1; $i <= 5; $i++) {
    echo "<br>Perulangan ke-" . $i;
}
"\n";

//while

$j = 1;
while ($j <= 5) {
    echo "<br>Perulangan ke-" . $j;
    $j++;
}
"\n";

//foreach

$buah = ["apel", "jeruk", "pisang"];
foreach ($buah as $item) {
    echo "<br>Buah:  " . $item;
}
"\n";

//nested loop

for ($x = 1; $x <= 3; $x++) {
    for ($y = 1; $y <= 2; $y++) {
        echo "<br>Perulangan x: " . $x . ", y: " . $y ;
    }
}

?>