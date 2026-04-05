<?php

$age = array("Amy" => "23", "Jake" => "26", "Peralta" => "25");
foreach ($age as $isim => $yas) { echo "$isim: $yas <br>"; }


$urun = array(
    array("ÜRÜN1", 50, 10),
    array("ÜRÜN2", 20, 5),
    array("ÜRÜN3", 50, 20)
);
echo "<table border='1'>";
foreach ($urun as $u) {
    echo "<tr><td>" . $u[0] . " | Stok: " . $u[1] . " | Satış: " . $u[2] . "</td></tr>";
}
echo "</table>";


$arabalar = array("Volvo", "BMW", "Mercedes");
sort($arabalar);
foreach ($arabalar as $a) { echo $a . "<br>"; }
?>