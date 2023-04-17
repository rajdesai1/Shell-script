<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    echo "Name: " . $_POST['Name'] . "<br/>";
    echo "Email: " . $_POST['Mail'] . "<br/>";
}
?>