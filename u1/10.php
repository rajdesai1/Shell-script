<?php 

$intergers = [1,2,3,4,5,2,2,5,5,3,1,4,3,5,5,6];

function count_values($arr, $value) {
    $count = 0;
    foreach($arr as $element) {
        if($element == $value) {
            $count++;
        }
    }
    
    return $count;
}

$counting_2 = count_values($intergers, 2);
echo "2 occures $counting_2 times.<br/>";


$array_count = array_count_values($intergers);
print_r($array_count);
?>