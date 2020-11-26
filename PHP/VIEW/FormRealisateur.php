<?php
$mode = $_GET['mode'];

switch ($mode){
case "ajout" :
    {
        echo '<form action="index.php?CodePage=actionsRealisateurs&mode=ajoutRealisateur" method="POST">';
        break;
    }
case "edit" :
    {
        echo '<form method="POST" >';
        break;
    }
case "modif" :
    {
        echo '<form action="index.php?CodePage=actionsRealisateurs&mode=modifRealisateur" method="POST">';
    break;
    }
case "delete" :
    {
        echo '<form action="index.php?CodePage=actionsRealisateurs&mode=delRealisateur" method="POST">';
    break;
    }

}

if (isset($_GET['id']))
{
$choix = RealisateursManager::findById($_GET['id']);
}
?>


    <input name= "idRealisateur" value="<?php if($mode != "ajout") echo $choix->getIdRealisateur(); ?>" type= "hidden">
    <div>
        <label for="nomRealisateur">Nom : </label>
        <input name="nomRealisateur" <?php if($mode != "ajout") echo 'value= "'.$choix->getNomRealisateur().'"';if($mode=="edit" || $mode=="delete") echo '" disabled'; ?>/>
    </div>
    <div>
        <label for="prenomRealisateur">Prenom : </label>
        <input name="prenomRealisateur" <?php if($mode != "ajout") echo 'value= "'.$choix->getPrenomRealisateur().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled'; ?>/>
    </div>
    <div>
        <label for="paysOrigineRealisateur">E mail : </label>
        <input name="paysOrigineRealisateur" <?php if($mode != "ajout") echo 'value= "'. $choix->getPaysOrigineRealisateur().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled' ; ?>/>
    </div>
    <div>
        <label for="dateDeNaissanceRealisateur">Mot de passe : </label>
        <input type="date" name="dateDeNaissanceRealisateur" <?php if($mode != "ajout") echo 'value= "'. $choix->getDateDeNaissanceRealisateur().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled' ; ?>/>
    </div>
<?php 
// en fonction du mode, on affiche les boutons utiles
	switch ($mode) {
		case "ajout":
			{
                echo '<div><button type="submit" value="Ajouter">Ajouter</button>'; 
                break;
			}
		case "modif":
			{
                echo '<div><button type="submit" value="Modifier">Modifier</button>'; 
                break;
			}
		case "delete":
			{
                echo '<div><button type="submit" value="Supprimer">Effacer</button>';
                break;
			}
        
        default:
        {
            echo '<div>';
        }
    }
// dans tous les cas, on met le bouton annuler
    ?>
    <button><a href="index.php?CodePage=listeRealisateurs">Annuler</a></button>
</div>

</form>