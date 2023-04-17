<?php

$students = array("s1"=> "1", "s2"=> "2", "s3"=> 4);

$student_keys = array_keys($students);

for($i=0;$i < count($student_keys);$i++){
    echo $students[$student_keys[$i]] . "<br/>";
}

foreach($students as $k => $v){
    echo $k . "=>" . $v. "<br/>";
}
?>