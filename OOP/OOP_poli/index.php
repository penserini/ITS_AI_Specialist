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
        
        /* STUDENTE (maschio)
         */
        $nome1 = "Loris";     
        $cognome1 = "Penserini";
        $eta1 = "50";
        $interessi1 = "DRONI";        
        //OVERLOADING di __construct() di Studente
        $Studente1 = new Studente($nome1, $cognome1, $eta1, $interessi1);
        $Studente1->setIndStudio("Sistemi Informativi Aziendali");
        
        /* STUDENTESSA (femmina) 
         */
        $nome2 = "Maria";     
        $cognome2 = "Bianchi";
        $eta2 = "25";
        $interessi2 = "Pallavolo";             
        //OVERLOADING di __construct() di Studente
        $Studentessa1 = new Studente($nome2, $cognome2, $eta2, $interessi2, "F");
        $Studentessa1->setIndStudio("Sistemi Informativi Aziendali");   
 
        echo "<br><br>SALUTO DI STUDENTE_1: <br>".$Studente1->getPagBenvenutoStud();
        echo "<br><br>SALUTO DI STUDENTESSA_1: <br>".$Studentessa1->getPagBenvenutoStud();        
        ?>
    </body>
</html>
