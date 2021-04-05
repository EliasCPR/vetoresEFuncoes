<?php
// 7 - Escreva uma função que receba um vetor de inteiros como parâmetro.
// Ela deve retornar um outro vetor contendo o maior e o menor número dentro do vetor
// passado.
// Exemplo de retorno: [100, 3]


$numeros = [10234, 34217890745,2344223, 412340, 5032144];

function maiorMenor(array $vetor){
    $maior = $vetor[0];
    $menor = $vetor[0];

    foreach ($vetor as $valor) {
        if($maior > $valor){
            $maior = $maior; 
        }else{
            $maior = $valor;
        }
        if($menor < $valor){
            $menor = $menor; 
        }else{
            $menor = $valor;
        }
    }

    $novoVetor [] = $maior;
    $novoVetor [] = $menor;
 
    return $novoVetor;
}

print_r(maiorMenor($numeros));
