<?php

namespace matematica; {

    function Somar($a, $b, $c)
    {
        return $a + $b + $c;
    }
}

namespace texto; {

    function Concatenar($nome, $sobrenome)
    {

        return $nome . "  " . $sobrenome;
    }
}

namespace logica; {
    function verificaidade($idade)
    {
        if ($idade >= 18) {
            return "Maior de idade!";
        } else {
            return "Menor de idade!";
        }
    }
}

namespace logica{
    function verificaidade($idade) {
        {
            function Exercito ($sexo , $idade ){
                if($idade >= 18 && $sexo == "Masculino"){
                    return "Voce está apto a servir o Exercicito";
                }
                else{ 
                    return "Voce nao cumpre aos requisitos";
                }

            }
    
        }

    }

?>;