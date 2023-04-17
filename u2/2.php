<?php


$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Error occured: " . mysqli_connect_error());
}


$create_db = "CREATE DATABASE DB1;";

// if (mysqli_query($conn, $create_db)) {
//     echo "Database created successfully!";
// }else {
//     echo "Error creating database: ". mysqli_error($conn);
// }

// mysqli_close($conn);


$result = $conn->query("SHOW DATABASES");
// echo $result;
// print_r($result);
// Loop through the result set and print the database names
while ($row = $result->fetch_assoc()) {
  echo $row["Database"] . "<br>";
}

?>