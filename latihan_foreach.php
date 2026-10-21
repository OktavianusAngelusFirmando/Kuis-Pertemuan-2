<?php
$daftar_mhs = ["Gung Rai", "Jeik", "Bagas", "Adi", "Wahyu"];

echo "<h3>Daftar Nama Mahasiswa</h3>";
foreach ($daftar_mhs as $no => $nama) {
    echo ($no + 1) . ". $nama<br>";
}
?>