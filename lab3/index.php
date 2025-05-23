<?php

$test = "./txt.txt";
$copy = "./copy.txt";

echo "<BR>";
echo "Заданеие 2";
echo "<BR>";

echo require_once($test);
echo "<BR>";
echo "Заданеие 8";
echo "<BR>";


copy($test, $copy);
echo require_once($copy);


echo "<BR>";



echo "Заданеие 11";
echo "<BR>";
$txt = 'txt.txt';
echo filesize($txt) . '<br>';

echo "Заданеие 23";
echo "<BR>";
if (isset($_GET['create_file'])) {
    $path = 'Z:/PHP-KazakovDmitrii/lab3/new.txt';
    if (!file_exists($path)) {
        file_put_contents($path, '');
        echo "Файл cоздан.";
    } else {
        echo "Файл уже существует.";
    }
}





echo "Заданеие 29";
echo "<BR>";


$handle = fopen($inputFile, 'r');
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        echo htmlspecialchars($line) . "<br>";
    }
    fclose($handle);
}
?>