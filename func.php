<?php

function hello ($str){
    print ($str);
}
hello ("Hello,world"."\n");

function num (){
    print (42);
    print("\n");
}
num();

function def ($a = 21){
    print($a);
    print("\n");
}
def();
def("hello");

function add ($a,$b){
    return $a + $b;
}
$num = add(2,3);
print($num."\n");

function calc ($c,$d){
    return $c * $d;
}
$calcu = calc(4,5);
print($calcu."\n");

function triangle_area($a , $h){
    return $a * $h /2;
}
$b = triangle_area(2,3);
print($b."\n");


$file_list = [];

function add_list($a){
    global $file_list;
    $file_name = $a.".php";
    array_push($file_list,$file_name);
}
add_list("function");
print($file_list[0]."\n");
add_list("hello");
print($file_list[1]."\n");

?>