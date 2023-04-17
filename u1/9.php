<?php

$numbers = array(90, 20, 4, 69, 30, 135);


function selectionSort($arr){
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++){
        $min_idx = $i;

        for ($j = $i + 1; $j < $n; $j++){
            if ($arr[$j] < $arr[$min_idx]){
                $min_idx = $j;
            }
        }


        #swapping value
        $temp = $arr[$i];
        $arr[$i] = $arr[$min_idx];
        $arr[$min_idx] = $temp;
    }

    return $arr;
}

echo "Original array: " . implode(", ", $numbers) . "<br>";

$arr = selectionSort($numbers);
echo "Sorted array: " . implode(", ", $arr) . "<br><br><br>";




sort($numbers);

print_r($numbers);

rsort($numbers);

echo "<br/> <br/>";
print_r($numbers);




?>