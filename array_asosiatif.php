<?php
$teman = [
    ["nama" => "Andi", "umur" => 17, "hobi" => "Bermain gitar"],
    ["nama" => "Budi", "umur" => 18, "hobi" => "Sepak bola"],
    ["nama" => "Citra", "umur" => 17, "hobi" => "Membaca"],
    ["nama" => "Dewi", "umur" => 18, "hobi" => "Menulis"],
    ["nama" => "Eko", "umur" => 17, "hobi" => "Menggambar"]
];
?>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Nama</th>
        <th>Umur</th>
        <th>Hobi</th>
    </tr>
    <?php foreach ($teman as $t): ?>
    <tr>
        <td><?= $t["nama"] ?></td>
        <td><?= $t["umur"] ?></td>
        <td><?= $t["hobi"] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
