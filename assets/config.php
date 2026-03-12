<?php
    $host = "localhost";
   
    $user = "root";
    $password = "";
    $db = "student_management";
    
    $conn = mysqli_connect($host, $user, $password, $db);

    if (!$conn) {
        header('Location: ../errors/error.html');
        exit();
    }


?>