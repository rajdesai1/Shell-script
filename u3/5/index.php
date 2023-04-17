<?php 

// if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (isset($_GET['gender'])) {
        $gender = $_GET['gender'];
        // echo $gender;
    }

    if (isset($_GET['hobby'])) {
        $hobby = $_GET['hobby'];
        echo $hobby;
    }
    // $id = $_GET['proid'];

    echo "<h1>" . isset($_GET['gender']) . $gender . "</h1>";
    
    // echo "$id";

// }

?>