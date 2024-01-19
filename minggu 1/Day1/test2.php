<?php
  $jumlah_peserta = "121";
  $mata_lomba = "Web App";
  $no_peserta = 121;
  $pendidikan = "SMK";
  $kode_mata_lomba = "";
  $kode_pendidikan = "";
  $tahun_pelaksanaan = substr(date('Y'), -2);

  if ($mata_lomba == "Web App") {
    $kode_mata_lomba = "01W";
  } else if ($mata_lomba == "Android") {
    $kode_mata_lomba = "02A";
  } else if ($mata_lomba == "Game") {
    $kode_mata_lomba = "03G";
  }

  if ($pendidikan == "smp") {
    $kode_pendidikan = "P";
  } else if ($pendidikan == "SMK") {
    $kode_pendidikan = "A";
  }

  $nomor_peserta = str_pad($no_peserta, 3, '0', STR_PAD_LEFT);
  $nomor_peserta = $jumlah_peserta +1 . $kode_mata_lomba . $kode_pendidikan . $tahun_pelaksanaan;

  echo "Nomor peserta Eko adalah *" . $nomor_peserta . "*.";
?>