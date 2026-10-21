<?php
function hitungLuasLingkaran($jari) {
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

$jari_jari = 7;
$hasil = hitungLuasLingkaran($jari_jari);

echo "Luas lingkaran dengan jari-jari $jari_jari adalah $hasil";
?>