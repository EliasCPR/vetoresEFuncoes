<?php
    // Escreva uma função que receba um vetor de notas de alunos.
    // A função deve calcular e retornar a média das notas.

    $notasMariana = [
        "mariana" => [
        "Nota1" => 10, 
        "Nota2" => 10, 
        "Nota3" =>10
        ]
    ];


    function mediaNotas (array $media, string $nomeAluno){
        $soma = 0;
        foreach($media as $keys => $notas){
            if($keys == $nomeAluno){
                foreach($notas as $i){
                    $soma += $i;
                    echo $soma."<br/>";
                    $media = $soma/count($notas);
                    return $media;
                }
            }else{ 
                echo "Aluno não existe na lista";
            }
        }
    }

echo mediaNotas($notasMariana, "joão");