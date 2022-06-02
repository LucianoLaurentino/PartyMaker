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

    <title>PartyMaker - Orçamento</title>

    <style>
        .nameClient::placeholder{
    color: black;
    }
    .inviteInput::placeholder{
    color: black;
    }
    </style>
</head>

<body>

    <div class="navbar-fixed">
        <nav>
            <div div class="nav-wrapper">
                <a href="../index.php" class="brand-logo"><i class="material-icons">cloud</i>PartyMaker</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#"><i class="material-icons">description</i></a></li>
                    <li><a href="./party-consult.php"><i class="material-icons">pageview</i></a></li>
                    <li><a href="../pages/photos.php"><i class="material-icons">camera_alt</i></a></li>
                </ul>
            </div>
        </nav>
    </div>

    <h3 class="titleorc">Selecione tudo o que deseja ter em sua festa</h3>

    <section class="partyitens">
        <form  name="" action="../controller/party-controller.php?op=register" method="POST">
            <div class="nameClient">
                <h5>Informe o nome do Anfitrião</h5>
                <input class="nameInput" placeholder="Nome Completo"  type="text" name="txthostname">
            </div>

            <div class="email">
                <h5>Informe seu endereço de email:</h5>
                <input class="emailInput" placeholder="@email"  type="text" name="txtemail">
            </div>

            <div class="invites">
                <h5>Informe o número de convidados:</h5> <h6>MAX:9999</h6>
                <input class="inviteInput" placeholder="0"  type="number" name="guests">
            </div>

            <div class="buffet">
                <h5>Selecione o Buffet:</h5>
                <p>
                    <label>
                        <input class="with-gap"  name="buffet" value="simpleBuffet" type="radio" checked />
                        <span>Simples (R$42,00)</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input class="with-gap"  name="buffet" value="fullBuffet" type="radio" />
                        <span>Completo (R$62,00)</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input class="with-gap"  name="buffet" value="vipBuffet" type="radio" />
                        <span>Vip (R$92,00)</span>
                    </label>
                </p>
            </div>

            <div class="deco">
                <h5>Deseja decoração na festa? (R$350,00)</h5>
                <p>
                    <label>
                        <input class="with-gap"  name="deco" value="decorationYes" type="radio" checked />
                        <span>Sim</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input class="with-gap" name="deco" value="decorationNo" type="radio" />
                        <span>Não</span>
                    </label>
                </p>
            </div>

            <div class="dj">
                <h5>Deseja DJ na festa? (R$500,00)</h5>
                <p>
                    <label>
                        <input class="with-gap"  name="dj" value="deejayYes" type="radio" checked />
                        <span>Sim</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input class="with-gap"  name="dj" value="deejayNo" type="radio" />
                        <span>Não</span>
                    </label>
                </p>
            </div>

            <div class="waiter">
                <h5>Deseja garçom na festa? (R$100,00)</h5>
                <p>
                    <label>
                        <input class="with-gap"  name="waiter" value="waiter0" type="radio" checked />
                        <span>Nenhum garçom</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input class="with-gap"  name="waiter" value="waiter1" type="radio" />
                        <span>1 Garçom</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input class="with-gap"  name="waiter" value="waiter2" type="radio" />
                        <span>2 Garçons</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input class="with-gap"  name="waiter" value="waiter3" type="radio" />
                        <span>3 Garçons</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input class="with-gap"  name="waiter" value="waiter4" type="radio" />
                        <span>4 Garçons</span>
                    </label>
                </p>
            </div>

            <div class="barman">
                <h5>Deseja barman na festa? (R$200,00)</h5>
                <p>
                    <label>
                        <input class="with-gap"  name="barman" value="barmanYes" type="radio" checked />
                        <span>Sim</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input class="with-gap"  name="barman" value="barmanNo" type="radio" />
                        <span>Não</span>
                    </label>
                </p>
            </div>

            <div class="clean">
                <h5>Deseja limpeza pós festa? (R$200,00)</h5>
                <p>
                    <label>
                        <input class="with-gap"  name="clean" value="cleanYes" type="radio" checked />
                        <span>Sim</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input class="with-gap"  name="clean" value="cleanNo" type="radio" />
                        <span>Não</span>
                    </label>
                </p>
            </div>

            <div class="safety">
                <h5>Deseja segurança? (R$150,00)</h5>
                <p>
                    <label>
                        <input class="with-gap"  name="safety" value="safeYes" type="radio" checked />
                        <span>Sim</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input class="with-gap"  name="safety" value="safeNo" type="radio" />
                        <span>Não</span>
                    </label>
                </p>

            </div>

            <div class="button">
                <button class="btn waves-effect waves-light" type="submit" value="Send">Enviar
                    <i class="material-icons right">send</i>
                </button>
                <input class="btn btn-warning" type="reset" name="btnLimpar" value="Limpar">
            </div>
        </form>
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
                        <li><a class="grey-text text-lighten-3" href="./party-register.php">Faça seu Orçamento</a></li>
                        <li><a class="grey-text text-lighten-3" href="../pages/photos.php">Galeria</a></li>
                        <li><a class="grey-text text-lighten-3" href="./party-consult.php">Orçamentos Feitos</a></li>
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