<?php

//calcular imc

$peso = 60;
$altura = 1,66;

namespace saude {
    function calcularimc ($peso , $altura);
    return $peso * $altura ;
}

$resultado = multiplicar($peso, $altura);

echo "Seu imc é: " . $resultado . "\n";

//calcular quantidade de agua que tem que beber

$peso = 63;
$quantidade_agua = 35;

namespace saude {
    function calcularagua ($peso , $quantidade_agua);
    return $peso * $quantidade_agua ;
}

$resultado = multiplicar($peso, $quantidade_agua);

echo "Sua quantidade ideal de agua  é: " . $resultado . "\n";

//calcular quantidade ideal de frenquecia cardiaca 

$idade = 16;
$frequencia = 220;

namespace saude {
    function calcularfreqencia ($idade , $frequencia);
    return $idade * $frequencia ;
}

$resultado = multiplicar($idade , $frequencia);

echo "Seu imc é: " . $resultado . "\n";

//Converter libras para kilo

$libra = 0,453592 ;
$kg = 63;

namespace saude {
    function calcularlibraprapeso ($libra , $kg);
    return $libra * $kg ;
}

$resultado = multiplicar($libra, $kg);

echo "Seu peso e libras  é: " . $resultado . "\n";

//Função calcularCaloriasBasais

$Homem = 66,47;
$Mulher = 655 ,1;
$Peso = 63;
$altura = 1,66;
$idade = 30 ; 

namespace saude {
    function calcularCaloriasBasais($idade, $Homem , $Peso , $altura);
    return $Homem + (13,75 * $Peso ) + (5 * $altura) - (6,75 * $idade);
}

$resultado = multiplicar($Homem + (13,75 * $Peso ) + (5 * $altura) - (6,75 * $idade);

echo "Suas calorias basicas são : " . $resultado . "\n";

namespace saude {
    function calcularCaloriasBasaisBasais($idade, $Mulher, $Peso , $altura);
    return $Mulher + (9,56 * $Peso) + (1,85 * $altura) - (4,67 * $idade);
}

$resultado = multiplicar($Homem + (13,75 * $Peso ) + (5 * $altura) - (6,75 * $idade);

echo "Suas calorias basicas são : " . $resultado . "\n";

?>
