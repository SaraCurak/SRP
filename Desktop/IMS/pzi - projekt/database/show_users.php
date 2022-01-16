<?php

    include('connection.php');

    $stmt = $conn->prepare("SELECT * FROM zaposlenici ORDER BY kreirano DESC");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt->fetchAll();

?>
