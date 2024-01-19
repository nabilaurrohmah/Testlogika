<?php
$bilangan = [75,77,87,70,90,81,69,87,66];
$kelompok_pertama = [];
$kelompok_kedua = [];

foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        array_push($kelompok_pertama, $nilai);
    } else {
        array_push($kelompok_kedua, $nilai);
    }
}

echo "Kelompok pertama: ";
foreach ($kelompok_pertama as $nilai) {
    echo $nilai . " ";
}

echo "Kelompok kedua: ";
foreach ($kelompok_kedua as $nilai) {
    echo $nilai . " ";
}

?>
