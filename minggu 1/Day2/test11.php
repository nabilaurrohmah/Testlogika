<?php
$umur = 6; // Umur dalam satuan kuartal
$nilai_matematika = 83;
$nilai_bahasa_indonesia = 87;
$nilai_bahasa_inggris = 86;
$rata_rata_nilai = ($nilai_matematika + $nilai_bahasa_indonesia + $nilai_bahasa_inggris) / 3;

if ($umur >= 16  && $umur <= 25  && $nilai_matematika >= 87 && $nilai_bahasa_indonesia >= 87 && $nilai_bahasa_inggris >= 85 && $rata_rata_nilai >= 85) {
    echo "Anda dinyatakan diterima.";
} else {
    echo "Anda dinyatakan ditolak.";
}

?>
