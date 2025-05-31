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
/* ^https?: Начинается с http или https.
:\/\/: За ним следует ://.
[a-z0-9\-]+: Один или более букв, цифр или дефисов.
(\.[a-z0-9\-]+)*: Ноль или более вхождений точки, за которой следуют буквы, цифры или дефисы.
\.[a-z]{2,}: Заканчивается точкой и как минимум двумя буквами (домен верхнего уровня).
var_dump(isHttpDomain("ftp://site.ru"));
var_dump(isHttpDomain("http://site.ru"));"<br>"
*/

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

/* $input = 'aaa bcd xxx efg';: Создает переменную $input с текстом aaa bcd xxx efg.
$pattern = '/\b([a-zA-Z])\1{2,}\b/';: Определяет регулярное выражение, которое ищет слова, состоящие из одной буквы, повторяющейся три и более раз (например, aaa).
\b: Указывает на границу слова.
([a-zA-Z]): Захватывает любую букву.
\1{2,}: Указывает, что предыдущая захваченная буква должна повторяться минимум два раза.
preg_match_all($pattern, $input, $matches);: Ищет все совпадения по паттерну в строке $input и сохраняет их в массиве $matches.
if (!empty($matches[0])) {...}: Проверяет, есть ли найденные совпадения. */

echo "Заданеие 52";
echo "<BR>";
$str = 'aba aca aea abba adca abea';
preg_match_all('/ab[be]a/', $str, $matches);
print_r($matches[0]); // Array ( [0] => abba [1] => abea )
/*
preg_match_all('/ab[be]a/', $str, $matches);: Ищет все совпадения по паттерну ab[be]a, который соответствует строкам, начинающимся с ab, за которым следует либо b, либо e, и заканчивающимся на a.
В данном случае будут найдены abba и abea.
print_r($matches[0]);: Выводит массив найденных совпадений, который будет содержать Array ( [0] => abba [1] => abea ).
*/

