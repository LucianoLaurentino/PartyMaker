<?php
	session_start(); //inicia uma variavel de sessao
	// incluindo a classe validacao.class.php
	include '../util/validation.class.php';
	include '../model/party.class.php';
	include '../dao/partydao.php';  // Classe do CRUD 

	switch($_GET['op']){
		case 'register':
			//verificando se os campos estão preenchidos
			if(($_POST['txthostname']) && 
				($_POST['txtemail']) && 
				($_POST['buffet']) && 
				($_POST['deco']) &&
				($_POST['dj']) &&
				($_POST['waiter']) &&
				($_POST['barman']) &&
				($_POST['guests']) &&
				($_POST['clean']) &&
				($_POST['safety']) ){

				//variavel erros recebe a função array
				$error = array();	
				
				//  Validacao c/ a função validarNome
				if(!Validation::validateNameHost($_POST['txthostname'])){
					$error[] = 'Nome invalido.';
				}
				if(!Validation::validateEmail($_POST['txtemail'])){
					$error[] = 'Email invalido.';
				}
				if(!Validation::validateGuestsParty($_POST['guests'])){
					$error[] = 'Número de convidados invalido.';
				}

				// verificando se não há erros nos campos preenchidos
				if(count($error) == 0){
					
					$party = new Party;
					
					$party->hostName = $_POST['txthostname'];
					$party->email = $_POST['txtemail'];
					$party->buffet = $_POST['buffet'];
					$party->decoration = $_POST['deco'];
					$party->deejay = $_POST['dj'];
					$party->waiter = $_POST['waiter'];
					$party->barman = $_POST['barman'];
					$party->guests = $_POST['guests'];
					$party->cleaning = $_POST['clean'];
					$party->security = $_POST['safety'];

					$pDAO = new PartyDAO();
					$pDAO->partyRegister($party);

					$_SESSION['estimate'] = serialize($party);
								
					header("location:../view/party-answer.php");
				}else{
					$_SESSION['error'] = serialize($error);
					header("location:../view/party-error.php");		
				}
			}else{
				echo 'Algo não esta preenchido';
			}

		break;// fecha o cadastrar
		// aqui inicia a função consultar
		case 'consult':
			// instanciar a classe DAO
			$pDAO = new PartyDAO();
			// buscar o array de pacientes cadastrados
			$array = array();
			// ativar a função do select * from paciente
			$array = $pDAO->searchParty();

			$_SESSION['estimates'] = serialize($array);

			header("location:../view/party-consult.php");
		break;

		case 'delete':
			if(isset($_REQUEST['codeParty'])){

				$pDAO = new PartyDAO();
				$pDAO->deleteParty($_REQUEST['codeParty']);
				header('location:../controller/party-controller.php?op=consult');
			}else{

				$_SESSION['msg'] = 'Não existe esse código na base de dados.';

				header("location:../view/party-error.php");
			}

		break;
	}
?>