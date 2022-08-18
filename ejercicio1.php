<?php
// creacion del array que contiene 5 numeros
$myarray=[13,2,4,35,1];
// obtenemos el tamaño del array
$n=count($myarray);

//for que nos permite verificar cada numero del array con el tamaño del array
for ($contador=0; $contador< $n; $contador++){
    // si el contador es igual a cero entonces la posicion del numero mayor del array lo añadimos en cero
    if($contador==0){
        $mayor=$myarray[0];
    }else {
        /* en caso contrario, si el array tiene la posicion del contador y es mayor al numero mayor 
         entonces asignamos en la variable mayor el numero que esta en el array con la posicion 
         en la cuan esta el contador*/
        if($myarray[$contador]>$mayor){
            $mayor=$myarray[$contador];

        }
    }
}
// imprime el resultado en pantalla
echo "Resultado:";
echo $mayor;
?>