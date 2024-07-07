<?php
/* 
Как проверить, что элемент массива с индексом 0 существует и его значение отлично от null? Напиши пример. 
*/
$arr = [
    0 => 'some value',
    1 => null,
    2 => 'another value'
];

if (isset($arr[0])) {
    echo "Элемент с индексом 0 существует и его значение отлично от null.";
} else {
    echo "Элемент с индексом 0 не существует или его значение равно null.";
}
