<?php
/**
 * BÖLÜM 4: PHP İLE DİNAMİK HTML TABLOSU
 */

$taban = 6;
$yukseklik = 4;
$alan = ($taban * $yukseklik) / 2;

echo "<h3>Üçgen Alanı Hesaplama</h3>";

echo "<table border='1' style='border-collapse: collapse; border-color: red; text-align: center; width: 300px;'>
    <tr style='background-color: #eee;'>
        <th>Taban</th>
        <th>Yükseklik</th>
        <th>Üçgenin Alanı</th>
    </tr>
    <tr>
        <td>" . $taban . "</td>
        <td>" . $yukseklik . "</td>
        <td style='font-weight: bold; color: blue;'>" . $alan . "</td>
    </tr>
</table>";
?>