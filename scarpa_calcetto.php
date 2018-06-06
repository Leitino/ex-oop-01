<?php
class scarpa_calcetto extends scarpa{
  public $tipoSuola;

  public function isForParquet(){
    if ($this -> tipoSuola == 'liscia')
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
     $this -> prezzo."<br>".
     $this -> tipoSuola."<br>";
  }
}

 ?>
