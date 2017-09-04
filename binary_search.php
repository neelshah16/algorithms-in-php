<?php

$search = array(10, 14, 19, 26, 27, 31, 33, 35, 42, 44, 45, 49, 50);
$find = 44;
$start = 0;
$end = count($search);
$lenght = $end;
$compensation = ($search[$end-1]- $search[0])/($find-$search[0]);
$times = 1;

$found = false;
while(!$found){
    if($end-$start <= 1 && $find != $search[1]){
        $found = true;
        echo "Not found";
    }
    $mid = floor(($end-$start)/$compensation)+$start;

    if($find == $search[$mid]){
        $found = true;
    }elseif($find < $search[$mid]) {
        $end = $mid;
    }else {
        $start = $mid;
    }

    $times++;

    if($mid > $lenght){
        $found = true;
        echo "Algorithm Failed";
    }

}

echo $mid."   -- ".$times;

?>