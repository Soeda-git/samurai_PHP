<?php

$data = [
    "name" => "大泉",
    "gender" => "男性",
    "age" => 46
    ];

print($data["name"]."\n");

$data["address"] = "東京";

print($data["address"]."\n");

print($data["gender"]."\n");

$data["gender"] = "女性";

print($data["gender"]."\n");

var_dump($data);

$dic = ["x" => 10,"y" => 20];
$dic["y"] = 40;

var_dump($dic);

?>