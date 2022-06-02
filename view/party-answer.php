<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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

</head>

<body>
    <div class="navbar-fixed">
        <nav>
            <div div class="nav-wrapper">
                <a href="../index.php" class="brand-logo"><i class="material-icons">cloud</i>PartyMaker</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="../view/party-register.php"><i class="material-icons">description</i></a></li>
                    <li><a href="../controller/party-controller.php?op=consult"><i class="material-icons">pageview</i></a></li>
                    <li><a href="../pages/photos.php"><i class="material-icons">camera_alt</i></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <section class="mx-auto" style="width: 50%; margin-top: 5%">

        <h1 style="color:green;">Festa cadastrada com sucesso!</h1>
        <hr>
        <?php
		//verificando se nas variáveis há algum registro 
			if( isset($_SESSION['estimate']) ){
				
				include '../model/party.class.php';
				$party = new Party();
			
			//unserialize na variável de sessão prontuario
				$party = unserialize( $_SESSION['estimate'] );
				
			//mostrando o resultado da variável  paciente 
				echo '<br />'.$party;
			}
		?>		
        <hr>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>