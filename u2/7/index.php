<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $conn = mysqli_connect('localhost', 'root', '', 'db1');

    if(!$conn) {
        die('Error occured: ' . mysqli_connect_error());
    }else {

        $pro_id = $_POST['proid'];

        $delete_product = "DELETE FROM Product WHERE pro_id = '$pro_id';";

        $result = mysqli_query($conn, $delete_product);

        // echo mysqli_affected_rows($conn);
        if (mysqli_affected_rows($conn) > 0) {
            echo "Product with Pro_id = $pro_id has been deleted successfully!";
        } else {
            echo "No products deleted for Pro_id = $pro_id.";
        }
    }

}
?>