<?php
$numbers = array(11, 15, 17, 20, 23, 25, 29, 30, 31, 35, 37, 40, 41, 44, 47, 50, 53, 59, 60);

foreach ($numbers as $value) {
    $asalMi = true; 
    if ($value <= 1) { $asalMi = false; } 
    else {
        for ($i = 2; $i < $value; $i++) {
            if ($value % $i == 0) { $asalMi = false; break; }
        }
    }
    if ($asalMi) { echo "<b>$value</b> asaldır.<br>"; }
}
?>