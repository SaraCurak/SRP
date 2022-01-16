<?php
    $servername='localhost';
    $username='root';
    $pass='';


    try {
        $conn = new PDO("mysql:host=$servername;dbname=inventory", $username, $pass);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(\Exception $e) {
        $error_message = $e->getMessage();
    }

    
?>