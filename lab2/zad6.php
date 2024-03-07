<?php
function ctf(float $celsius = null) {
    if ($celsius === null) {
        echo "Nie podano wartości";
        return null;
    } else {
        $fahrenheit = ($celsius * 9/5) + 32;
        return $fahrenheit;
    }
}

$result = ctf(100);
echo "100 stopni Celsjusza to $result stopni Fahrenheita\n";

$result = ctf();
?>
