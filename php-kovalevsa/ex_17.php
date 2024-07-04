<?php
/*Какое условие выполнится в результате выполнения кода? Почему(не требуется вдаваться в детали реализации, достаточно ответа в одно предложение: так делать можно/нельзя потому что …)?
$x = 0.23;
$y = 1 - 0.77;


if($x == $y)
{
	echo "Yes";
} else {
	echo "No";
}
Ответ:  float может иметь проблемы с погрешностью (количеством знаков после запятой), в данном случае внутренее
представление $y не будет равно $x, поэтому выведется "No"
*/

