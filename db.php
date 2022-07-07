<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "productcrud";
    $port = 3308;

    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname,$port);

    // Check connection
    if ($conn=== false) {
    die("Connection failed: " .  mysqli_connect_error());
    }

    $sql = 'SELECT * FROM tbl_product';
    $result = $conn->query($sql);
    
    $conn->close();
?>