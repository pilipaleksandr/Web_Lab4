<?php
$string = "123";

// Приведення до цілого числа
$integer = (int)$string;
echo "Ціле число: " . $integer . "<br>";

// Приведення до дійсного числа
$float = (float)$string;
echo "Дійсне число: " . $float . "<br>";

// Приведення до рядкового значення
$string2 = (string)$integer;
echo "Рядкове значення: " . $string2 . "<br>";

// Приведення до булевого значення
$bool = (bool)$integer;
echo "Булеве значення: ";
var_dump($bool);
?>