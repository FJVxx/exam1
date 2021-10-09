<?php

//Fausto Joel Valenzuela Gonzalez TI IDGS 9-2

class Cuenta{
    public $nb;
    public $PIN;
    public $cuenta;
    private $balanceTotal;

    public $deposito;
    public $retiro;
    public $BC;

 

    public function balanceTotal($v){
        $this->balanceTotal = $v; 
    }
    

    public function hacerDeposito(){
        $this->balanceTotal = $this->deposito + $this->balanceTotal;
        $this->balanceTotal;
    }

    public function hacerRetiro(){        
        if($this->retiro > $this->balanceTotal == true){
            echo 'la cantidad exede de lo que tiene guardado'; 
            $this->balanceTotal = $this->balanceTotal - $this->retiro;
            $this->balanceTotal;
        
        }else{
        $this->balanceTotal = $this->balanceTotal - $this->retiro;
        $this->balanceTotal;
        }
    }

    public function getBalanceTotal(){
        if($this->balanceTotal < $this->retiro = true){
            $this->balanceTotal;
        }elseif($this->balanceTotal > $this->retiro = false){
            echo '<br><br>Hola '.$this->nb.' tu saldo es de '.$this->balanceTotal;

        }
    

    }  
}


?>