<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PartyMaker - Página Principal</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--JS e jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script type="text/javascript" src="js/materialize.js"></script>

    <script type="text/javascript" src="js/carousel.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="stylesheet" href="./css/styles.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">

  <style>
    .carrosel{
      border: 2px solid black;
      background-color: rgb(182, 135, 240);
      margin: 20px;
    }
    .card-content{
      font-weight: bold;
    }
  </style>

  </head>

<body>
    <div class="navbar-fixed">
        <nav>
            <div div class="nav-wrapper">
            <a href="#!" class="brand-logo"><i class="material-icons">cloud</i>PartyMaker</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="./view/party-register.php"><i class="material-icons">description</i></a></li>
                    <li><a href="./view/party-consult.php"><i class="material-icons">pageview</i></a></li>
                    <li><a href="./pages/photos.php"><i class="material-icons">camera_alt</i></a></li>
                </ul>
            </div>
        </nav>
    </div>

    <section class="carrosel">
    <div class="carousel">
    <a class="carousel-item" href="./pages/photos.php"><img src="./images/baloes.jpg"></a>
    <a class="carousel-item" href="./pages/photos.php"><img src="./images/crianca.jpg"></a>
    <a class="carousel-item" href="./pages/photos.php"><img src="./images/bolo.jpg"></a>
    <a class="carousel-item" href="./pages/photos.php"><img src="./images/velas.jpg"></a>
  </div>
  </div>
    

    <section class="menu">
        <div class="row">
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <span class="card-title"></span>
              </div>
              <div class="card-content">
                <p>Confira os orçamentos que já foram cadastradas em nosso site.</p>
              </div>
              <div class="card-action">
                <a href="./controller/party-controller.php?op=consult">Confira os orçamentos</a>
              </div>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <span class="card-title"></span>
              </div>
              <div class="card-content">
                <p>Você pode fazer o orçamento da sua festa através do nosso site.</p>
              </div>
              <div class="card-action">
                <a class="link" href="./view/party-register.php">Faça seu orçamento!</a>
              </div>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <span class="card-title"></span>
              </div>
              <div class="card-content">
                <p>Dê uma olhada na nossa galeria de fotos para ter uma inspirção para a sua festa.</p>
              </div>
              <div class="card-action">
                <a href="./pages/photos.php">Veja a galeria!</a>
              </div>
            </div>
          </div>
          </div>
      </section>

      </section>
        
      <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">PartyMaker</h5>
                <p class="grey-text text-lighten-4"></p>Organize sua festa de aniversário no melhor salão da cidade!!</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Páginas</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="index.php">Página Principal</a></li>
                  <li><a class="grey-text text-lighten-3" href="./view/party-register.php">Faça seu Orçamento</a></li>
                  <li><a class="grey-text text-lighten-3" href="./pages/photos.php">Galeria</a></li>
                  <li><a class="grey-text text-lighten-3" href="./view/party-consult.php">Orçamentos Feitos</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2022 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

</body>
</html>