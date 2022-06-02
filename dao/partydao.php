<?php


/* Aqui sera feito o nosso CRUD - INSERT, SELECT, UPDATE, DELETE */

include "../persistence/bankconnection.php";

class PartyDAO {

    private $connection = null; 

    public function __construct() {
        $this->connection = BankConnection::getInstance();
    }

    // criando a função de inserção dos dados 
    public function   partyRegister($party) {
      try{
          $stat = $this->connection->prepare("insert into party(codeParty,hostName,email,buffetValue,deejayValue,decorationValue,waiterValue,cleaningValue,barmanValue,securityValue,guests,totalValue)
          values(null,?,?,?,?,?,?,?,?,?,?,?)");

          $stat->bindValue(1,$party->hostName);
          $stat->bindValue(2,$party->email);
          $stat->bindValue(3,$party->valueBuffet());
          $stat->bindValue(4,$party->valueDeejay());
          $stat->bindValue(5,$party->decorationValue());
          $stat->bindValue(6,$party->waiterValue());
          $stat->bindValue(7,$party->cleaningValue());
          $stat->bindValue(8,$party->barmanValue());
          $stat->bindValue(9,$party->securityvalue());
          $stat->bindValue(10,$party->guests);
          $stat->bindValue(11,$party->totalValue());

          $stat->execute();

          $this->connection = null;

      }catch(PDOException $error){
          echo 'Erro ao cadastrar a sua festa!'.$error;
      }
    }
    
    // buscando os pacientes cadastros
    public function searchParty(){
        try{
        // criando o select como se fosse no BD
        $stat = $this->connection->query("select * from party");
        // criando uma variável array para armazenar todos os pacientes 
        //cadastrados
        $array = array();
        // buscar todos os registros cadastrados na classe Pontato
        $array = $stat->fetchAll(PDO::FETCH_CLASS,'Party');
        // finalizando a conexão novamente
        $this->connection =  null;

        return $array;// retorna na tela os pacientes

        }catch(PDOException $e){
        echo 'Erro ao buscar as festas..'.$e;
        }
    }//fecha o consultar

    public function searchPartyByCode($codeParty) {
      try {
        // criando o select como se fosse no BD
        $stat = $this->connection->query("select * from party where codeParty = ".$codeParty);
        // criando uma variável array para armazenar todos os pacientes 
        //cadastrados
        $array = array();
        // buscar todos os registros cadastrados na classe Paciente
        $array = $stat->fetchAll(PDO::FETCH_CLASS,'Party');
        // finalizando a conexão novamente
        $this->connection =  null;

        return $array;// retorna na tela os pacientes

      } catch (PDOException $e) {
        echo 'Erro ao buscar a festa através do código '.$codeParty.': '.$e;
      }
    }

    public function changeParty($party) {
      try{
        $stat = $this->connection->prepare('update party set buffetValue = ?, deejayValue = ?, decorationValue = ?, waiterValue = ?, cleaningValue = ?, barmanValue = ?, securityValue = ?, guests = ?, totalValue = ? where codeParty = ?');
  
          $stat->bindValue(1,$party->valueBuffet());
          $stat->bindValue(2,$party->deejayValue());
          $stat->bindValue(3,$party->decorationValue());
          $stat->bindValue(4,$party->waiterValue());
          $stat->bindValue(5,$party->cleaningValue());
          $stat->bindValue(6,$party->barmanValue());
          $stat->bindValue(7,$party->securityValue());
          $stat->bindValue(8,$party->guests);
          $stat->bindValue(9,$party->totalValue());
          $stat->bindValue(10,$party->codeParty);            
  
        $stat->execute();
        $this->connection = null;
  
      }catch(PDOException $e){
        echo 'Erro ao alterar a festa '. $e;
      }
    }

    // deletar Paciente
    public function deleteParty($codeParty){ // chave primária -atributo identificador 
        try{
          $stat = $this->connection->prepare("delete from party where codeParty=?");
    
          $stat->bindValue(1,$codeParty);
    
          $stat->execute();
    
          $this->connection = null;
    
        }catch(PDOException $e){
          echo 'Erro ao deletar a festa'.$e;
        }//fecha catch
      }//fecha deletarContato
    
}//fecha a classe pacientedao
