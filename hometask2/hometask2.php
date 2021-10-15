<?php
header('Content-type: text/plain');
//№1
echo "*\n№1\n";
$num1 = 42;
$num2 = 55;
echo "Сравнение чисел 42 и 55: ";
echo $num1 > $num2 ? "$num1 > $num2" : "$num2 > $num1" . "\n\n";

//№2
echo "№2\n";
$randNum1 = rand(5, 15);
$randNum2 = rand(5, 15);
echo "Сравнение чисел $randNum1 и $randNum2: ";
echo ($randNum1 > $randNum2 ? "$randNum1 > $randNum2" : "$randNum2 > $randNum1") . "\n\n";

//№3
echo "№3\n";
$surname = 'Pavlenko';
$name = 'Vladislava';
$patronymic = 'Maksimovna';
echo "$surname $name $patronymic => " . $surname . ' ' . $name[0] . '. ' . $patronymic[0] . '. ' . "\n\n";

//№4
echo "№4\n";
$randNum = rand(1, 999999999);
echo $randNum . "\n";
echo "Число 7 входит в $randNum " . substr_count($randNum, '7') . ' раз' . "\n\n";

//№5
echo "№5\n";
//a
$a = 4;
echo 'a = ' . $a . "\n";
//b
$a = 10;
$b = 2;
echo 'addition = ' . ($a + $b) . "\n";
echo 'muitiplication = ' . ($a * $b) . "\n";
echo 'subtraction = ' . ($a - $b) . "\n";
echo 'devision = ' . ($a / $b) . "\n";
//c
$c = 15;
$d = 2;
$result = $c + $d;
echo 'result = ' . $result . "\n";
//d
$a=10;
$b=2;
$c=5;
echo 'a + b + c = ' . ($a + $b + $c) . "\n";
//e
$a=17;
$b=10;
$c = $a - $b;
$d = $c;
echo 'a - b = ' . $d . "\n\n";

//№6
echo "№6\n";
$result = $c + $d;
echo 'c + d = ' . $result . "\n\n";

//№7
echo "№7\n";
//a
$text = 'Привет, Мир!';
echo $text . "\n";
//b
$text1='Привет, ';
$text2='Мир!';
echo $text1 . $text2 . "\n";
//c
$hour = 1;
echo 'Кол-во секунд в часе = ' . $hour * 60 * 60 . "\n";
echo 'Кол-во секунд в стуках = ' . $hour * 60 * 60 * 24 . "\n";
echo 'Кол-во секунд в неделе = ' . $hour * 60 * 60 * 24 * 7 . "\n";
echo 'Кол-во секунд в 30 днях = ' . $hour * 60 * 60 * 24 * 30 . "\n\n";

//№8
echo "№8\n";
$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var += 1;
$var -= 1;
echo 'var = ' . $var . "\n\n";

//№1
echo "**\n№1\n";
$hour = 2;
$minutes = 37;
$seconds = 45;
echo 'Время ' . $hour . ':' . $minutes . ':' . $seconds . "\n";

//№2
echo "№2\n";
$text = 'Я';
$text .= ' хочу' ;
$text .= ' знать' ;
$text .= ' PHP!' ;
echo $text . "\n\n";

//№3
echo "№3\n";
$foo = 'bar';
$bar = 10;
echo 'foo = ' . $$foo . "\n\n";

//№4
echo "№4\n";
$a = 2;
$b = 4;
echo '$a = 2; $b = 4' . "\n";
echo '$a++ + $b = ' . ($a++ + $b) . "\n"; //6 -> a=3 b=4
echo '$a + ++$b = ' . ($a + ++$b) . "\n"; //8 -> a=3 b=5
echo '++$a + $b++ = ' . (++$a + $b++) . "\n\n"; //9 -> a=4 b=5

//№5
echo "№5\n";
$a = 234;
//a
echo (isset($a) ? 'Variable exists' : 'Variable does not exist') . "\n";
//b
echo gettype($a) . "\n";
//c
echo (is_null($a) ? 'null' : 'not null') . "\n";
//d
echo (empty($a) ? 'empty' : 'not empty') . "\n";
//e
echo (is_integer($a) ? 'integer' : 'not integer') . "\n";
//f
echo (is_double($a) ? 'double' : 'not double') . "\n";
//g
echo (is_string($a) ? 'string' : 'not string') . "\n";
//h
echo (is_numeric($a) ? 'numeric' : 'not numeric') . "\n";
//i
echo (is_bool($a) ? 'bool' : 'not bool') . "\n";
//j
echo (is_scalar($a) ? 'scalar' : 'not scalar') . "\n";
//l
echo (is_array($a) ? 'array' : 'not array') . "\n";
//m
echo (is_object($a) ? 'object' : 'not object') . "\n";


//№1
echo "***\n№1\n";
echo 'num1 = 3, num2 = 4, num3 = 5' . "\n";
$num1 = 3;
$num2 = 4;
echo 'addition = ' . ($num1 + $num2) . "\n";
echo 'multiplication = ' . ($num1 * $num2) . "\n\n";

//№2
echo "№2\n";
echo 'sum of squares = ' . ($num1 ** 2 + $num2 ** 2)  . "\n\n";

//№3
echo "№3\n";
$num1 = 3;
$num2 = 4;
$num3 = 5;
echo 'average of 3 numbers = ' . (($num1 + $num2 + $num3) / 3) . "\n\n";

//№4
echo "№4\n";
$x = 1;
$y = 5;
$z = 6;
echo 'x=1, y=5, z=6' . "\n";
echo '(x+1)-2*(z-2*x+y) = ' . (($x + 1) - 2 * ($z - 2 * $x + $y)) . "\n\n";

//№5
echo "№5\n";
$num = 124;
echo 'remain of division by 3 = ' . $num % 3 . "\n";
echo 'remain of division by 5 = ' . $num % 5 . "\n\n";
echo 'increase on 30% = ' . $num * 0.3 . "\n";
echo 'increase on 120% = ' . $num * 1.2 . "\n\n";

//№6
echo "№6\n";
$num1 = 10;
$num2 = 20;
echo 'sum = ' . ($num1 * 0.4 + $num2 * 0.84) . "\n";
$num3 = 156;
echo 'sum of digits in a number = ' . ($num3 % 10 + intdiv($num3, 100) + intdiv($num3 % 100, 10)) . "\n\n";

//№7
echo "№7\n";
$num4 = 156;
echo "$num4 -> " . ($num4 - intdiv($num4 % 100, 10) * 10)  . "\n";
echo "$num4 -> " . $num3 % 10 . intdiv($num3 % 100, 10) . intdiv($num3, 100) . "\n\n";

//№8
echo "№8\n";
$num = 157;
echo "$num - " . (($num % 2 == 0) ? 'четное' : 'нечетное');


