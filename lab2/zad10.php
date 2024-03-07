<?php
$people = [
    "Jan" => 45,
    "Bartosz" => 38,
    "Piotr" => 40
];

foreach ($people as $name => $age) {
    echo "$name ma $age lat\n";
}

echo "Number of people: " . count($people) . "\n";

echo "Wiek pana Bartosza: " . $people["Bartosz"] . "\n";

$people["Witold"] = 28;

unset($people["Piotr"]);

uasort($people, function($a, $b) {
    return $b - $a;
});
print_r($people);
?>
