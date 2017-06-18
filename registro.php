<?php
class Persona
{
  //Aributos
  //Variables o array
  public $nombre = array();
  public $apellido= array();
  //Para guardar necesito
  //los datos entonces los pasaré por parametros
  public function guardar($nombre,$apellido)
  {
  //Esta variable se guardará referente a un atributo
  $this->nombre[]=$nombre;
  $this->apellido[]=$apellido;
  }
  public function mostrar()
  {
   for ($i=0; $i < count($this->nombre) ; $i++)
    {  //Como llamar al metodo formato de 3 formas
  self::formato($this->nombre[$i],$this->apellido[$i]);
    }
  }
  public function formato($nombre,$apellido)
  {
    echo " Nombre : " . $nombre
    . " | Apellido : " . $apellido . "<br>";
  }
}
$persona= new Persona();
//$persona->nombre;
$persona->guardar("1 Victor ", "1 Apellido ");
$persona->guardar("2 Victor ", "2 Apellido ");
$persona->mostrar();












 ?>
