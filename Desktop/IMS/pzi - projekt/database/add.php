<?php
    session_start();

    $table_name = $_SESSION['table'];
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $email = $_POST['email'];
    $lozinka = $_POST['lozinka'];
    $encrypted = password_hash($lozinka, PASSWORD_DEFAULT);

    
    try{
    $command= "INSERT INTO 
                    $table_name(ime, prezime, email, lozinka, kreirano, promijenjeno) 
                VALUES 
                    ('".$ime."', '".$prezime."', '".$email."', '".$encrypted."', NOW(), NOW())";
    
    
    include('connection.php');

    $conn->exec($command);
    $response = [
        'success' => true,
        'message' => $ime . ' ' . $prezime . ' uspjesno dodano u bazu Zaposlenici.'
    ];

    }   
    catch(PDOException $e) {
        $response = [
        'success' => false,
        'message' => $e->getMessage()
        ];
    }

    $_SESSION['response'] = $response;
    header('location: ..\user_add.php');

?>