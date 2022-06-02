<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Consultar Festa</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <!--JS e jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript" src="../js/materialize.min.js"></script>

    <script type="text/javascript" src="../js/materialize.js"></script>

    <script type="text/javascript" src="../js/carousel.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="stylesheet" href="../css/styles.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">

    <style>
        .page-footer-fixed{
    background-color: rgb(52, 52, 52);
        }
        .mx-auto {
            border: 2px solid black;
            background-color: rgb(182, 135, 240);
            margin-top: 50px;
            margin-bottom: 50px;
            margin-left: 20px;
            margin-right: 20px;
        }

        .consult {
            padding-top: 30px;
            padding-bottom: 30px;
            padding-left: 20px;
            padding-right: 20px;
        }
    </style>
    
</head>

<body>
    <div class="navbar-fixed">
        <nav>
            <div div class="nav-wrapper">
                <a href="../index.php" class="brand-logo"><i class="material-icons">cloud</i>PartyMaker</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="./party-register.php"><i class="material-icons">description</i></a></li>
                    <li><a href="./party-consult.php"><i class="material-icons">pageview</i></a></li>
                    <li><a href="../pages/photos.php"><i class="material-icons">camera_alt</i></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <section class="mx-auto">
        <div class="consult">
            <h1 style="font-weight: bold;">Festas cadastradas</h1>
            <hr>
            <?php

            if (isset($_SESSION['estimates'])) {

                include '../model/party.class.php';
                $party = array();

                $party = unserialize($_SESSION['estimates']);

                echo '<table class= "table table-striped table hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome do Anfitrião</th>
                        <th>Email</th>
                        <th>Valor do buffet</th>
                        <th>Valor do deejay</th>
                        <th>Valor da decorção</th>
                        <th>Valor dos garçons</th>
                        <th>Valor da limpeza</th>
                        <th>Valor do barman</th>
                        <th>Valor dos segurança</th>
                        <th>Número de convidados</th>
                        <th>Valor total</th>
                        <th>Opções</th>
                    </tr>
                    </thead>
                    ';

                foreach ($party as $par) {
                    echo "<tr>";
                    echo '<td>' . $par->codeParty . '</td>';
                    echo '<td>' . $par->hostName . '</td>';
                    echo '<td>' . $par->email . '</td>';
                    echo '<td>' . $par->buffetValue . '</td>';
                    echo '<td>' . $par->deejayValue . '</td>';
                    echo '<td>' . $par->decorationValue . '</td>';
                    echo '<td>' . $par->waiterValue . '</td>';
                    echo '<td>' . $par->cleaningValue . '</td>';
                    echo '<td>' . $par->barmanValue . '</td>';
                    echo '<td>' . $par->securityValue . '</td>';
                    echo '<td>' . $par->guests . '</td>';
                    echo '<td>' . $par->totalValue . '</td>';
                    echo '<td> <a href="../controller/party-controller.php?op=delete&codeParty=' . $par->codeParty . '">Deletar</a>  </td>';
                    echo '</tr>';
                }
            } else {
                echo 'Não existe festas cadastradas...';
            }
            ?>
            <hr>
        </div>
    </section>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

        

</html>