<?php
function hitungNilaiAkhir($tugas, $uts, $uas) {
    return ($tugas * 0.3) + ($uts * 0.3) + ($uas * 0.4);
}

// Contoh nilai
$tugas = 80;
$uts   = 80;
$uas   = 85;

$nilai_akhir = hitungNilaiAkhir($tugas, $uts, $uas);
$status = ($nilai_akhir >= 70) ? "Lulus" : "Tidak Lulus";

echo "Nilai Akhir: $nilai_akhir<br>";
echo "Status: $status";
?>