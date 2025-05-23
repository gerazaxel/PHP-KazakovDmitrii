<?php
echo "Заданеие 1";
$str = 'a1b2c3';
$result = preg_replace_callback('#\d#', function($matches) {
    return $matches[0] . $matches[0];
}, $str);

echo $result;"<br>"

echo "<BR>";
echo "Заданеие 2";
function isHttpDomain($string) {
    return preg_match('#^https?:\/\/[a-z0-9\-]+(\.[a-z0-9\-]+)*\.[a-z]{2,}\/?$#i', $string);
}

var_dump(isHttpDomain("ftp://site.ru"));
var_dump(isHttpDomain("http://site.ru"));"<br>"


echo "<BR>";
echo "Заданеие 3";
function isHttpsDomain($string) {
    return preg_match('#^https?:\/\/[a-z0-9\-]+(\.[a-z0-9\-]+)*\.[a-z]{2,}$#i', $string);
}

var_dump(isHttpDomain("http://site.ru"));
var_dump(isHttpDomain("ftp://site.ru"));"<br>"

echo "<BR>";
echo "Заданеие 8";
echo "<BR>";

$input = 'aaa bcd xxx efg';

$pattern = '/\b([a-zA-Z])\1{2,}\b/';

preg_match_all($pattern, $input, $matches);

if (!empty($matches[0])) {
    echo "Найденные строки: " . implode(", ", $matches[0]);
} else {
    echo "Совпадений не найдено.";
}
echo "<BR>"; 

echo "Заданеие 52";
echo "<BR>";
$str = 'aba aca aea abba adca abea';
preg_match_all('/ab[be]a/', $str, $matches);
print_r($matches[0]); // Array ( [0] => abba [1] => abea )


