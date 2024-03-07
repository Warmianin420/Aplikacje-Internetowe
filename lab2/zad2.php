<?php
$a = 4;          
$b = 10;         
$c = 4.0;        
$d = 5.667;      

$is_a_greater_than_b = $a > $b;
$are_a_and_c_same_value = $a == $c;
$are_a_and_c_same_value_and_type = $a === $c;
$d_without_decimal = intval($d);
$addition_result = $a + $b;
$addition_sentence = "Wynik dodawania a i b to: $addition_result";
echo $addition_sentence . "\n";
echo "Czy wartość a jest większa od b: " . ($is_a_greater_than_b ? 'tak' : 'nie') . "\n";
echo "Czy a i c mają taką samą wartość (ignorując typ): " . ($are_a_and_c_same_value ? 'tak' : 'nie') . "\n";
echo "Czy a i c mają taką samą wartość (z uwzględnieniem typu): " . ($are_a_and_c_same_value_and_type ? 'tak' : 'nie') . "\n";
echo "d bez części po przecinku: $d_without_decimal\n";
?>
