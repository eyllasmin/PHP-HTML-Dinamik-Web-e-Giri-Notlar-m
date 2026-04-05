<?php

$apartman = [
    "KAT 1" => [
        "DAİRE NO 1" => "KAYANLAR AİLESİ",
        "DAİRE NO 2" => "ŞEKERCİOĞLU AİLESİ",
        "DAİRE NO 3" => "GÜNGÖR AİLESİ"
    ],
    "KAT 2" => [
        "DAİRE NO 4" => "YILMAZ AİLESİ",
        "DAİRE NO 5" => "KAYA AİLESİ",
        "DAİRE NO 6" => "DURANLAR AİLESİ"
    ],
    "KAT 3" => [
        "DAİRE NO 7" => "SOLAK AİLESİ",
        "DAİRE NO 8" => "İPEKÇİOĞLU AİLESİ",
        "DAİRE NO 9" => "KARAÇAY AİLESİ"
    ],
    "KAT 4" => [
        "DAİRE NO 10" => "ŞAHİN AİLESİ",
        "DAİRE NO 11" => "BİNGÖL AİLESİ",
        "DAİRE NO 12" => "VURULMAZ AİLESİ"
    ]
];


echo "<table border='1' style='border-collapse: collapse; width: 700px; text-align: center; border-color: orange; font-family: Arial;'>";


    echo "<tr>
            <th colspan='3' style='padding: 15px; background-color: #fffaf0;'>PARK YAŞAM APT.</th>
          </tr>";


    foreach ($apartman as $kat => $daireler) {
        
        $ilkDaire = true; 

        foreach ($daireler as $daireNo => $aileAdi) {
            echo "<tr>";

            
            if ($ilkDaire) {
                echo "<td rowspan='3' style='width: 120px; padding: 20px; background-color: #ffffff;'><b>$kat</b></td>";
                $ilkDaire = false;
            }

            
            echo "<td style='width: 150px; padding: 10px;'>$daireNo</td>";
            echo "<td style='padding: 10px; text-align: left; padding-left: 20px;'>$aileAdi</td>";
            
            echo "</tr>";
        }
    }

echo "</table>";
?>