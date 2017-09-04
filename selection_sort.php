<?php

$sort = array(10, 33, 45, 49, 19, 50, 26, 27, 31, 35, 14, 42, 44, 10);
$length = count($sort);

for($i = 0; $i< $length-1 ;$i++){
    $lowestIndex = $i+1;
    for($j = $i ; $j < $length; $j++){
        if($sort[$j] < $sort[$lowestIndex]){
            $lowestIndex = $j;
        }
    }
    $temp = $sort[$i];
    $sort[$i] = $sort[$lowestIndex];
    $sort[$lowestIndex] = $temp;
}

echo print_r($sort);

?>