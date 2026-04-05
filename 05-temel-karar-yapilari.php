<?php

$t = date("H");
if ($t < 20) {
    echo "İyi günler!";
} else {
    echo "İyi geceler!";
}


$sayi = -5;
if ($sayi > 0) {
    echo "Girdiğiniz sayı pozitiftir";
} else if ($sayi < 0) {
    echo "Girdiğiniz sayı negatiftir";
} else {
    echo "Girilen sayı 0'dır.";
}


$favcolor = "yeşil";
switch ($favcolor) {
    case "kırmızı": echo "Favori renginiz kırmızı"; break;
    case "mavi":   echo "Favori renginiz mavi"; break;
    case "yeşil":  echo "Favori renginiz yeşil"; break;
    default:       echo "Favori renginiz yok :(";
}


$x = 12;
do {
    echo "The number is: $x <br>";
    $x += 12;
} while ($x <= 60);


for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo $i * $j . "\t";
    }
    echo "<br><br>";
}


$row = 5; $counter = 0; $column = 4;
echo "<table border='1' style='background-color: gray; border-collapse: collapse;'>";
do {
    $bgColor = ($counter % 2 == 0) ? "lightgray" : "transparent";
    echo "<tr style='background-color: $bgColor;'>";
    for ($j = 1; $j <= $column; $j++) {
        echo "<td width='100'>Product $j (Row: $counter)</td>";
    }
    echo "</tr>";
    $counter++;
} while ($counter <= $row);
echo "</table>";
?>