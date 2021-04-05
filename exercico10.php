<?php
// Escreva uma função que receba dois vetores como parâmetro.
// Se todos os elementos do segundo vetor conter dentro do primeiro, 
// retornar true, caso contrário retornar false.
// [1,2,3,4,5,6]
// [3,4,7]
// false

$vetA = [1,2,3,4,5,6];
$vetB = [1,4, 1];

// echo(count($vetB));
// unset($vetB[0]);
// echo("<br/>");
// echo(count($vetB));
// unset($vetB[1]);
// echo("<br/>");
// echo(count($vetB));
// unset($vetB[2]);
// echo("<br/>");
// echo(count($vetB));



function teste (array $vetA, array $vetB){    
    if (count($vetA) > count($vetB)){
        foreach($vetA as $valoresA){
            foreach($vetB as $a => $valoresB){
                if($valoresA == $valoresB){
                    unset($vetB[$a]);
                    if(count($vetB) == 0){
                        return true;
                    }  
                }
            }
        }
    }else{
    return false;
    }
}

echo(teste($vetA,$vetB));