<?php
class scarpa_calcio extends scarpa {
  public $numTacchetti;
  public $materialeTacchetti;

  public function datiScarpa(){
    return $this -> marca."<br>".
     $this -> colore."<br>".
     $this -> numero."<br>".
     $this -> sezione."<br>".
     $this -> materiale."<br>".
     $this -> prezzo."<br>".
     $this -> numTacchetti."<br>".
     $this -> materialeTacchetti."<br>";
  }
}
 ?>
