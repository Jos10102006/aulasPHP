<?php
//declaração de variaveis
$nome = "Pedro";
$numero;
$salario = 1000.50;
$Numeros=array(1,2,"3","texto");
$teste = false;
echo "o nome é:{$nome} e o salario é {$salario}";
//impressão com interpolacao
echo "\nNome: ".$nome. "e o salario". $salario ."\n" ;
//impresssão com var_dump()
var_dump($Numeros);

print_r($Numeros);
echo '<pre>';


var_dump($teste);
?>