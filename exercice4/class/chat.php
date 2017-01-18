<?php

class Chat {
  public $prenom;
  public $age;
  public $couleur;
  public $sexe;
  public $race;


  public function __construct($prenom, $age, $couleur, $sexe,$race){
    $this -> prenom = $prenom;
    $this -> age = $age;
    $this -> couleur = $couleur;
    $this -> sexe = $sexe;
    $this -> race = $race;
  }

  public function getInfos(){
    echo '<table class="table">';
    echo '<tbody>';
    echo '<tr>';
    echo '<td>'. $this -> prenom  .'</td>';
    echo '<td>'. $this -> age .'<td>';
    echo '<td>'. $this -> couleur .'<td>';
    echo '<td>'. $this -> sexe .'<td>';
    echo '<td>'. $this -> race .'<td>';
    echo '</tbody>';
    echo '</table>';
  }
}
