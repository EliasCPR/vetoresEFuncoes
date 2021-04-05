<?php
// 6 - Escreva uma função que receba um vetor como parâmetro.
// Retornar um outro vetor contendo apenas as chaves do vetor recebido


$comprar = [
    "banana" => 1, 
    5 => 2, 
    "uva" => 3, 
    3 => 4, 
    "maça" => 5, 
    6 => 6, 
    "melão" => 7, 
    15 => 8
];

function retornaChaves(array $vetor){ 
    foreach($vetor as $keys => $i){
        $novoVetor []= $keys;
    }
    return $novoVetor;
}

print_r( retornaChaves($comprar));
