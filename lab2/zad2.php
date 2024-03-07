<?php
$a = 4;          
$b = 10;         
$c = 4.0;        
$d = 5.667;      

$d_without_decimal = intval($d);
$addition_result = $a + $b;
$addition_sentence = "Wynik dodawania a i b to: $addition_result";
echo $addition_sentence . "\n";
echo "Czy wartość a jest większa od b: " . ($a > $b ? 'tak' : 'nie') . "\n";
echo "Czy a i c mają taką samą wartość (ignorując typ): " . ($a == $c ? 'tak' : 'nie') . "\n";
echo "Czy a i c mają taką samą wartość (z uwzględnieniem typu): " . ($a === $c ? 'tak' : 'nie') . "\n";
echo "d bez części po przecinku: $d_without_decimal\n";
?>
