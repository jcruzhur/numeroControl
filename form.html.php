<?php 

    $entidad = $_POST['entidad'];
    $oficina = $_POST['oficina'];
    $numerocontrol = $_POST['numerocontrol'];
    $cuenta = $_POST['cuenta'];



	echo "numero introducido: " .$entidad ." ". $oficina ." ". $numerocontrol ." ". $cuenta;
        
       
        $numero_verificacion = numerocontrol($entidad,$oficina,$cuenta);
        if ($numerocontrol == $numero_verificacion) {
            echo "el numero de cuenta introducido es correcto";
        
        }else{
            echo "el numero de cuenta introducido es incorrecto";
        }

    

?>