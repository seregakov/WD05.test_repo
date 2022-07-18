<?php

    function debug($var){
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    }

    function sum(int $a,  int $b, int $c): int
    {
        return  $a + $c;
    }

    function shortText($content): string
    {
        $shortText = strip_tags($content);
        $shortText = trim($shortText);
        $shortText = mb_substr($shortText, 0,150);
        $pos = mb_strrpos($shortText, ' ');
        if ($pos !== false){
            $shortText = mb_substr($shortText, 0, $pos);
        }

        $shortText .= " ...";
        return $shortText;
    }

    function rest($array, $int){
        foreach ($array as $key => $value){
            $array[$key] = $value * $int;
        }
        return $array;
    }

// DZ 1
function dz1($array){
    foreach ($array as $key => $value){
        $array[$key] = $value * 3;
    }
    return $array;
}

//DZ 2
function dz2($strings){
    foreach ($strings as $key => $testcase) {
        if (ctype_upper($testcase)) {
            echo "Строка $testcase состоит из букв в верхнем регистре.";
        } else {
            echo "Строка $testcase не состоит из букв в верхнем регистре.";
        }
    }
}


//DZ 3
function dz3($array = array(), $len = 10, $min = 0, $max = 50 ){
        for($i = 0; $i < $len; $i ++){
        $array[] = mt_rand($min, $max);
    }
}


//DZ4
function dz4(){
    $day = getdate();
    print_r($day);
}
