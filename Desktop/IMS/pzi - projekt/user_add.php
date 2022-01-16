<?php

    session_start();
    if(!isset($_SESSION['zaposlenik'])) header('location: login.php');
    $_SESSION['table'] = 'zaposlenici';
    $zaposlenik = $_SESSION['zaposlenik'];
    $zaposlenici = include('database/show_users.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Inventory Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
</head>
<body>
    <div class="dashboard_maincontainer">
            <?php include('partials/app_sidebar.php') ?>
            <div class="dashboard_content_container" id="dashboard_content_container">
                <?php include('partials/app_topnav.php') ?>
                    <div class="dashboard_content">
                        <div class="row">
                            <div class="column col-lg-6">
                            <div class="dashboard_content_main">
                            <h1 class="section_header"><i class="fa fa-plus"></i>Unesi zaposlenika</h1>
                                <div class="column col-lg-6">
                                   <h1 class="section_header"><i class="fa fa-list"></i>Lista korisnika</h1>
                                        <div class="section_content">
                                            <div class="zaposlenici">
                                                <table>
                                                    <thead>
                                                    <tr>
                                                       <th>
                                                            ime
                                                        </th>
                                                        <th>
                                                            prezime
                                                        </th>
                                                        <th>
                                                            email
                                                        </th>
                                                        <th>
                                                            kreirano
                                                        </th>
                                                        <th>
                                                            promijenjeno
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            foreach($zaposlenici as $zaposlenik){ ?>

                                                            
                                                        <tr>
                                                            <td><?= $zaposlenik['ime'] ?></td>
                                                            <td><?= $zaposlenik['prezime'] ?> </td>
                                                            <td><?= $zaposlenik['email'] ?> </td>
                                                            <td><?= $zaposlenik['kreirano'] ?> </td>
                                                            <td><?= $zaposlenik['promijenjeno'] ?> </td>
                                                        </tr>

                                                        <?php } ?>
                                                    </tbody>
                                                </table>

                                            </div>

                                        </div>
                                </div>
                            <form action="database/add.php" method="POST" class="appForm">
                                <div class="appFormInputContainer">
                                    <label for="">Ime</label>
                                    <input type="text" class="appFormInput" id="ime" name="ime" />
                                </div>
                                <div class="appFormInputContainer">
                                    <label for="">Prezime</label>
                                    <input type="text" class="appFormInput" id="prezime" name="prezime" />
                                </div>
                                <div class="appFormInputContainer">
                                    <label for="">Email</label>
                                    <input type="text" class="appFormInput" id="email" name="email" />
                                </div>
                                <div class="appFormInputContainer">
                                    <label for="">Lozinka</label>
                                    <input type="password" class="appFormInput" id="lozinka" name="lozinka" />
                                </div>
                                <input type="hidden" name="table" value="zaposlenici" />
                                <button type="submit" class="appButton"><i class="fa fa-plus"></i> Dodaj  </button>
                            </form>
                            <?php 
                                    if(isset($_SESSION['response'])){
                                    $response_message = $_SESSION['response']['message'];
                                    $is_success = $_SESSION['response']['success'];
                            ?>

                            <div class="responseMessage">
                                <p class="<?= $is_success ? 'responseMessage_success' : 'responseMessage_error' ?>">
                                    <?= $response_message ?>
                                </p>
                            </div>
                            <?php unset($_SESSION['response']); } ?>
                        </div>

                            </div>
                        </div>
                </div>
            </div>
    </div>
<script src="js/script.js">
</script>
</body>
</html>