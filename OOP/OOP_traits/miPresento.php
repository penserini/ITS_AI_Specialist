<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPTrait.php to edit this template
 */

/**
 *
 * @author elpen
 */
trait miPresento {
    //put your code here
    public function miPresento($sesso){
        $saluto = parent::getPagBenvenuto(); //Richiama un metodo di Persona
        $ruolo = $this->getPagGender($sesso); //Richiama un metodo in altro TRAIT
        $indirizzo = $this->getIndStudio(); //Richiama un metodo della classe che lo usa
        
        return $saluto.", ".$ruolo.", e frequento l'indirizzo di studi di ".$indirizzo."<br>"; 
    }
}
