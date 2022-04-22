<?php
    $conn = mysqli_connect("localhost", "root", "", "login");

    if (!$conn) {
        echo "<script>alert('Connection failed.');</script>";
    }
?>