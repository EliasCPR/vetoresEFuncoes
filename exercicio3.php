<!-- Escreva uma função que receba um vetor e imprima na tela os valores 
em ordem invertida. 
Nota: Não vale usar o print_r para mostrar os valores, a ideia aqui é 
exercitar a lógica. 
Exemplo: 
entrada: ["Olá", 1, 2, "Trinta"]; 
saída: ["Trinta", 2, 1, "Olá"];  -->
<?php
    function inverticaoArray(array $ordem){
        $i = [];
        $step = count($i);
        $a = count($ordem) - 1;
        for($a; $step <= $a; $a--){
                echo $ordem[$a] . "<br/><br/>";
        }
    }

    $nomes = ["Italo", "Gabriel", "Julia"];
    echo inverticaoArray($nomes);