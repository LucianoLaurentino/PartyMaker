<?php

class Party
{

    private $codeParty;
    private $hostName;
    private $email;
    private $buffet;
    private $deejay;
    private $decoration;
    private $waiter;
    private $cleaning;
    private $barman;
    private $security;
    private $guests;

    

    public function __construct()
    {
    }

    public function __destruct()
    {
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function valueBuffet(){
        if($this->buffet == 'simpleBuffet'){
            return  42;
        }else if($this->buffet == 'fullBuffet'){
            return  62;
        }else{
            return  92;
        }
    }

    public function guestsValue(){
        return $this->valueBuffet() * $this->guests;
    }

    public function valueDeejay(){
        if($this->deejay == 'deejayYes'){
            return 500;
        }else{
            return 0;
        }
    }

    public function decorationValue(){
        if($this->decoration == 'decorationYes'){
            return 350;
        }else{
            return 0;
        }

    }

    public function waiterValue(){
        if($this->waiter == 'waiter0'){
            return 00;
        }else if($this->waiter == 'waiter1'){
            return 100;
        }else if($this->waiter == 'waiter2'){
            return 200;
        }else if($this->waiter == 'waiter3'){
            return 300;
        }else{
            return 400;
        }
    }

    public function barmanValue(){
        if($this->barman == 'barmanYes'){
            return 200;
        }else{
            return 0;
        }
    }
    
    public function cleaningValue(){
        if($this->cleaning == 'cleanYes'){
            return 200;
        }else{
            return 0; 
        }
    }

    public function securityValue(){
        if($this->security == 'safeYes'){
            return 200;
        }else{
            return 0;
        }
    }

    public function totalValue(){
        return $this->valueBuffet() + $this->valueDeejay() + $this->decorationValue() + $this->waiterValue()  + $this->cleaningValue() + $this->barmanValue() + $this->securityValue()
        + $this->guestsValue();
    }
    

    

    function __toString()
    {
        return nl2br("  
                        <h5><p>Nome Do anfitrião: $this->hostName</p>
                        <p>Email: $this->email</p>
                        <p>Número de convidados: $this->guests</p>
                        <p>Buffet selecionado: $this->buffet</p>
                        <p>Valor do buffet: {$this->valueBuffet()}</p>
                        <p>Valor dos convidados: {$this->guestsValue()}</p>
                        <p>Valor do dJ: {$this->valueDeejay()}</p>
                        <p>Valor da decoração: {$this->decorationValue()}</p>
                        <p>Valor dos garçons: {$this->waiterValue()}</p>
                        <p>Valor da limpeza: {$this->cleaningValue()}</p>
                        <p>Valor do barman: {$this->barmanValue()}</p>
                        <p>Valor dos seguranças: {$this->securityValue()}</p>
                        <p>Valor da festa : {$this->totalValue()}</h5></p>
                        "
                    );
    }
}
?>