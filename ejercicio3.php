<?php
// creacion del array de 10 numeros
$myArray = [5,5,1,2,2,5,3,3,1,1];
// obtencion del tamaño del array
$longitud = count($myArray);
//inicializamos la variable en 0 la cual usaremos para contar las veces que se repite el numero
$numeroapariciones=0;
/* iniciamos el ciclo for que nos permitira hacer las comparaciones 
y extraer los datos de repeticiones y el valor repetido dependiendo del tamaño del array */
for($x=0; $x<$longitud; $x++){

    $num_apariciones=0;
    /*for que nos permite comparar la pocion del array con en primer contador x y 
    la posion del array con el segundo contador j si estos son iguales*/
    for($j=0; $j<$longitud; $j++){
        // si el numero del array x y j es igual entonces se incrementa num_apariciones para el conteo
        if($myArray[$x]==$myArray[$j]){
            $num_apariciones++;
        }
        /*si el numero de apariciones del if anterior es mayor que el numero de apariciones entonces 
          asignamos ese valor a numero de apariciones y el numero que se repite mayor veces en la posicion del primer for */
        if($num_apariciones>$numeroapariciones){
            $numeroapariciones=$num_apariciones;
            $myor_repetidor=$myArray[$x];

        }
    }
}
// imprime los datos obtenidos
echo "Rep:";
echo $numeroapariciones;
echo "<br>";
echo "Val:";
echo $myor_repetidor;
?>