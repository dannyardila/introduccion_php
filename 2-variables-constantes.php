<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables y constantes</title>
</head>
<body>
    <h1>Variables y constantes</h1>
    <!--Script php-->
    <?php
        //*1. La formas de representar las variables en php es anteponiendo el simbolo $ a la palabra que utilizaremos como variable. Ejemplo:sedad*/

        /*2. Debemos poner atencion a las minusculas y a las mayusculas ya que php reconoce la diferencia entre la dos*/

        /*3. Para que se utilizan las variables?. gracias a ellas podemos realizar operaciones aritmeticas y operaciones concadenas, etc.*/


        /*4. Las variables las utilizamos como y cuando queramos en una misma pagina, ya que no existe limitacion en cuanto a su uso*/

        /*5. Hay que prestar atencion a no provocar errores por utilizar variables por palabras reservadas por el lenguaje. Ejemplo:  $os se genera error, porque es una variable por un numero. Ejemplo:$35var=45 es un error*/

        /* EN php no es nacesario especificar el tipo de variable, pero si debemos cuando utilizar las comillas a la horade definirlas, ya que su uso se indicaria que se esta hablando de una cadena Ejemplo: Scuenta = 7, $nombre = "Danny"*/

        /* Podemos  mostrar las variables en pantalla de varias maneras: una manera de ellas puede ser utilizando la opcion echo(); otra puede ser mediante print();*/

        $a =5;
        $b="7";
        echo "<b><h1>";
        echo($a);
        echo"<br>";
        echo($b);
        echo "</b></h1>";

        // Constantes
        // La forma de definir una constante es mediante la funcion define
        //Sintaxis:define("nombre_variable, "valor_variable")

        define("capital_colombia"," Bogota");
        define("habitantes", 7000000);


    ?>

  
   
</body>
</html>