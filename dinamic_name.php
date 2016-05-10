<?php

$a= 'hello';
$$a= 'world'; //Переменная переменной берет значение переменной и рассматривает его как имя переменной. 
$$$a='earth';				//В вышеприведенном примере hello может быть использовано как имя переменной при помощи двух знаков доллара. : 

echo "$a ${$a} ${${$a}} <br>"; //echo "$a $hello $world;

$array = ['key1'=> 24, 'key2'=>35]; 
print_r($array['key1']);

?>
<hr> Динамические переменные в массивах: <br>
<?php

$falsearray = ['Fedor','Kirill','Igor']; 
$false_fedor = 'Ilya';
$false_kirill = 'Egor';
$false_igor = 'Sergey';
foreach ($falsearray as $s) {
print "$s's real name was ${'false_'.strtolower($s)}.<br>"; }
?>
<hr>
<?php

/*$la = ['place1', 'place2','place2'];

$pre_place1='place!!!';
$pre_place2='place>>>';
$pre_place3='place<<<';

foreach($la as $b)
{ echo "$b now in ${'pre_'.$b}";
	
} */
?>

<hr>

Динамические переменные в классах: <br>


<?php
class Myclass {
   public  $bar = 'Hello, Im a bar';
	public $arr = ['1'=> 'I_am_A.', 2=> ['I am B.', 'I am C.']];
   public  $r   = 'Iam r.';
	public $add = ' Addition';
   }

$obj = new Myclass();
$mass = ['bar', 'r'];
$linkbar = 'bar'; //первообразец.
echo $obj->$linkbar.'<br>'; //выведет - хэлло ам а бар

/*$baz = ['key1'=>'bar'];
echo $obj->${$baz['key1']}; - не работает */


$start = 'a'; //конкантенация
$end   = 'dd'; //переход по содержимому переменной $add
echo $obj->{$start . $end} . '<br>'; 

$arr = 'arr';
echo $obj->$arr[1] .'<br>';
echo $obj->{$arr}[1] .'<br>';

?>
