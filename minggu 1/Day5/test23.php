<?php
function hitungSuku($a, $n) {
    $sukuPertama = $a * 4;
    $totalSuku = $sukuPertama;
    for ($i = 2; $i <= $n; $i++) {
        $suku = $sukuPertama + ($i - 1) * 3;
        $totalSuku += $suku;
    }
    return $totalSuku;
}

$a = 9;
$n = 12;

$totalSuku = hitungSuku($a, $n);

echo "Suku pertama sampai ke-12 dari rumus a*4+n*3 dengan a = 9 adalah " . $totalSuku . ".";
?>
