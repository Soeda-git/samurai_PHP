<?php

$num = 9;
if($num > 10){
    print("10より大きい"."\n");
}else{
    print("10以下"."\n");
}

function check($numn){
    if($numn == 42){
        print("Answer to the Ultimate Question of Life, the Universe, and Everything \n");
    }
}
check(42);

$even_num = [];
$odd_num = [];
function sort_num($numb){
    global $even_num , $odd_num;
    if($numb%2 == 0){
        array_push($even_num,$numb);
    }else{
        array_push($odd_num,$numb);
    }
}
sort_num(3);
var_dump($even_num);
var_dump($odd_num);

?>