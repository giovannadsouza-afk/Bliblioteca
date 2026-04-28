<?php

$opcao = " " ;
while ($opcao !=4){

echo "\nMenu";
    echo "\n1 Conversão ";
    echo "\n2 Geometria";
    echo "\n3 Saude";
    echo "\n4 Sair";

    $opcao = readline(">>>   ");
    
    switch ($opcao) {
    case 1 :

while($resultado != 6) {

    echo "\nMenu";
    echo "\n1 Conversão Dolar";
    echo "\n2 Conversão Euro";
    echo "\n3 Conversão Libra";
    echo "\n4 Conversão Peso Mexicano ";
    echo "\n5 Conversão Ieni ";
    echo "\n6 Sair \n";

    $resultado = readline(">>>   ");
    

    switch ($resultado) {
        case 1:
            $numero1 = readline("Digite quantos dolares vc tem");
            $numero2 = readline("Digite o preço do Dolar: ");
            echo "\nResultado: ", ($numero1 * $numero2);
            break;
        case 2:
            $numero1 = readline("Digite quantos euros vc tem: ");
            $numero2 = readline("Digite o preço do euro: ");
            echo "\nResultado: ", ($numero1 * $numero2);
            break;
        case 3:
            $numero1 = readline("Digite quantas libras vc tem: ");
            $numero2 = readline("Digite o preço da libra ");
            echo "\nResultado: ", ($numero1 * $numero2);
            break;
        case 4:
            $numero1 = readline("Digite quantos pesos mexicanos vc tem: ");
            $numero2 = readline("Digite o preço do peso mexicano: ");
            echo "\nResultado: ", ($numero1 * $numero2);
            break;

        case 5:
            $numero1 = readline("Digite ienis vc tem: ");
            $numero2 = readline("Digite o preço do ieni: ");
            echo "\nResultado: ", ($numero1 * $numero2);
            break;


        case 6 :
                echo "Saindo...";
        default:
            echo "Erro..";
            break;

    }
}


case 2 : 
  $numero2 = 0;
$numero1 = 0;
$operacao = "";
$numero3 = 0;
$numero4 = 0;

while ($operacao != 9) {

    echo "\nMenu";
    echo "\n1 Area Quadrado ";
    echo "\n2 Area Retangulo";
    echo "\n3 Area Triangulo";
    echo "\n4 Area Circulo";
    echo "\n5 Area Trapezio";
    echo "\n6 Sair \n";

    $operacao = readline("Escolha um operacao: ");



    switch ($operacao) {

        case 1:
            $numero3 = readline("Digite o lado do quadrado");
            echo "\nResultado : ", ($numero3 * $numero3);
            break;
        case 2:
            $numero4 = readline("Digite sua base");
            $numero3 = readline("Digite sua altura");
            echo "\nResultado : ", ($numero4 * $numero3);
            break;

        case 3:
            $numero4 = readline("Digite sua base");
            $numero3 = readline("Digite sua altura");
            echo "\nResultado : ", ($numero4 * $numero3 / 2);
            break;

        case 4:
            $numero3 = readline("Digite seu raio");
            echo "\nResultado : ", (3.14 * ($numero3 * $numero3));
            break;

        case 5:
            $numero4 = readline("Digite sua base maiiot");
            $numero3 = readline("Digite sua bese menor");
            $numero2 = readline("Digite sua altura");
            echo "\nResultado : ", ($numero4 * $numero3 * $numero2);
            break;

        case 6 :
                echo "Saindo...";
        default:
            echo "Erro..";
            break;
    }
}

case 3 :

$peso = 60;
$altura = 1.66;
$quantidade_agua = 35;
$idade = 16;
$frequencia = 220;
$libra = 0.453592 ;
$kg = 63;
$Homem = 66.47;
$Mulher = 655.1;


while ($operacao != 9) {

    echo "\nMenu";
    echo "\n1 Calcular Imc";
    echo "\n2 Calcular Quantidade de Agua";
    echo "\n3 Calcular Frequencia " ; 
    echo "\n4 Calcular Libras para Kilos"; 
    echo "\n5 Calcular calorias basicas";
    echo "\n6 Sair \n";

    $operacao = readline("Escolha um operacao: ");
     switch ($operacao) {

        case 1:
            $peso readline ("Digite seu peso");
            $altura readline ("Digite sua altura");
            echo "\nResultado : ", ($peso * $altura);
            break;
        case 2:
            $peso readline ("Digite seu peso ") ;
            $quantidade_agua readline ("Digite quantidade de agua /35");
            echo "\nResultado : ", ($peso * $quantidade_agua);
            break;

        case 3:
            $idade = readline("Digite sua idade");
            $frequencia = readline("Digite frequencia /220");
            echo "\nResultado : ", ($idade * $frequencia);
            break;

        case 4:
            $kg = readline("Digite seu peso");
            $libra = readline("Digite libra /0.453592");
            echo "\nResultado : ", ($kg * $libra);
            break;

        case 5:
            $Homem = readline("Voce é homem ? S/N entao digite 66");
            $Peso = readline("Digite seu peso");
            $altura = readline("Digite sua altura");
            $idade = readline("Digite sua idade");
            echo "\nResultado : ", ($Homem + (13.75 * $Peso ) + (5 * $altura) - (6.75 * $idade));

         $Mulher = readline("Voce é mulher ? S/N entao digite 655");
            $Peso = readline("Digite seu peso");
            $altura = readline("Digite sua altura");
            $idade = readline("Digite sua idade");
            echo "\nResultado : ", ($Mulher + (13.75 * $Peso ) + (5 * $altura) - (6.75 * $idade));
            break;

            case 6 :
                echo "Saindo...";
        default:
            echo "Erro..";
            break;
    }
}

 case 4 :
    echo "Saindo...";
     default:
            echo "Erro..";
            break;


  }
}
?>