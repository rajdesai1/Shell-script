<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    
    $conn = mysqli_connect('localhost', 'root', '', 'db1');

    if (!$conn) {
        die('Error occured: ' . mysqli_connect_error());
    }else {

    $pro_id = $_GET['proid'];


    $search_product = "SELECT pro_id, pro_name, pro_price, QOH FROM Product WHERE pro_id='$pro_id';";
    $result = mysqli_query($conn, $search_product);
    
    $n_of_rows = mysqli_num_rows($result);

    if($n_of_rows > 0) {
        echo "Found <strong>$pro_id</strong>!!!";
        while ($row = mysqli_fetch_assoc($result)){
            echo "<h3>Product name: " .
                $row['pro_name'] .
                "<br/>Product price: " .
                $row['pro_price'] .
                "<br/>Product Qty: " .
                $row['QOH'] . "</h3>";
        }
    } else {
        echo "<h3>Product not found.</h3>";
    }

    }

}

?>