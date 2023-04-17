<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = mysqli_connect('localhost', 'root', '', 'db1');

    if(!$conn) {
        die('Error occured: ' . mysqli_connect_error());
    }else {

        $pro_id = $_POST['proid'];
        $QOH = (int)$_POST['qoh'];

        $update_qoh = "UPDATE Product SET QOH = $QOH WHERE pro_id = '$pro_id';";

        $result = mysqli_query($conn, $update_qoh);

        if ($result) {
            echo "QOH updated for $pro_id to $QOH.";
        }else {
            echo "Failed to update : " . mysqli_error($conn);
        }
    }
}

?>