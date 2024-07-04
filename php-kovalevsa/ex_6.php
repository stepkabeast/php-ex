<?php

/*Что вернёт код:
$firstName = 'Gio';
echo 'Hello $firstName';
echo "Hello $firstName";
echo "Hello {$firstName}";
echo 'Hello {$firstName}';
Опиши, почему такой результат.

Ответ:
- echo 'Hello $firstName'; - выведет "Hello $firstName", т.к строка вывод в одинарных кавычках - переменная $firstName
выводится текстом;
- echo "Hello $firstName"; - выведет Hello Gio, т.к строка взяла в двойные кавычки;
- echo "Hello {$firstName}"; - вывод эквивалентен предыдущему, используем фигурные скобки, в данном случае они не
обязательны, ноиспользуются для экранирования переменных в больших строках;
- echo 'Hello {$firstName}'; - экранирование переменной firstName в одинрных ковычках распознается как текст, выведет
 "Hello {$firstName}".

*/

$firstName = 'Gio';
echo 'Hello $firstName';
echo "Hello $firstName";
echo "Hello {$firstName}";
echo 'Hello {$firstName}';


