<?php

$sort = array(30,  33, 45, 49, 19, 50, 26, 23 , 121, 27, 342);
$length = count($sort);
$arraySplit[0][0] = $sort;
for($i = 0; $i < $length ;$i++){
    $n = 0; // Sub level count
    if(count($arraySplit[$i]) < $length){
        foreach($arraySplit[$i] as $SubArray){
            $newLength = count($SubArray);
            echo print_r($SubArray)." |||||||||||||||| Sub Arrays |||||||||||||<br />";
            if($newLength > 1){
                $pivot = $SubArray[0];
                echo $pivot." pivot <br />";
                $x = 0; // Index counter small;
                $y = 0; // Index counter big;
                for($j = 1; $j<$newLength ; $j++){
                    if($SubArray[$j] < $pivot){
                        $arraySplit[$i+1][$n][$x] = $SubArray[$j];
                        $x++;
                    }else {
                        $arraySplit[$i+1][$n+1][$y] = $SubArray[$j];
                        $y++;
                    }
                }
                $arraySplit[$i+1][$n][$x] = $pivot;
                $n = $n + 2;
            }else {
                $arraySplit[$i+1][$n][0] = $SubArray[0];
                $n = $n + 1;
            }

        }
        echo "<br />".print_r($arraySplit[$i])."<br /><br />";
    } else break;

}

// Re mearge of all array
$result_arr = array();
foreach ($arraySplit[$i-1] as $sub_arr) $result_arr = array_merge($result_arr, $sub_arr);

echo print_r($result_arr);

?>