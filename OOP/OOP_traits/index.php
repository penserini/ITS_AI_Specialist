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
        $Studente1->setIndStudio("Informatica Avanzata");
        
        /* STUDENTESSA (femmina) 
         */
        $nome2 = "Maria";     
        $cognome2 = "Bianchi";
        $eta2 = "25";
        $interessi2 = "Pallavolo";             
        //OVERLOADING di __construct() di Studente
        $Studentessa1 = new Studente($nome2, $cognome2, $eta2, $interessi2, "F");
        $Studentessa1->setIndStudio("Sistemi Informativi Aziendali");         
        /*
        echo "Sfruttiamo il TRAIT 'gender.php': <br>";
        echo $Studente1->getPagGender("F")."<br>";
        echo $Studente1->getPagGender("m")."<br>";
        
        echo "<br><br>Utilizzo della logica precedente: <br>";
        echo "SALUTO DI STUDENTE_1: <br>".$Studente1->getPagBenvenutoStud();
        echo "<br><br>SALUTO DI STUDENTESSA_1: <br>".$Studentessa1->getPagBenvenutoStud();  
        */
        echo "Sfruttiamo i TRAIT 'gender.php' e 'miPresento.php': <br><br>";
        echo $Studente1->miPresento("m")."<br>";
        echo $Studentessa1->miPresento("F")."<br>";
        ?>
    </body>
</html>
