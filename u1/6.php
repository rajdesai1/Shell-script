<?php

$students = array(
    array("John", "Doe", 30),
    array("Hannah", "Jenkins", 40),
    array("Tim", "Dodd", 50)
);



foreach($students as $stud_arr){
    echo "<br/>";
    
    foreach ($stud_arr as $key) {
        echo "$key &nbsp;";
    }
}
?>