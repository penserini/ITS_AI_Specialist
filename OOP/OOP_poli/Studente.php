
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
    private $ind_studio = "";
    private $sesso = "M";
    private $nome = "";     
    private $cognome = "";
    private $eta = "";
    private $interessi = "";    
    //private $saluto = "";
    
    /* Questo costruttore riscrive quello di Persona (OVERRIDING) 
     * e inoltre mostra come gestire costruttori multipli.
     * Si considera la forma seguente:
     * __construct($nome,$cognome,$eta,$interessi,$sesso)
     */
    public function __construct() {
        //si usano due funzioni speciali: "func_num_args()" e "func_get_arg()"
        if(4===func_num_args()){
            parent::setProfile(func_get_arg(0),func_get_arg(1),func_get_arg(2),func_get_arg(3));            
 
        }elseif(5===func_num_args()){
            parent::setProfile(func_get_arg(0),func_get_arg(1),func_get_arg(2),func_get_arg(3)); 
            $this->sesso = func_get_arg(4);             
        }
    }
     
    //metodo per inserire info specifiche per lo studente
    public function setIndStudio($ind_studio) {
        $this->ind_studio = $ind_studio;
    }
        
    public function getPagBenvenutoStud() {
        $saluto_persona = parent::getPagBenvenuto();
        if($this->sesso === "M" || $this->sesso === "m" || $this->sesso === ""){            
            return $saluto_persona.", uno studente che frequenta ".$this->ind_studio;
            
        }elseif($this->sesso === "F" || $this->sesso === "f"){            
            return $saluto_persona.", una studentessa che frequenta ".$this->ind_studio;
        }
    }   
}
?>
