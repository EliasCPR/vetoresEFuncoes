<?php

    function somarInteiros(array $vatorInteiros){
        $soma = 0;

        foreach($vatorInteiros as $numero){
            $soma += $numero;
        }

        return $soma;
    }

    $inteiros = [10, 50,90];

    echo somarInteiros($inteiros);