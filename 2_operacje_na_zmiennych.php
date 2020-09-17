<?php
  //wersja php 7.4.9
  echo PHP_VERSION, '<br>';


  //echo phpinfo();


$potega = 2 ** 10;
echo $potega;
echo 'a'.'b'.'c'; // a+b+c wyswietli abc
echo 'a','b','c<br>'; // wyswietli a wyswietli b wyswietli c



//operatory bitowe
// and &, or |, not ~, xor ^, <<, >>


$x = 0b1010;
echo"$x<br>"; //10
$x = $x << 1;
echo"$x<br>";  //20

$x = $x >>2;
echo"$x<br>"; //101(2) => 1+4=5

  //porównanie
  $x = 10;
  $y = 1;
  echo $x <=> $y;
  $result =  $x <=> $y;
  echo $x <=> $y;
  $x=10;
  $y=10;


  if ($x==$y)
  {
    echo 'zmienne sa rowne<br>';

  } else{
    echo 'zmienne nie sa rowne<br>';
  }

  echo gettype($x); //intiger
  echo gettype($y),'<hr>'; //double




  //  preinkrementacja ++$
  //  predekrementacja --$x
//    postinkrementacja $x++
//    postdekrementacja $x--


  $x=2;
  echo $x; //2
  $x=$x--;
  $x=$x+3;
  echo $x; //5
  $x=$x++;
  echo $x; //5
  $x=++$x;
  echo $x, '<br>'; //6
  $y=++$x;
  $y=++$x*2+3;
  echo $x, '<br>'; //
  echo $y; //



  //zadanie


  $x=2;
  echo $x++, '<br>';//2
  echo ++$x, '<br>';//4
  echo $x, '<br>';//4
  $y=$x++;
  echo $y, '<br>';//4
  $y=++$x;
  echo $y, '<br>';//6
  echo ++$y, '<br>';//7



  //opertory rzutowania

  //bool, int, float, string, unset, array, object,



  $text='123abc';
  $text=0;
  $text2=20;


echo 'Typ danych $text: ', gettype($text), '<br>';
$x=(int)$text;
echo $x;
echo '<br>Typ danych $x: ', gettype($x), '<br>';
echo '<br Typ danych $text: ', gettype($text), '<br>';


$x=(bool)$text1;
echo $x; //false








 ?>
