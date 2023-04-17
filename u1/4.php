<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 9, 10];

// print_r($arr);

#for loop
echo "For loop: &nbsp;";
for($i = 0;$i < count($arr); $i++){
    echo "$arr[$i] &nbsp;";
}

#foreach loop
echo "<br/> Foreach loop: &nbsp;";
foreach($arr as $i){
    echo "$i &nbsp;";
}

?>