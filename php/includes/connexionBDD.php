<?php
//Fichier permettant de se connecter à la BDD 
//Le fichier est inclu dans le header
    $session = "ETU2_51";
    $mdp = "ETU2_51";
    $instance = "oci:dbname=info;charset=WE8ISO8859P15";
    $conn = ConnecterPDO($instance,$session,$mdp);
?>