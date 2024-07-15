<?php
    $conn = mysqli_connect("localhost", "root", "", "form");

    if(!$conn){
        echo "Connection error: " . mysqli_connect_error();
    }
?>