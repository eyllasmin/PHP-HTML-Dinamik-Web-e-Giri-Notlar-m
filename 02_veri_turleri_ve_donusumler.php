<?php
/**
 * BÖLÜM 2: VERİ TÜRLERİ, SABİTLER VE DÖNÜŞÜMLER
 */

// 1. Sabit Tanımlama (Değiştirilemez)
define("pi_sayisi", 3.14);
echo "Sabit Değer: " . pi_sayisi . "<br>";

// 2. Tür Sorgulama (gettype)
$virgullu = 2.11;
echo "İlk Tür: " . gettype($virgullu) . "<br>"; // double

// 3. Tür Değiştirme (settype)
settype($virgullu, "integer"); // Ondalıklı sayıyı tam sayıya zorlar
echo "Dönüşümden Sonraki Tür: " . gettype($virgullu) . "<br>"; // integer
echo "Yeni Değer : " . $virgullu . "<br>";

// 4. Fonksiyonel Dönüşümler (strval, intval)
$sayi = 90;
echo "Sayıyı Metne Çevir (strval): " . gettype(strval($sayi)) . "<br>";

$deger = "42aab536";
$sayi_hali = intval($deger); // Metnin içindeki sayısal kısmı ayıklar
echo "Metni Sayıya Çevir (intval): " . $sayi_hali . " (Tür: " . gettype($sayi_hali) . ")";
?>