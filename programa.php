<?php
//Faça um programa que receba dez números, calcule e mostre a soma dos números pares e a soma dos números primos.
 
$num=array();
$qtdimpar = 0;
$qtdpar = 0;

for ($i = 0 ; $i < 10; $i++){
    echo "Digite um numero: ";
    $num[$i] = (int)readline();     
    
    if($num[$i] %2==0){
    $qtdpar += $num[$i];} 
    else{
    $qtdimpar += $num[$i];
}
}
echo "A soma dos números pares : $qtdpar\n";
echo "A soma dos números ímpares: $qtdimpar\n";


?>
 