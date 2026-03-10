<?php


$N = 130;

if ($N < 2) {
    echo "Masukkan nilai N >= 2";
    exit;
}

function isPrime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}
function countDivisors($num) {
    $count = 0;
    for ($i = 1; $i * $i <= $num; $i++) {
        if ($num % $i == 0) {
            $count++;
            if ($i != $num / $i) {
                $count++;
            }
        }
    }
    return $count;
}

$maxDivisor = 0;
$bestPrime = 0;

for ($i = 2; $i <= $N; $i++) {
    if ($N % $i == 0 && isPrime($i)) {

        $totalEggs = $N * $i;
        $divisorCount = countDivisors($totalEggs);

        if ($divisorCount > $maxDivisor) {
            $maxDivisor = $divisorCount;
            $bestPrime = $i;
        }
    }
}

echo $bestPrime;
?>