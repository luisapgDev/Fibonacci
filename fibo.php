<?php
//luisa puertas garcia

//esta función devolverá la secuencia de fibonacci hasta el valor indicado como parametro
//se crea la función correspondiente, pasandole como parametro el número de la secuencia
//dentro de la función se crean 4 variables, la 'res' que es un array donde se almacenará todos los numeros de la cantidad de secuencia que se pasa como parmetro
//num1 es el primer numero de fibonacci
//num2 es el segundo numero de fibonacci
//dentro de la funcion se hace una comprobacion adicional, que es, si se ingresa 0 o un numero menor que 0 (negativo) un aviso de que no se puede hacer la secuencia
//se hace un bucle donde se recorre hasta el nº de secuencia pasada por parametro
function fibonacci($numero){
    echo ("<h2>Fibonacci</h2>");
      if ($numero <= 0) {
        echo "No se puede generar una secuencia con cero o menos elementos";
        return array();
    }
    $res = array();
    $num1 = 0;
    $num2 = 1;
    for($i = 0; $i < $numero ;$i++){

        $res[] = $num1; // aqui se guarda el número actual en el array
        $otr = $num1 + $num2; //aqui se calcula el siguiente número, suma de los dos anteriores
        $num1 = $num2; //aqui se avanza, el valor de 'num2' se convierte en el nuevo 'num1'
        $num2 = $otr; //el nuevo numero calculado se convierte en num2
      
    }

//con el return, se devuelve la secuencia del array
    return $res;

}


//se guarda en una variable, el llamado de la funcion con el numero de secuencia
//se hace un for each para recorrer el array resultante, mostrande su posicion y valor 
$final = fibonacci(3);
    foreach ($final as $posicion => $valor) {
    echo "Posición $posicion: $valor <br>";
}

?>