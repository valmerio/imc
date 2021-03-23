<?php

function IMC($peso, $altura){
	
       $Imc= ($peso)/($altura*$altura)*10000;
 
       return $Imc;
 
}

echo IMC(78, 167);

?>