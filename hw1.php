<?php 


$a = 1;
$b = 4;
$c = 2;


if ($a >= $b) {
  if ($a > $c){
    echo $a;
  } else {
    echo $c;
  }
} elseif ($b >= $c) {
  echo $b;
} else {
  echo $c;
}


$a = 3;
$b = 5;
$c = 4;


if ($a == $b  $a == $c  $b == $c) {
  echo 'ошибка';
} elseif ($b > $a && $b < $c || $b < $a && $b > $c) {
  echo $b;
} elseif ($a > $b && $a < $c || $a < $b && $a > $c) {
  echo $a;
} else {
  echo $c;
}



$x = 3;
$y = -2;


if ($x > 0 && $y > 0) {
  echo 'first';
} elseif ($x > 0 && $y < 0) {
  echo 'four';
} elseif ($x < 0 && $y < 0 ) {
  echo 'trerd';
} else {
  echo 'two';
}
