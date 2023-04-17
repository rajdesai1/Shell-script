<?php 

// if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $lower = $_GET['name'];

    $upper = strtoupper($lower);
    echo "Welcome, $upper!";

// }

?>