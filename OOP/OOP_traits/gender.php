<?php
//namespace \xampp\htdocs\OOP_Traits;
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPTrait.php to edit this template
 */

/**
 *
 * @author elpen
 */
trait gender {
    
    public function getPagGender($sesso) {             
        if($sesso === "M" || $sesso === "m" || $sesso === ""){            
            return "sono uno studente";
            
        }elseif($sesso === "F" || $sesso === "f"){            
            return "sono una studentessa";
        }      
    }       
}
?>
