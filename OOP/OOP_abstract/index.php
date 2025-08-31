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
            include 'StudentePrototipo.php';
            include 'Studente.php';
                                 
            $nome = "Loris";     
            $cognome = "Penserini";
            $eta = "50";
            $interessi = "DRONI";    

            /*
             * CREO L'OGGETTO "Studente1" 
             */            
            $Studente1 = new Studente($nome, $cognome, $eta, $interessi);
            $Studente1->setIndStudio("Sistemi Informativi Aziendali");
            
            echo "<br><br>SALUTO DI STUDENTE_1: <br>".$Studente1->getPagBenvenutoStud();
        ?>
    </body>
</html>
