<?php

function multiplo5y7($numero) {
    // AQUÍ VA EL CÓDIGO DE LA FUNCIÓN
    $limite=20;
$numero=5;
for($i=0;$i<$limite;$i++){
	if($i%$numero==0){
	echo $i." es múltiplo de ".$numero;
	}
}
    return 'respuesta: '.$numero;
}

?>