<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h1>Operadores</h1>
    
    <?php

        // Operadores aritmeticos:son símbolos especiales que se utilizan para realizar operaciones matemáticas en variables y valores numéricos. Estos operadores permiten realizar acciones como sumar, restar, multiplicar, dividir y obtener el residuo de una división.Ejemplo//

        $num1 = 1;
        echo ("x = ".$num1."<br>");
        $num2 = 5;
        echo ("x = ".$num2."<br>");
        $num3 = 4;
        echo ("x = ".$num3."<br>");

        $suma = $num1 + $num2;
        echo ("suma = ".$suma."<br>");
        $resta = $num1 - $num3;
        echo ("resta = ".$resta."<br>");
        $multiplicacion = $suma*$resta;
        echo ("multiplicacion = ".$multiplicacion."<br>");
        $final = $multiplicacion++;
        echo("final =".$final."<br>");



        //Suma (+): Se utiliza para sumar dos valores.
        //Ejemplo: $a + $b//

        // suma (+): Se utiliza para sumar dos valores.

        /*$a = 5;
        $b = 100;
        $resultado = $a + $b; // El valor de $resultado será 105*/

        // Resta (-): Se utiliza para restar un valor de otro.
        //Ejemplo: $a - $b//

        /*$a = 5;
        $b = 5;
        $resultado = $a * $b; // El valor de $resultado será 25*/

        //Multiplicación (*): Se utiliza para multiplicar dos valores.
        /*Ejemplo: $a * $b*/

        //División (/): Se utiliza para dividir un valor entre otro.
        //Ejemplo: $a / $b

        //Módulo (%): Se utiliza para obtener el residuo de una división.
        //Ejemplo: $a % $b//

        //Exponenciación (**): Se utiliza para elevar un número a una potencia.
         //Ejemplo: $a ** $b//



    // Operadores de comparacion:Son una forma concisa de combinar una operación y una asignación en una sola expresión. Estos operadores realizan una operación aritmética o de bits y, a continuación, asignan el resultado a la misma variable.Ejemplo
    //Operador de combinación de suma (+=): Suma un valor a una variable y asigna el resultado a la misma variable.

    $x = 5;
    $y = 5;
    echo ($x == $$y);
    echo ($x <= $$y);

    //Operador de combinación de suma (+=): Suma un valor a una variable y asigna el resultado a la misma variable.
     // Ejemplo: $a += $b; es equivalente a $a = $a + $b;//

    //Operador de combinación de resta (-=): Resta un valor de una variable y asigna el resultado a la misma variable.
    //Ejemplo: $a -= $b; es equivalente a $a = $a - $b;//

    //Operador de combinación de multiplicación (*=): Multiplica una variable por un valor y asigna el resultado a la misma variable.
    //Ejemplo: $a *= $b; es equivalente a $a = $a * $b;//

    //Operador de combinación de división (/=): Divide una variable por un valor y asigna el resultado a la misma variable.
    //jemplo: $a /= $b; es equivalente a $a = $a / $b;//

    //Operador de combinación de módulo (%=): Calcula el módulo de una variable con un valor y asigna el resultado a la misma variable.
    //Ejemplo: $a %= $b; es equivalente a $a = $a % $b;//

    //Operador de combinación de concatenación (.=): Concatena una cadena de texto a una variable y asigna el resultado a la misma variable.
    //Ejemplo: $a .= $b; es equivalente a $a = $a . $b;//

    //operadores logicos:Se utilizan para combinar expresiones lógicas y evaluar condiciones booleanas. Estos operadores permiten realizar comparaciones y tomar decisiones basadas en el resultado de esas comparaciones. Los operadores lógicos disponibles en PHP son los siguientes://

    
    $x = 5;
    $y = 5;

    if(($x==4) && ($y==5));
    {
        print("estas en lo correcto");
    }
    echo"<br>";
    if(($x==4) OR ($y==3));
    {
        print("la segunda estas en lo correcto");
    }

    //Operador lógico "Y" (&& o and): Retorna true si todas las expresiones   evaluadas son verdaderas.//

    //Ejemplo//:

    //$a= true;
    //$b = false;//
    //$resultado = $a && $b; //

    // El valor de $resultado será false
    //Operador lógico "O" (|| o or): Retorna true si al menos una de las expresiones evaluadas es verdadera.

    //Ejemplo://

    //$a = true;
    //resultado = $a || $b; //
    // El valor de $resultado será true
    //Operador lógico "NO" (! o not): Retorna true si la expresión evaluada es falsa y viceversa (invierte el valor booleano).//
    //Ejemplo://

    //$a = true;//
    //$resultado = !$a; // El valor de $resultado será false//

    // Operadores de union de cadenas: Se utiliza para concatenar o unir cadenas de texto. Permite combinar dos o más cadenas en una sola cadena más larga. El operador de unión de cadenas se utiliza comúnmente cuando se necesita combinar texto o variables de cadena en una expresión.

    echo "<h1> Operadores de union de cadenas</h1><br>";




    //$nombre = "Juan";
    //$apellido = "Pérez";//
    //$nombreCompleto = $nombre . " " . $apellido;//
    //echo $nombreCompleto; // Imprimirá "Juan Pérez"//

    //Asignación compuesta con concatenación (".="): Este operador combina la concatenación y la asignación en una sola expresión. Se utiliza para agregar una cadena al final de otra, actualizando el valor de la variable original.//

    //$mensaje = "Hola";//
    //$mensaje .= " mundo";
    //echo $mensaje; // Imprime "Hola mundo"

    //Función de concatenación (concat()): Además del operador de unión de cadenas, PHP también proporciona una función llamada concat() que se puede utilizar para concatenar múltiples cadenas.//

    //$nombre = "Juan";//

    //$apellido = "Pérez";//
    //$nombreCompleto = concat($nombre, " ", $apellido);//
    //echo $nombreCompleto; // Imprime "Juan Pérez"//

    //Uso de comillas dobles ("") o heredoc: Cuando se utiliza un string dentro de comillas dobles, las variables dentro del string se expanden automáticamente. Esto permite la concatenación implícita con el uso de las variables directamente dentro del string.//

    /*$nombre = "Juan";
    $apellido = "Pérez";
    $nombreCompleto = "$nombre $apellido";
    echo $nombreCompleto; // Imprime "Juan Pérez"*/











?>

   

  </script-->
</body>
</html>