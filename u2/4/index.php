<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $pro_id = $_POST['proid'];
    $pro_name = $_POST['proname'];
    $pro_price = (float)$_POST['proprice'];
    $pro_qty = (int)$_POST['qoh'];

    // print_r([$pro_id, $pro_name, $pro_price, $pro_qty]);

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $conn = mysqli_connect($server, $username, $password, 'db1');

    if (!$conn) {
        die("Error occured: " . mysqli_connect_error());
    }

    $insert_product = "INSERT INTO Product(pro_id, pro_name, pro_price, QOH) VALUES('$pro_id', '$pro_name', $pro_price, $pro_qty);";

    $result = mysqli_query($conn, $insert_product);

    if($result) {
        echo "Product inserted successfully.";
    }else {
        echo "Error: ". mysqli_error($conn);
    }
}

?>