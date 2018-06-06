<?php
class scarpa {
  public $marca;
  public $colore;
  public $numero;
  public $sezione;
  public $materiale;

  public function isSezioneBambino(){
    if ($this -> sezione == 'b')
      return true;
    else {
      return false;
    }
  }
  public function datiScarpa(){
    return $this -> marca."<br>".
     $this -> colore."<br>".
     $this -> numero."<br>".
     $this -> sezione."<br>".
     $this -> materiale."<br>".
     $this -> prezzo."<br>";
  }
}
 ?>
