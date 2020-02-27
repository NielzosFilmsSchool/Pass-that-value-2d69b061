<?php
$array = array("item 1", "item 2", "item 3");
addItemToArray($array, "item 4");
addItemToArray2($array, "item 5");

function addItemToArray($arr, $item){
    $tmp = $arr;
    array_push($tmp, $item);
    return $tmp;
}

function addItemToArray2(&$arr, $item){
    array_push($arr, $item);
}

echo var_dump($array);