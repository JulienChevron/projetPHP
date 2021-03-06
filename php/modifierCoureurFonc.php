<?php

        include('formatage.php');

         if(isset($_POST['prenom']) && isset($_POST['nom'])){
            $nom2 = $_POST['nom'];
            $prenom2 = $_POST['prenom'];
            $nom2 = formaterNom($nom2);
            $prenom2 = formaterPrenom($prenom2);
        }
        if (isset($_POST['annee_naiss']) && $_POST['annee_prem']){
            $annee_prem2 = $_POST['annee_prem'];
            $annee_naiss2 = $_POST['annee_naiss'];
        }else {
            $annee_prem2 = '';
            $annee_naiss2 = '';
        }
        if (isset($_POST['code_tdf'])){
            $code_tdf2 = $_POST['code_tdf'];
        }
        if (isset($_POST['ncoureur'])){
            $ncoureur2 = $_POST['ncoureur'];
        }
        if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['code_tdf']) && isset($_POST['ncoureur']) && ( strcmp($nom2,"?") != 0 && strcmp($prenom2,"?") != 0)){

            $nom2 = ApostropheInsert($nom2);
            $prenom2 = ApostropheInsert($prenom2);            
        
            $sql = "UPDATE TDF_COUREUR SET NOM = '" . $nom2 ."' , PRENOM = '" . $prenom2 . "' , CODE_TDF = '" . $code_tdf2 . "' , ANNEE_NAISSANCE = '" . $annee_naiss2 . "' , ANNEE_PREM = '" . $annee_prem2 . "' WHERE N_COUREUR = '" . $ncoureur2 ."'";

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_AUTOCOMMIT, FALSE);
            $conn->beginTransaction();
            try {
                $cur = preparerRequete($conn,$sql);
                $res = majDonneesPreparees($cur);
                $conn->commit();
                echo "Courreur modifié :\n";
            }catch(PDOException $e){
                $conn->rollBack();
                if($e->getCode() == 'HY000')
                    echo "Courreur déjà existant, modification impossible !";
                else
                    echo "Modification du coureur impossible !";
            }
        }else{
            echo "Modification du courreur impossible : Nom et/ou prénom non conforme(s)\n";
        }


?>