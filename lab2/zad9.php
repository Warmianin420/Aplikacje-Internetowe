<?php
$fruits = ["banana", "apple", "strawberry", "grape", "orange", "watermelon", "blueberry"];

echo "Number of fruits: " . count($fruits) . "\n";

foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}

array_push($fruits, "lemon");

array_pop($fruits);

rsort($fruits);
print_r($fruits);
?>
