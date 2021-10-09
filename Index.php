
<?php

require_once 'Cuenta.php';
$Dato1 = new Cuenta;
$Dato1->nb = 'Mario';
$Dato1->PIN = "9850";
$Dato1->cuenta = "12h13b888282ghg11";

//Aqui se cambia la cantidad total del balance

$Dato1->balanceTotal(1000);

$Dato1->deposito = 1;

$Dato1->retiro = 1002;




$Dato1->hacerDeposito();
$Dato1->hacerRetiro();

$Dato1->getBalanceTotal();
   


//Aqui se cambian los diferentes variables







