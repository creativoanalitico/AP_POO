<?php
/**
 *
 */
class Persona
{
  //atributos
  public $nombre ="Hola soy Víctor ";
  //metodos
  function hablar($mensaje)
  {
  echo $mensaje;
  }

}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2><?php  //Primero crer un objeto e instanciar la clase
    $persona = new Persona();
    echo $persona ->nombre;
    $persona ->hablar("Hola Mundo");//Como es una función va a recibir como un parametro el mensaje?>
     </h2>
  </body>
</html>
