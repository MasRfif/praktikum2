<?php 
function kalkulator($angka1, $angka2, $operator) {
    switch ($operator) {
        case '+':
            return $angka1 + $angka2;
        case '-':
            return $angka1 - $angka2;
        case '*':
            return $angka1 * $angka2;
        case '/':
            if ($angka2 == 0) {
                return "Error: Pembagian dengan nol";
            }
            return $angka1 / $angka2;
        default:
            return "Error: Operator tidak valid";
    }
}

$angka1 = 10;
$angka2 = 5;

echo "Hasil: " . kalkulator($angka1, $angka2, '+') . "<br>";
echo "Hasil: " . kalkulator($angka1, $angka2, '-') . "<br>";
echo "Hasil: " . kalkulator($angka1, $angka2, '*') . "<br>";    
?>