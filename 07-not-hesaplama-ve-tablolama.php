<?php


$not = 62;
$ekpuan = 0;


if ($not >= 0 && $not <= 59) {
    $ekpuan = 0;
} else if ($not >= 60 && $not <= 69) {
    $ekpuan = 2;
} else if ($not >= 70 && $not <= 79) {
    $ekpuan = 3;
} else if ($not >= 80 && $not <= 89) {
    $ekpuan = 4;
} else if ($not >= 90 && $not <= 100) {
    $ekpuan = 5;
}

$toplamNot = $not + $ekpuan;


if ($toplamNot >= 90) {
    $harfNotu = "A";
} else if ($toplamNot >= 80) {
    $harfNotu = "B";
} else if ($toplamNot >= 70) {
    $harfNotu = "C";
} else if ($toplamNot >= 60) {
    $harfNotu = "D";
} else {
    $harfNotu = "F";
}


$gecmeDurumu = ($toplamNot >= 50) ? "Geçtiniz" : "Kaldınız";
$durumRengi = ($toplamNot >= 50) ? "#d4edda" : "#f8d7da"; 


echo "<table border='1' style='border-collapse: collapse; width: 350px; font-family: Arial;'>";
    
    
    echo "<tr style='background-color: red; color: white;'>
            <th colspan='2' style='padding: 10px;'>Öğrenci Not Bilgisi</th>
          </tr>";

    echo "<tr><td style='padding: 8px;'>Alınan Puan:</td><td style='padding: 8px;'>$not</td></tr>";
    echo "<tr><td style='padding: 8px;'>Ek Puan:</td><td style='padding: 8px;'>$ekpuan</td></tr>";
    echo "<tr style='background-color: #eee;'><td style='padding: 8px;'><b>Toplam Puan:</b></td><td style='padding: 8px;'><b>$toplamNot</b></td></tr>";
    echo "<tr><td style='padding: 8px;'>Harf Notu:</td><td style='padding: 8px;'><b>$harfNotu</b></td></tr>";
    
    
    echo "<tr style='background-color: $durumRengi;'><td style='padding: 8px;'>Geçme Durumu:</td><td style='padding: 8px;'>$gecmeDurumu</td></tr>";

echo "</table>";
?>
</body>
</html>