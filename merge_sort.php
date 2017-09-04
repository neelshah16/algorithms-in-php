<?php

function merge($a, $b){
    $c = array();
    if(isset($b)){
        $countA = count($a)-1;//index
        $countB = count($b)-1;//index
        $sum = $countA + $countB+1;//index
        while($sum >= 0){
            if( $countB >= 0 && $countA >= 0){
                if($a[$countA] > $b[$countB]){
                    $c[$sum] = $a[$countA];
                    $countA--;
                }else {
                    $c[$sum] = $b[$countB];
                    $countB--;
                }
            }else {
                if($countB < 0){
                    $c[$sum] = $a[$countA];
                    $countA--;
                }else {
                    $c[$sum] = $b[$countB];
                    $countB--;
                }
            }
            $sum--;
        }
    }else $c = $a;
    echo print_r($c)." --- <br />";
    return $c;
}

function fill_chunck($array, $parts) {
    $t = 0;
    $result = array_fill(0, $parts - 1, array());
    $max = ceil(count($array) / $parts);
    foreach($array as $v) {
        count($result[$t]) >= $max and $t ++;
        $result[$t][] = $v;
    }
    return $result;
}

$sort = array(10, 33, 45, 49, 19, 50, 26, 27,100,49, 19, 50, 26, 27,100);
$splitArray = fill_chunck($sort,count($sort));
$length = count($sort);//8
$loop_till = ceil(log($length,2));//3

for($i = 1; $i <= $loop_till ; $i++){ // Breaking count
    $NewSort = [];
    for($j = 0; $j < $length ;$j = $j+2){
        if(isset($splitArray[$j+1]))
            $NewSort[$j/2] = merge($splitArray[$j],$splitArray[$j+1]);
        else  $NewSort[$j/2] = $splitArray[$j];
    }
    $length = ceil($length/2);
    $splitArray = $NewSort;
}

echo print_r($NewSort[0]);

// http://localhost/learning/Algorithums/merge_sort.php

?>