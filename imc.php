<?php

function IMC($peso, $altura){
	
       $Imc= ($peso)/($altura*$altura);
 
       return $Imc;
 
}

echo IMC(78, 1.67);

?>