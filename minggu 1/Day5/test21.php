<?php
function hitung_pembagian($angka) {
    $pembagi = array(3, 5, 7, 10);
    $hasil = array();
    foreach ($pembagi as $p) {
        if ($angka % $p == 0) {
            array_push($hasil, $p);
        }
    }
    return $hasil;
}

function cetak_hasil($hasil) {
    if (count($hasil) == 1 && $hasil[0] == 5) {
        echo "angka 1000 bisa dibagi dengan angka 5 saja";
    } else if (count($hasil) == 2 && in_array(5, $hasil) && in_array(10, $hasil)) {
        echo "angka 1000 bisa dibagi dengan angka 5 dan 10";
    } else {
        echo "angka 1000 tidak bisa dibagi dengan angka 3, 5, 7, atau 10";
    }
}

$hasil = hitung_pembagian(1000);
cetak_hasil($hasil);

?>