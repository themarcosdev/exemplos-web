<?php

/* Usando $$ e closures */
$for = "a123";

$a123 = function (){
   return "nome";
};


echo $for ;
echo "\n";

/* 
 echo $$for ; // da erro na closure ();
echo "\n";
echo $$for(); // chama a closure ();
*/
?>
