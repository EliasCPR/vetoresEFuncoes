<?php
// Escreva uma função que receba um número inteiro e verifique se ele é primo.
// Um número é primo quando ele é divisível apenas por 1 e por ele mesmo

function numeroPrimo (int $numero){
    if($numero == 2){
        return $numero;
    }else if($numero%2 == 1){
        return $numero;
    }else{
        return "error";
    }
}

echo numeroPrimo(21);