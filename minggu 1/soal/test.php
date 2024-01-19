<?php

date_default_timezone_set('Asia/Jakarta'); // Sesuaikan zona waktu dengan kebutuhan

$current_time = date('H:i'); // Mendapatkan waktu saat ini dalam format jam:menit

function getStatusWaktu($waktu) {
    $jam_kerja_start = '07:00';
    $jam_kerja_end = '12:00';
    $istirahat_start = '12:00';
    $istirahat_end = '13:00';

    if ($waktu >= $jam_kerja_start && $waktu < $jam_kerja_end) {
        return 'Jam Kerja';
    } else if ($waktu >= $istirahat_start && $waktu < $istirahat_end) {
        return 'Jam Istirahat';
    } else {
        return 'Waktu Bebas';
    }
}

$status_waktu = getStatusWaktu($current_time);

echo "Sekarang jam $current_time, saat ini adalah: $status_waktu";

?>