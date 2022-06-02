<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <!--JS e jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript" src="../js/materialize.min.js"></script>

    <script type="text/javascript" src="../js/materialize.js"></script>

    <script type="text/javascript" src="../js/carousel.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="stylesheet" href="../css/styles.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">


    <title>PartyMaker - Galeria</title>

    <style>
        .gallery-container{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    gap: 2vw;
    padding: 0 2vw;
    }
    .gallery-items{
    width: 340px;
    height: 340px;
    border: 10px solid #FFF;
    box-shadow: 5px 5px 5px #0006;
    flex-grow: 1;
    transition: transform .5s linear;
    }
    .gallery-items img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    }
    .photos{
    border: 2px solid black;
    background-color: rgb(182, 135, 240);
    margin: 20px;
    padding: 20px;
    }
    .gallery-items:hover{
    transform: scale(1.1);
    }
    </style>
</head>
<body>
<div class="navbar-fixed">
        <nav>
            <div div class="nav-wrapper">
                <a href="../index.php" class="brand-logo"><i class="material-icons">cloud</i>PartyMaker</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="../view/party-register.php"><i class="material-icons">description</i></a></li>
                    <li><a href="../view/party-consult.php"><i class="material-icons">pageview</i></a></li>
                    <li><a href="./photos.php"><i class="material-icons">camera_alt</i></a></li>
                </ul>
            </div>
        </nav>
    </div>

    <h3 class="titleorc">Galeria de fotos</h3>

    <section class="photos">
        <div class="gallery-container">
            <a href="../images/image1.jpg" class="gallery-items">
                <img src="../images/image1.jpg" alt="">
            </a>
            <a href="../images/image2.jpg" class="gallery-items">
                <img src="../images/image2.jpg" alt="">
            </a>
            <a href="../images/image4.jpg" class="gallery-items">
                <img src="../images/image4.jpg" alt="">
            </a>
            <a href="../images/image10.webp" class="gallery-items">
                <img src="../images/image10.webp" alt="">
            </a>
            <a href="../images/image13.jpg" class="gallery-items">
                <img src="../images/image13.jpg" alt="">
            </a>
            <a href="../images/image7.jpg" class="gallery-items">
                <img src="../images/image7.jpg" alt="">
            </a>
            <a href="../images/image8.jpg" class="gallery-items">
                <img src="../images/image8.jpg" alt="">
            </a>
            <a href="../images/image11.png" class="gallery-items">
                <img src="../images/image11.png" alt="">
            </a>
            <a href="../images/image5.jpg" class="gallery-items">
                <img src="../images/image5.jpg" alt="">
            </a>
            <a href="../images/image14.jpg" class="gallery-items">
                <img src="../images/image14.jpg" alt="">
            </a>
            <a href="../images/image9.jpg" class="gallery-items">
                <img src="../images/image9.jpg" alt="">
            </a>
            <a href="../images/image16.jpg" class="gallery-items">
                <img src="../images/image16.jpg" alt="">
            </a>
            <a href="../images/image15.webp" class="gallery-items">
                <img src="../images/image15.webp" alt="">
            </a>
            <a href="../images/image12.jpg" class="gallery-items">
                <img src="../images/image12.jpg" alt="">
            </a>
            <a href="../images/image6.jpg" class="gallery-items">
                <img src="../images/image6.jpg" alt="">
            </a>
            <a href="../images/image3.jpg" class="gallery-items">
                <img src="../images/image3.jpg" alt="">
            </a>
        </div>        
    </section>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">Organize sua festa de aniversário no melhor salão da cidade!!</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Páginas</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="../index.php">Página Principal</a></li>
                        <li><a class="grey-text text-lighten-3" href="../view/party-register.php">Faça seu Orçamento</a></li>
                        <li><a class="grey-text text-lighten-3" href="./photos.php">Galeria</a></li>
                        <li><a class="grey-text text-lighten-3" href="../view/party-consult.php">Orçamentos Feitos</a></li>
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