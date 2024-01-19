<?php
$bilangan1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bilangan2 = [77, 99, 55, 81, 45, 90, 91, 98];

$kelompok1 = array();
$kelompok2 = array();

foreach ($bilangan1 as $b1) {
    if (in_array($b1, $bilangan2)) {
        array_push($kelompok1, $b1);
    } else {
        array_push($kelompok2, $b1);
    }
}

foreach ($bilangan2 as $b2) {
    if (in_array($b2, $bilangan1)) {
        array_push($kelompok2, $b2);
    }
}

echo "Kelompok 1: ";
foreach ($kelompok1 as $k1) {
    echo $k1 . " ";
}

echo "<br>";

echo "Kelompok 2: ";
foreach ($kelompok2 as $k2) {
    echo $k2 . " ";
}

?>
