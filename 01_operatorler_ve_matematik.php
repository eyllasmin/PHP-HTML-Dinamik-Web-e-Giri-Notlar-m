<?php
/**
 * BÖLÜM 1: OPERATÖRLER VE MATEMATİKSEL İŞLEMLER
 */

// 1. Temel İşlemler ve Atamalar
$a = 2;
$a = $a + 2; // Sonuç: 4
echo "Toplama Sonucu: " . $a . "<br>";

$a = 6;
$a = $a - 3; // Sonuç: 3
echo "Çıkarma Sonucu: " . $a . "<br>";

// 2. Mod Alma (Kalan Bulma)
$a = 8;
$a = $a % 3; // 8'in 3'e bölümünden kalan 2'dir
echo "Mod (Kalan) Sonucu: " . $a . "<br>";

// 3. Artırma Operatörleri
$a = 2;
echo "Önce Artır (++$a): " . ++$a . "<br>"; // Sonuç: 3 (Hemen artırır)

$a = 2;
echo "Sonra Artır ($a++): " . $a++ . "<br>"; // Sonuç: 2 (Yazdıktan sonra artırır)
echo "Değişkenin Güncel Hali: " . $a . "<br>"; // Sonuç: 3

// 4. Metin Birleştirme (Concatenation)
$ad = "Asmin";
$soyad = "Bulut";
$AdSoyad = $ad . " " . $soyad; // Nokta (.) işareti birleştirir
echo "Ad Soyad Birleşimi: " . $AdSoyad;
?>