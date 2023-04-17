<?php

function two_num_sum($num1, $num2){
    $sum = $num1 + $num2;

    echo "Sum of $num1 and $num2 is $sum.<br/>";
}

function say_hello(){
    echo "Saying Hello.<br/>";
}




$a = 3;
$b = 5;
two_num_sum($num1=$a, $num2=$b);


say_hello();
?>