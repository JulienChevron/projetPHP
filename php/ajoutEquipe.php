<?php
    $pwd='../';
    include("includes/header.php");

    if(isset($_POST['Envoyer'])){
            include('ajoutEquipeFonc.php');
        }
?>
 <div id="contenu" >
 
    <h2>Ajouter une équipe</h2>
    <form method="post" name="form" id="form" onsubmit="return valider(this);">
        <label class="form_col" for="annee">ANNEE :</label>
        <input type="number" name="annee" id="annee" min="1900" value="<?php if(isset($saveAnnee)) echo $saveAnnee; ?>"/></br>
        <label class="form_col" for="n_sponsor">Numéro du sponsor :</label>
        <input type="number" name="n_sponsor" id="n_sponsor" value="<?php if(isset($saveNSponsor)) echo $saveNSponsor; ?>"/></br>
        <label class="form_col" for="annee_disparition">Numéro du directeur sportif n°1 :</label>
        <input type="number" name="n_pre_directeur" id="n_pre_directeur" value="<?php if(isset($saveNPreDirecteur)) echo $saveNPreDirecteur; ?>"/></br>
        <label class="form_col" for="n_co_directeur">Numéro du directeur sportif n°2 :</label>
        <input type="number" name="n_co_directeur" id="n_co_directeur" value="<?php if(isset($saveNCoDirecteur)) echo $saveNCoDirecteur; ?>"/></br>
            </br>
           </br></br>
        <input type="submit" name="Envoyer" id="Envoyer"/>
    </form>
    <script type="text/javascript" src="../js/verifFormulaire.js"></script
</div>

<?php
    include("includes/footer.php");
?>