<?php

function convert_time($time) {
    $hour = substr($time, 0, 2);
    $minute = substr($time, 3, 2);
    $ampm = "am";
    if ($hour >= 12) {
        $ampm = "pm";
        $hour -= 12;
    }
    if ($hour == 0) {
        $hour = 12;
    }
    return "$hour.$minute $ampm";
}

// Contoh penggunaan fungsi
echo convert_time("19.00"); // Output: 07.00 pm
echo '<br>';
echo convert_time("23.45"); // Output: 11.45 pm
echo '<br>';
echo convert_time("08.55"); // Output: 08.55 am

