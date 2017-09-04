<?php

$sort = array(35,33,42,10,14,19,27,44);
$length = count($sort);
$half = floor($length/2);
$loop_till = ceil(log($length,2));

echo print_r($sort)." -- Actuall <br />";

for($i = $loop_till; $i > 1 ; $i--){
    $m = 2;
    for($j = 0; $j+$half <= ($length/$m);$j++){
        for($k = $j; $k+$half < $length;$k++){
            if($sort[$k+$half] < $sort[$k]){
                echo $k." Swap to ".($k+$half)." <br />";
                $temp = $sort[$k+$half];
                $sort[$k+$half] = $sort[$k];
                $sort[$k] = $temp;
            }
        }
    }
    $m++;
    echo print_r($sort)." --- ".$half."<br />";
    $half = floor($half/2);
}


echo "<br /><br /><br />";
$count = 0;
for($i = 0;$i < $length-1 ;$i++){
    if($sort[$i] > $sort[$i+1]){
        $temp = $sort[$i];
        $sort[$i] = $sort[$i+1];
        $sort[$i+1] = $temp;
        $count++;
        for($j = $i; 0 < $j ; $j--){
            if($sort[$j-1] > $sort[$j]) {
                $temp = $sort[$j - 1];
                $sort[$j - 1] = $sort[$j];
                $sort[$j] = $temp;
            }
        }
    }
}

echo print_r($sort)." After shell sort it took ".$count." Swaps<br />";
?>