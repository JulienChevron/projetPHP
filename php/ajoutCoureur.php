<?php
    $pwd='../';
    include("includes/header.php");

    if(isset($_POST['Envoyer'])){
        include('ajoutCoureurFonc.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <title>Titre</title>
    </head>

<body>
<!-- Formulaire d'ajout d'un coureur -->
<div id="contenu" >
    <h2>Ajouter un coureur</h2>
    <form method="post" name="form" id="form" onsubmit="return valider(this);">
        <label class="form_col" for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" value="<?php if(isset($savePrenom)) echo $savePrenom; ?>"/></br>
        <label class="form_col" for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" value="<?php if(isset($saveNom)) echo $saveNom; ?>"/></br>
        <label class="form_col" for="annee_naiss">Année de naissance :</label>
        <input type="number" name="annee_naiss" id="annee_naiss" min="1900" max="1998" value="<?php if(isset($saveAnnee_naiss)) echo $saveAnnee_naiss; ?>"/></br>
        <label class="form_col" for="annee_prem">Année de premier tour :</label>
        <input type="number" name="annee_prem" id="annee_prem" min="1900" max="2016" value="<?php if(isset($saveAnnee_prem)) echo $saveAnnee_prem; ?>"/></br>
        <label class="form_col" for="code_tdf">Nationalité :</label>
        <!-- Récupération des code TDF dans la fonction selectCodeTdf() -->
            <select name="code_tdf" id="code_tdf">
                <?php 
                    selectCodetdf($conn);
                ?>
            </select>
            </br></br></br>
        <input type="submit" name="Envoyer" id="Envoyer"/>
    </form>

    <script type="text/javascript" src="../js/verifFormulaire.js"></script>
</div>

<?php
    include("includes/footer.php");
?>

</body>
</html>