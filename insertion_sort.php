<?php

$sort = array(10,  33, 45, 49, 19, 50, 26, 27, 31,35,14, 42, 44, 10,10,  33, 45, 49, 19, 50, 26, 27, 31,35,14, 42, 44, 10);
$length = count($sort);

for($i = 0;$i < $length-1 ;$i++){
    if($sort[$i] > $sort[$i+1]){
        $temp = $sort[$i];
        $sort[$i] = $sort[$i+1];
        $sort[$i+1] = $temp;
        for($j = $i; 0 < $j ; $j--){
            if($sort[$j-1] > $sort[$j]) {
                $temp = $sort[$j - 1];
                $sort[$j - 1] = $sort[$j];
                $sort[$j] = $temp;
            }
        }
    }
}

echo print_r($sort);

?>