<?php
define('FIRST_CONSTANT', 'This is the first constant');

if (defined('FIRST_CONSTANT')) {
	define('SECOND_CONSTANT', 'This is the second constant');
}

echo FIRST_CONSTANT . PHP_EOL; // Вывод: This is the first constant
echo SECOND_CONSTANT; // Вывод: This is the second constant

