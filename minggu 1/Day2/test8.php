<?php
$belanjaan_andi = 154000;
$harga_setelah_diskon = $belanjaan_andi - ($belanjaan_andi * 0.07);
echo "Harga yang harus dibayar oleh Andi setelah mendapatkan diskon sebesar 7% adalah Rp" . number_format($harga_setelah_diskon, 2, ',', '.');

?>





