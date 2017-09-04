<?php

$sort = array(10,  33, 45, 49, 19, 50, 26, 27, 31,35,14, 42, 44, 10);
$length = count($sort);

for($i = 1; $i< $length ;$i++){
    for($j = 0; $j < ($length - $i) ; $j++){
        if($sort[$j] > $sort[$j+1] ){
            $temp = $sort[$j];
            $sort[$j] = $sort[$j+1];
            $sort[$j+1] = $temp;
        }
    }
}

echo print_r($sort);

?>