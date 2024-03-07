<?php
$text1 = " Programuję dobrze ";
$text2 = "dobrze w PHP. ";

echo "Długość zmiennej text1: " . strlen($text1) . "\n";

$containsProgramuje = strpos($text1, 'Programuję') !== false ? 'tak' : 'nie';
echo "Czy zmienna text1 zawiera słowo Programuję?: " . $containsProgramuje . "\n";

$text1_trimmed = trim($text1);
$text2_trimmed = trim($text2);
$concatenated = $text1_trimmed . " " . $text2_trimmed;
echo "Połączone zmienne text1 oraz text2 z usuniętymi spacjami: " . $concatenated . "\n";

$text3 = explode(' ', $concatenated);
print_r($text3);

$phpPosition = strpos($text2, 'PHP');
echo "Na którym indeksie zaczyna się słowo PHP w text2?: " . ($phpPosition !== false ? $phpPosition : 'nie znaleziono') . "\n";

$text1_uppercase = strtoupper($text1);
echo "Zmienna text1 z wszystkimi literami zmienionymi na duże: " . $text1_uppercase . "\n";
?>
