<?php
$test = "Hello World  dbd  kjbdk.j World World World World World World ";
$test1 = substr($test, 6, 2); // берет исходную строку и выделяет ее часть. Второй параметр это начало, третий параметр это длина
$test2 = strpos($test, 'World'); // ищет первое слово и выводит номер символа
$test3 = strrpos($test, 'World'); // последнее слово
strlen($test);  // длина строки
$test4 = strstr($test, 'World', true); // если фалс то выводит все после слова вместе слова, если тру то перед
$test5 = stristr($test, 'dBd', true); // тоже самое без учета регистра

$test6 = strrchr($test, 'W'); //ищет последнее вхождение символа и выводит все после него



// echo ($test6);


// функции
function test7 ($firstValue) {
    // echo($firstValue);
}
test7('Serge');

// echo ('Hi'. test7);
/**
 * тут писать что функция делает
 * @param $firstValue
 * @param int $secondValue
 * @return mixed
 */
function ttt($firstValue, $secondValue = 3) {
    return $firstValue * $secondValue;
};
$returnValue = ttt(5);
//echo ($returnValue);


function getSum($firstValue, $secondValue) {
    return $firstValue + $secondValue;
}
function getDiv($result, $firstValue ) {
    return $result / $firstValue;
}
$result = getSum(5, 10);
$result1 = getDiv($result, 3);
echo $result1;

?>
