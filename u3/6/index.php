<?php

$name = $_GET['text'];

$x = strlen($name);

if ($x < 5) {
    if ($x == 0) {
    echo "Please enter something...";
    }else {
    echo "Length greater than 5...";
    }
}else {
    echo "Valid.";
}
?>