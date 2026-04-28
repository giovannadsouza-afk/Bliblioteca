//Nomeclatura : Snake_Case
//Giovanna
<?php

//dolarParaReal 

$cotacao=5 ;  
$valor=100;

namespace conversao {
    
function dolarParaReal ($valor , $cotacao );
return $valor * $cotacao ; 
} 

$resultado = multiplicar($valor, $cotacao);

echo "Valor convertido: " . $resultado . "\n";

//euroParaReal

$cotacao=5,85 ;  
$valor=100;

namespace conversao {
    
function euroParaReal ($valor , $cotacao );
return $valor * $cotacao ; 
} 

$resultado = multiplicar($valor, $cotacao);

echo "Valor convertido: " . $resultado . "\n";

//PesoMexicanoParaReal


$cotacao = 0,29 ;  
$valor = 100;

namespace conversao {
    
function pesoMexicanoParaReal ($valor , $cotacao );
return $valor * $cotacao ; 
} 

$resultado = multiplicar($valor, $cotacao);

echo "Valor convertido: " . $resultado . "\n";

//LibraEsterlinaParaReal

$cotacao = 6,72 ;  
$valor = 100;

namespace conversao {
    
function libraParaReal ($valor , $cotacao );
return $valor * $cotacao ; 
} 

$resultado = multiplicar($valor, $cotacao);

echo "Valor convertido: " . $resultado . "\n";

//IeniParaReal


$cotacao = 0,031 ;  
$valor = 100;

namespace conversao {
    
function ieniParaReal ($valor , $cotacao );
return $valor * $cotacao ; 
} 

$resultado = multiplicar($valor, $cotacao);

echo "Valor convertido: " . $resultado . "\n";

?>;