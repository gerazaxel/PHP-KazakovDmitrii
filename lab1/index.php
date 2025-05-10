<?php
//1
echo "Задание 1<br/>";
$a = 15;
$b = 42;

$c = sqrt($a**2 + $b**2);

$rounded = number_format($c, 2);

echo "При a = $a и b = $b, гипотенуза = $rounded<br/>";

//2
echo "Задание 2<br/>";
$c = 75;
$b = 34;
$a = sqrt($c**2 - $b**2);

$rounded = number_format($a, 2);

echo "При гипотенузе c = $c и катете b = $b, другой катет a = $rounded<br/>";

//3

echo "Задание 10: ";
$hunter = 'охотник'; 
$wants_to = 'желает';
$know = 'знать'; 
$fizan = 'фазан'; 
$sits = 'сидит'; 
$result = "$hunter $wants_to $know, где $fizan $sits.";
echo $result;
echo "<BR>";

//4
echo "Задание 23: ";
$a = 7;
$b = 4;
$c = ' воробья';
$result = ($a - $b) . $c;
echo $result;
echo "<BR>";
//5
echo "Заданеие 51";
$sum = 0;
$count = 0;
$currentNumber = 1;

while ($count < 20) {
    $sum += $currentNumber;
    $currentNumber += 2;
    $count++;
}

echo "Сумма первых 20 нечетных членов натурального ряда: " . $sum;