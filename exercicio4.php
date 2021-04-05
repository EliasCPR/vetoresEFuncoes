<!-- Escreva uma função que recebe dois parâmetros, um vetor e um valor qualquer. 
A função deve procurar o valor dentro do vetor, se encontrar, deletar e retornar o novo vetor. 
Se não encontrar retornar false.  -->
<?php
    function deletarValor(array $numeros, $valor){

        for($i=0 ;$i<= count($numeros); $i++){
            if($numeros[$i] == $valor){ 
                unset($numeros[$i]);
                return $numeros;
            }
        }
        return false;
    }

    $inteiros = [0,1,2,3,45,43,123,87,5643];

    print_r (deletarValor($inteiros, 45));