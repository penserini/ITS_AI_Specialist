<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Studente
 *
 * @author elpen
 */
class Studente extends StudentePrototipo {
 
    public $nome = "";     
    public $cognome = "";
    public $eta = "";
    public $interessi = "";    
    public $saluto = "";
    
    //costruttore
    public function __construct($nome,$cognome,$eta,$interessi) {
        //inizializzazione
        $this->nome = $nome; 
        $this->cognome = $cognome;
        $this->eta = $eta;
        $this->interessi = $interessi;
        $this->saluto = "Buongiorno sono ".$nome." ".$cognome;
    }
    
    public function getPagBenvenutoStud():string{
        return $this->saluto.", uno studente, e frequento ".parent::getIndStudio();
    }
}
?>
