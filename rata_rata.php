<?php
$nilai1 = 80;
$nilai2 = 90;
$nilai3 = 85;

$rata = ($nilai1 + $nilai2 + $nilai3) / 3;

echo "Nilai 1: $nilai1<br>";
echo "Nilai 2: $nilai2<br>";
echo "Nilai 3: $nilai3<br>";
echo "Rata-rata nilai ujian: " . number_format($rata, 2);
?>
