<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of StudentePrototipo
 *
 * @author elpen
 */

abstract class StudentePrototipo{    
    public $ind_studio = "";
    
    /*
     * Metodi per inserire/leggere info specifiche per lo studente. 
     * Questi metodi sono definiti per intero.
     */
    public function setIndStudio($ind_studio) {
        $this->ind_studio = $ind_studio;
    }
    
    //protected function getIndStudio(){
    //private function getIndStudio(){
    public function getIndStudio(){
        return $this->ind_studio;
    }
    
    /*
     * Metoto non implementato, per cui dichiarato come "abstract"
     */
    public abstract function getPagBenvenutoStud():string;
}

?>
