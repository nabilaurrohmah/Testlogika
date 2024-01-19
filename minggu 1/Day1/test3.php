<?php
$panjang_tanah = 13;
$lebar_tanah = 9;

$luas_tanah = $panjang_tanah * $lebar_tanah;
echo "Luas tanah: " . $luas_tanah . " meter persegi\n";

if ($luas_tanah < 90) {
    echo "Tipe rumah: 36\n";
} elseif ($luas_tanah >= 90 && $luas_tanah <= 96) {
    echo "Tipe rumah: 45\n";
} elseif ($luas_tanah > 96 && $luas_tanah <= 120) {
    echo "Tipe rumah: 54\n";
} elseif ($luas_tanah > 120 && $luas_tanah <= 150) {
    echo "Tipe rumah: 60\n";
} else {
    echo "Tipe rumah: 70\n";
}

?>