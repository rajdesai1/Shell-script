<?php

$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, "db1");

if(!$conn) {
    die("Error occured: " . mysqli_connect_error());
}else {

$create_table_query = "CREATE TABLE Product(
    pro_id VARCHAR(6) PRIMARY KEY,
    pro_name VARCHAR(50) NOT NULL,
    pro_price FLOAT(10,2) NOT NULL,
    QOH INT(6) NOT NULL
);";


$result = mysqli_query($conn, $create_table_query);

if ($result) {
    echo "Product table created successfully!";
}else {
    echo "Error creating table: " . mysqli_error($conn);
}

}

?>