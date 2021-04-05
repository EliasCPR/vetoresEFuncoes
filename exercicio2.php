<!-- //Escreva uma função que recebe dois parâmetros, um vetor de nomes e um nome específico. 
A função deve procurar o nome no vetor, se encontrar retornar true, caso contrário, retornar 
false. 
Teste a função exibindo o valor na tela.  -->

<?php
    function procurarNome(array $nomes, $nomeProcurado){
        foreach($nomes as $nome){
            if($nome == $nomeProcurado){
                return true;
            }
        }
        return false;
    }

    $alunos = ["Lucas", "Gabriel", "Maria", "Julia"];

    echo procurarNome($alunos, "Maria");

