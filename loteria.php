<?php
/**
 *
 */
class Loteria
{
  //Atributos
  public $numero;
  public $intentos;
  public $resultado = true;

  public function __construct($numero,$intentos) //Siempre es Publico
  {//Este metodo se inicia al instanciar la clase
    //Modificar atributos asignando valores
    $this->numero = $numero;
    $this->intentos=$intentos;

  }

  public function sortear()
  {
  $minimo = $this->numero / 2;

  $maximo = $this->numero * 2;

  for ($i=0; $i < $this->intentos; $i++) {
    $int = rand($minimo,$maximo);
    self::intentos($int);
  }

  }

  public function intentos($int)
  {
      if ($int == $this->numero) {
  echo "<b>" . $int . " == " . $this->numero ."</b><br>";
     $this->resultado=true;

            }
      else{
  echo $int . " != " . $this->numero . "<br>";
            }
  }



    public function __destruct()
    {
      if ($this->resultado) {
        echo "Felicitaciones has acertado en : "
         . $this->intentos. " intentos ";
      }else{
        echo "Que lastima No has acertado en : "
        . $this->intentos . " intentos ";
      }
    }

}
$loteria = new Loteria(10,10);
//El metodo constructor esta pidiendo dos parametros
$loteria->sortear();
?>
