<?php
$types = [
	'string' => 'abc',
	'int' => 200,
	'bool' => true,
	'array' => [1, 2, 3],
	'float' => 1.23,
	'null' => null,
	'callable' => function () {echo "test";},
	'resource' => fopen('php://stdin', 'r'), //поток ввода - значение
	'object' => new ArrayObject([1,2]),
	'iterable' => new ArrayIterator([1,2,3])

];

var_dump($types);
echo "======================\n";
$types_2 = ['callable' => function () {echo "test";}];
if (is_callable($types_2['callable'])) { // сделал такую проверку, т.к просто вызвав is_callable возвращает 1
	echo "Затестить is_callable\n";
	echo "The value is callable!";
} else {
	echo "The value is not callable!";
}

