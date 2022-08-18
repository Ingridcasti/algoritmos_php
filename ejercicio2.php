<?php
// ingresamos el numero con que queremos contruir el tamaño de la matriz x
$n = 5;
// si el numero es igual a 0 entonces muestra un mensaje de error
if($n == 0){
    echo "error";
}
//ciclo for para validar la impresion de la x y los _ y hacer salto de linea
for($row = 0;$row<$n; $row++ )
{
    for($column = 0; $column<$n; $column++)
    {    //If que valida las posiciones de las columnas y filas para imprimir la x de nxn
        if(($column == $n or $column ==$n-$row- 1)or ($column == $row or $column ==$n-$row- 1))
        {
            echo "X";
        }
        else{
            echo "_";
        }

    }
    echo "<br>";

}
?>