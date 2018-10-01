<?php
    $arr = array(5, 1, 2, 4, 3);

    $greaterThan = 0;
    $lessThan = 0;
    $index = 0;

    for ($i = 0; $i < count($arr); $i++){
        for ($j = 0; $j < count($arr); $j++){
            if ($arr[$i] > $arr[$j]){
                $greaterThan++;
            }

            elseif ($arr[$i] < $arr[$j]){
                $lessThan++;
            }
        }
        if($greaterThan == $lessThan){
            $index = $i;
            break;
        }
        $greaterThan = 0;
        $lessThan = 0;
    }

    echo $arr[$index];
?>