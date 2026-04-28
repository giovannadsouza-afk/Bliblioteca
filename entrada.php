//Nomeclatura : Snake_Case
//Giovanna
<?php

require_once "bliblioteca.php";

use  function conversao\dolarParaReal;
use  function conversao\euroParaReal;
use  function conversao\libraParaReal;
use  function conversao\pesoMexicanoParaReal;
use  function conversao\ieniParaReal;

echo "A conversão deu " , dolarParaReal (100 , 5)
echo "A conversão deu " , euroParaReal (100 , 5,85)
echo "A conversão deu " , libraParaReal (100 , 6,72)
echo "A conversão deu " , pesoMexicano (100, 0,29 )
echo "A conversão deu " , ieniParaReal (100, 0,031)

?>;
