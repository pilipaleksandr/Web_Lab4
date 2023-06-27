<?php
// Розбиття рядка на масив за допомогою роздільника ", "
$str = "Apple, Banana, Orange, Mango";

$fruits = explode(", ", $str);

print_r($fruits);

// Злиття елементів масиву в один рядок з роздільником ", "
$fruits2 = array("Apple", "Banana", "Orange", "Mango");

$str2 = implode(", ", $fruits2);

echo $str2;
?>