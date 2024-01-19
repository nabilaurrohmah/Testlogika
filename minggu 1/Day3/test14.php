<!-- <?php
// $jam = 16;
// $menit = 0;

// if (($jam >= 7 && $jam < 11) || ($jam == 11 && $menit < 30)) {
//     echo "waktu.kerja";
// } elseif ($jam == 11 && $menit >= 30 && $menit <= 59) {
//     echo "waktu.istirahat";
// } elseif (($jam >= 12 && $jam < 15) || ($jam == 16 && $menit == 0)) {
//     echo "waktu.kerja";
// } else {
//     echo "bukan.waktu.kerja";
// }

?> -->

<?php
$jam = 16;
$menit = 0;

if (($jam >= 7 && $jam < 11) || ($jam == 11 && $menit < 30)) {
    echo "Saat ini adalah waktu kerja.";
} elseif ($jam == 11 && $menit >= 30 && $menit <= 59) {
    echo "Saat ini adalah waktu istirahat.";
} elseif (($jam >= 12 && $jam < 16) || ($jam == 16 && $menit == 0)) {
    echo "Saat ini adalah waktu kerja.";
} else {
    echo "Saat ini bukan waktu kerja.";
}   

?>

