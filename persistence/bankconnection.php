<?php

class BankConnection extends PDO
{
    
    private static $instance = null;
    public function bankConnection($dsn, $usuario, $senha)
    {
        parent::__construct($dsn, $usuario, $senha);
    }

    // criando a função de conexão com o BD 
    public static function getInstance()
    {
        // se nao houver uma conexão inicial com o BD
        if (!isset(self::$instance)) {

            // ...ele vai tentar conectar com o BD 
            try {
                self::$instance = new BankConnection("mysql:dbname=partymanager;host=localhost:3306","root","");
                /* não esquecer de alterar o banco, host, usuário e senha quando colocarmos a aplicação no ar.*/
            } catch (Exception $e) {
                echo 'Erro ao conectar com o Banco...'.$e;
                exit();
            } //fecha o catch

        } // fecha o if
        return self::$instance;
    } //fecha o método

}// fim 