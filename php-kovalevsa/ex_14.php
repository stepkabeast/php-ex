<?php
/*Что будет в результате выполнения кода ниже, если переменная $variable ранее не была объявлена? Почему такой результат?
if($variable){
	echo "true";
} else {
	echo "false";
}
Ответ:
Здесь происходит неявное приведение к boolean в условии,
оператору не с чем сравнить значение, поэтому выводится 'false'
*/
