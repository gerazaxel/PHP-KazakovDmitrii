<?php

echo "Задание 1";
$array = ['a', 'b', 'c', 'b', 'a'];
$result = array_count_values($array);
print_r($result);
echo "<BR>";

echo "Задание 3";
$array=array(1, 2, 3, 4, 5);
print_r( array_reverse($array, true));
echo "<BR>";


echo "Задание 4"
$keys = ['a', 'b', 'c'];
$values = [1, 2, 3];
$result = array_combine($keys, $values);
print_r($result);

echo "Задание 47"
$doublearray = [];
for ($i = 0; $i < 3; $i++) {
    $row = [];
    for ($j = 1; $j <= 3; $j++) {
        $row[] = $i * 3 + $j;
    }
    $doubleArray[] = $row;
}
print_r($doubleArray);

echo "Задание 7";
$array1 = ['a', 'b', 'c']; 
$array2 = [1, 2, 3];
$result = array_merge($array1, $array2);
print_r($result);
echo "<BR>";

