<?php  


function calcular_dc($entidad, $oficina, $cuenta){
    $dc = "";
    $pesos = array(6, 3, 7, 9, 10, 5, 8, 4, 2, 1);

    foreach(array($entidad . $oficina, $cuenta) as $cadena){
        $suma = 0;
        for($i=0, $len=strlen($cadena); $i<$len; $i++){
            $suma += $pesos[$i] * substr($cadena, $len-$i-1, 1);
        }
        $digito = 11-$suma%11;
        if($digito==11){
            $digito = 0;
        }elseif($digito==10){
            $digito = 1;
        }
        $dc .= $digito;
    }

    return $dc;
	}
    
?>