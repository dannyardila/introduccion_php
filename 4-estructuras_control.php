<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de control</title>
</head>
<body>
    <h1>Estructuras de control</h1>
    <?php
    //if, if else
    echo"<h1>if</h1>";

    // Ejemplo 1
    $color="rojo";
    if($color="rojo")
    {
        print("efectivamente el color es rojo");
    }
    echo"<br>";
    //Ejemplo
    $x =10;
    $y=15;
    if($x==$y)
    {
        print("x e y son iguales");

    }
    elseif($x>$y)
    {
        print("x es mayor que y");

    }
    
    elseif($x<$y)
    {
        print("x es menor que y");

    }

    echo"<br>";
    echo"<h1>while</h1>";

    //while
    // Indica que mientras no se cumpla una determinada condicion, no se saldra del bucle y no saltara a la siguiente linea de codigo

    // Ejemplo 
    $x =10;
    while(--$x)
    {
        echo"<big>";
        echo"<b>";
        print("Numero:".$x);
        echo"<br>";
        echo"<hr>";

    }

    // do-while
    //for

    // sera utilizando para ehjecutar un bucle un determinado numero de veces hasta que se cumpla una condicion.

    //ejemplo
    echo"<br>";
    echo"<h1>for</h1>";


    for($x=5;$y=10; $x++)
    {
        print("Numero:".$x. "<br>");
    }

    //require
    //Sirve para incluir archivos en nuestras paginas y solo era necesario hacer referencia 
    // a este archivo con la instruccion requiere, se usa principalmente para definir variables.
    //y estas estaran listas una vez hagamos una llamada al archivo donde este guardado.
    echo"<br>";
    echo"<h1>require</h1>";

    //incluide
     //include 
    //El funcionamiento es igual que el de la instrucción requiere (), con la diferencia de que 
    //puede procesar el codigo tantas veces como lo llamemos a esa pagina externa.
    echo "<br>";
    echo "<h1>include</h1>";
    include("variables.php");
    echo "<br>";
    print("$x"."$z"."$y");

    echo"<br>";
    echo"<h1>include</h1>";

    //switch
    // Se utiliza para comprobar un dato entre varias posiblidades
    // ejemplo

    echo"<br>";
    echo"<h1>Switch</h1>";

    $color = "negro";
    switch($color)
    {
        case"blanco":
            $sector = "claro";
            break;
        case "naranja":
            $sector = "normal";
            break;
        
        case "negro":
                $sector = "oscuro";
                break;
    

    }
    print($sector);

    /*if:se utiliza para ejecutar bloques de código condicionalmente, es decir, dependiendo de una condición específica. Permite tomar decisiones en función del resultado de una expresión booleana. */

    /*if (condición1) {
        // Bloque de código a ejecutar si la condición1 es verdadera
    } elseif (condición2) {
        // Bloque de código a ejecutar si la condición2 es verdadera
    } else {
        // Bloque de código a ejecutar si todas las condiciones anteriores son falsas
    }*/

    /* if-else: Se utiliza para tomar decisiones en función de una condición específica. Permite ejecutar diferentes bloques de código dependiendo del resultado de la evaluación de una expresión booleana.
    $edad = 25;

    if ($edad >= 18) {
    echo "Eres mayor de edad";
    } else {
    echo "Eres menor de edad";
    }*/

    /*do-while:Se utiliza para ejecutar repetidamente un bloque de código al menos una vez, y luego repetirlo mientras se cumpla una condición específica. A diferencia del bucle "while", que evalúa la condición antes de ejecutar el bloque de código, el bucle "do-while" primero ejecuta el bloque de código y luego verifica la condición.

    $contador = 1;

    do {
        echo "El contador es: " . $contador . "<br>";
        $contador++;
    } while ($contador <= 5);

    /*for:Se utiliza para ejecutar un bloque de código un número específico de veces. Es especialmente útil cuando se conoce la cantidad exacta de repeticiones que se desea realizar.

    for ($i = 1; $i <= 5; $i++) {
    echo "El valor de i es: " . $i . "<br>";
}
    /* while: se utiliza para ejecutar repetidamente un bloque de código mientras se cumpla una condición específica. Básicamente, el bloque de código se repite mientras la expresión de la condición sea evaluada como verdadera.
    $contador = 1;

    while ($contador <= 5) {
    echo "El contador es: " . $contador . "<br>";
    $contador++;
    }*/


    /*require:se utiliza para incluir y ejecutar un archivo en el punto en el que se realiza la llamada. Permite importar y utilizar el contenido de otro archivo PHP en el archivo actual. La principal diferencia entre require y include es que, si el archivo incluido no se encuentra, require genera un error fatal y detiene la ejecución del programa, mientras que include solo emite una advertencia y continúa ejecutando el programa.

    require 'funciones.php';

    // Aquí podemos utilizar las funciones definidas en "funciones.php"
    funcion1();
    funcion2();*/

    /* include: Se utiliza para incluir y ejecutar un archivo en el punto en el que se realiza la llamada. Al igual que require, include permite importar y utilizar el contenido de otro archivo PHP en el archivo actual. La diferencia principal entre include y require radica en el manejo de errores cuando el archivo incluido no se encuentra.

    include 'funciones.php';

    // Aquí podemos utilizar las funciones definidas en "funciones.php"
    funcion1();
    funcion2();*/

    /* switch: " Se utiliza para tomar decisiones basadas en múltiples casos posibles de una expresión. Es una alternativa más legible y concisa a una serie de declaraciones "if-else" anidadas cuando se necesitan realizar diferentes acciones según el valor de una variable.
    $dia = "jueves";

    switch ($dia) {
    case "lunes":
        echo "Hoy es lunes";
        break;
    case "martes":
        echo "Hoy es martes";
        break;
    case "miércoles":
        echo "Hoy es miércoles";
        break;
    case "jueves":
        echo "Hoy es jueves";
        break;
    case "viernes":
        echo "Hoy es viernes";
        break;
    default:
        echo "Hoy no es ningún día de la semana";
        }*/






    ?>
 
    

</body>
</html>
