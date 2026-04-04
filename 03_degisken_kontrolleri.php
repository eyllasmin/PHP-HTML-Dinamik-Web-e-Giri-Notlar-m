<?php
/**
 * BÖLÜM 3: DEĞİŞKEN KONTROLÜ VE TEMİZLİK
 */

$degisken = "Başkent Üniversitesi";
unset($degisken); // Değişkeni tamamen siler

$test = "";
// Değişken boş mu kontrolü
if(empty($test)) {
    echo "Değişken boş veya tanımlanmamış.<br>";
}

// Boşluk temizleme (trim)
$bosluklu = "   merhaba   ";
echo "Temizlenmiş Metin: [" . trim($bosluklu) . "]<br>";

// Tür kontrolü (is_string)
if(is_string("23")) {
    echo "Bu bir metin (string) verisidir.";
}
?>