<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'Persona.php';
        //require_once 'Persona.php';
        include 'Studente.php';
        
        $nome1 = "Loris";     
        $cognome1 = "Penserini";
        $eta1 = "50";
        $interessi1 = "DRONI";    
        
        $nome2 = "Mario";     
        $cognome2 = "Rossi";
        $eta2 = "40";
        $interessi2 = "Pesca"; 
        
        //CREO L'OGGETTO "Persona1"
        $Persona1 = new Persona($nome1, $cognome1, $eta1, $interessi1);
        $Persona2 = new Persona($nome2, $cognome2, $eta2, $interessi2);
         
        echo "SALUTO DI PERSONA_1: <br>".$Persona1->getPagBenvenuto();
        echo "<br><br>SALUTO DI PERSONA_2: <br>".$Persona2->getPagBenvenuto();        
        ?>
    </body>
</html>
