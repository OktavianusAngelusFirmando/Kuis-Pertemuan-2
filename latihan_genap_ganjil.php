<?php
echo "<h3>Bilangan 1–10</h3>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "$i = Genap<br>";
    } else {
        echo "$i = Ganjil<br>";
    }
}
?>