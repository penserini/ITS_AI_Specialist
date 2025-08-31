
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
class Studente extends Persona {
    public $ind_studio = "";
    
    /*
     * Questa classe NON ha il costruttore, per cui usa quello della superclasse
    public function __construct($nome,$cognome,$eta,$interessi) {
        //inizializzazione
        $this->nome = "xxx"; 
        $this->cognome = "yyy";
        $this->eta = "aaaa";
        $this->interessi = "zzz";     
    }*/
    
    //metodo per inserire info specifiche per lo studente
    public function setIndStudio($ind_studio) {
        $this->ind_studio = $ind_studio;
    }
    
    public function getPagBenvenutoStud() {
        $saluto_persona = $this->getPagBenvenuto();
        return $saluto_persona.", e frequento ".$this->ind_studio;
    }
}
?>
