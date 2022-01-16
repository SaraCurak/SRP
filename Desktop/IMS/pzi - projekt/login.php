<?php

    session_start();
    //if(isset($_SESSION['zaposlenik'])) header('location: dashboard.php');

    $error_message= '';

    if($_POST){
        include('database/connection.php');

        $korisničko_ime= $_POST['korisničko_ime'];
        $lozinka = $_POST['lozinka'];

        $query = 'SELECT * FROM zaposlenici WHERE zaposlenici.email="'. $korisničko_ime .'" AND zaposlenici.lozinka="'. $lozinka .'"';
        $stmt =$conn->prepare($query);
        $stmt->execute();



        if($stmt->rowCount() > 0){

            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $zaposlenik = $stmt->fetchAll()[0];
            $_SESSION['zaposlenik'] = $zaposlenik;

            header('Location: dashboard.php');
            
            }

        else $error_message = 'Netočno korisničko ime ili lozinka. ';
    }


?>

<!DOCTYPE html>
<html>
<head>
    <title>IMS login - inventory management system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body id="loginBody">
    
    <?php

        if(!empty($error_message)) { ?>
        <div id="errorMessage">
            <p><strong>Error:</strong> <?= $error_message ?></p>
        </div>
        
    <?php } ?>

    <div class="container">
        <div class="loginHeader">
            <h1>IMS</h1>
            <h3>Inventory management system</h3>
        </div>
        <div class="loginBody">
            <form action="login.php" method="POST">
                <div class="loginInputsContainer">
                   <label for="">Korisničko ime</label> 
                   <input placeholder= "korisničko ime" name="korisničko_ime" type="text" />
                </div>
                <div class="loginInputsContainer">
                    <label for="">Lozinka</label> 
                    <input placeholder= "lozinka" name="lozinka" type="password" />
                 </div>
                 <div class="loginButtonContainer">
                     <button>Prijavi se</button>
                 </div>
            </form>
        </div>
    </div>

</body>
</html>