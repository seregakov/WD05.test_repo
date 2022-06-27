<?php

//--------------------HW--------------------------

//----------------Задание 1 
$arr = [1, 2, 3, 4, -6, -5, -4, 9, 10];
$post = [];

foreach($arr as $key => $value)
{
    if($value > 0)
        $post[] = $value;
}

var_dump($post);


//------------ Задание 2

$arr = [
        0 => 0,
        1 => 1,
        2 => 2,
        3 => 3,
        4 => 30,
];
$post = [];
$sr = array_sum($arr)/count($arr);
echo $sr;
foreach ($arr as $key => $value) {
    if ($value < $sr) {
        $post[] = $value;  
};
};
var_dump($post);



//------ Задиние 3
$arr = [
    0 => 0,
    1 => 1,
    2 => 2,
    3 => 3,
    4 => 30,
];
$post = [];
$sr = array_sum($arr)/count($arr);
echo $sr;
foreach ($arr as $key => $value) {
if ($value > $sr) {
    $post[] = $value;  
}; 
};
var_dump($post);



// -----------Задиние 4 

$array = [1, 2, 2, 3];

print_r(array_count_values($array));


-----------Задиние 5 

$arr = [1, 2, 2, 3];
var_dump (array_unique($arr));


// -----------Задиние 6 

$man = [
    1 => 'голова',
    2 => 'шея',
    3 => [
        'туловище',
        'руки',
    ],
];

foreach ($man as $key => $value) {

    if(is_array($value)){
        foreach ($value as $key => $value){
            echo "Вторая вложеносить --- Ключ $key и значение $value <br>";
        };
    } else {
        echo "Ключ $key и значение $value <br>";
    }
};


