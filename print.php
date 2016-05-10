<?php
//
echo 'Команды вывода переменных: <br>';
$myName = 'Ilya';
$myAge = 21;

echo $myName.'<br>';
print $myAge.'<br>'; //так же выполняет тру или фолс, если была или не была выполнена команда.


/*$myArray = ['one', 'two', '...'];
foreach($myArray as $element) 

echo $element.' '; */

//---------------------------------------------------

//функции вывода
echo '<hr> Функции вывода переменных<br>';
$myName = 'Ne Ilya';
$myAge  = 'ne 21';
printf($myName); // 
print '<br>';

$somestring = sprintf($myAge);
print($myAge);

print '<h5>Функции printf() и sprintf() предназначены для форматного вывода, <br>
и отличаются они тем, что функция printf() производит форматирование и выводит результаты в выходной поток (браузер или консоль),<br>
а sprintf() после осуществления требуемого форматирования просто возвращает строку. <br> Рассмотрим следующий пример: </h5>';

$name = 'Vasya';
$age = 100.97;
$zipcode = 347900;
$town = 'Taganrog';
echo sprintf (('My name is %s and my age is %d <br>'),  $name, $age);
echo sprintf (('My zipcode is %2$d, and my town is %1$s <br>'), $town, $zipcode ); //порядок. 
 printf (('My age is %2$.2f, and my name is %1$s'), $name='Kirill', $age );


?>