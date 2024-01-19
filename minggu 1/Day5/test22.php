<?php

function hitung_waktu_kerja_istirahat($jam_kerja, $istirahat_shalat, $istirahat_makan) {
    /*
    Menghitung waktu kerja dan istirahat pegawai selama jam kerja 8 jam per hari dengan 20 menit istirahat shalat dan 30 menit istirahat makan.
    */
    $waktu_kerja = $jam_kerja - $istirahat_shalat - $istirahat_makan;
    $waktu_istirahat = $istirahat_shalat + $istirahat_makan;
    return array($waktu_kerja, $waktu_istirahat);
}

// Contoh penggunaan fungsi
$jam_kerja = 480; // 8 jam
$istirahat_shalat = 20; // 20 menit
$istirahat_makan = 30; // 30 menit
list($waktu_kerja, $waktu_istirahat) = hitung_waktu_kerja_istirahat($jam_kerja, $istirahat_shalat, $istirahat_makan);

echo "Waktu kerja pegawai: $waktu_kerja menit\n"; 
echo '<br>';
echo "Waktu istirahat pegawai: $waktu_istirahat menit\n";

?>