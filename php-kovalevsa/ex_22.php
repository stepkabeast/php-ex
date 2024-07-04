<?php
/*Даны переменные:
$name = 'Ivan';
$age = 18;
$education = 'school';

Выведи текст My name is $name.I'm $age.I'm study at $education:
с помощью echo;
c помощью heredoc;*/
$name = 'Ivan';
$age = 18;
$education = 'school';

echo  "My name is $name.I'm $age.I'm study at $education\n";

// Использование heredoc
echo <<<EOD
My name is $name.I'm $age.I'm study at $education
EOD;


