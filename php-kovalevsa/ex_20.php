<?php
// Напиши пример, как проверить, является число бесконечностью или нет.
$largeNumber = 1.0e308 * 1.0e10;
echo "number1 is " . (is_infinite($largeNumber) ? "infinity" : "not infinity");