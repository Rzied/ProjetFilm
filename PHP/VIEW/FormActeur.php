<?php
$mode = $_GET['mode'];

switch ($mode){
case "ajout" :
    {
<<<<<<< HEAD
        echo '<form action="index.php?CodePagePage=actionActeur&mode=ajoutActeur" method="POST">';
=======
        echo '<form action="index.php?codePage=actionActeur&mode=ajoutActeur" method="POST">';
>>>>>>> 06708fde12bfcadeb6f238562d9e095dbe58bd9d
        break;
    }
case "edit" :
    {
        echo '<form method="POST" >';
        break;
    }
case "modif" :
    {
<<<<<<< HEAD
        echo '<form action="index.php?CodePage=actionActeur&mode=modifActeur" method="POST">';
=======
        echo '<form action="index.php?codePage=actionActeur&mode=modifActeur" method="POST">';
>>>>>>> 06708fde12bfcadeb6f238562d9e095dbe58bd9d
    break;
    }
case "delete" :
    {
<<<<<<< HEAD
        echo '<form action="index.php?CodePage=actionActeur&mode=delActeur" method="POST">';
=======
        echo '<form action="index.php?codePage=actionActeur&mode=delActeur" method="POST">';
>>>>>>> 06708fde12bfcadeb6f238562d9e095dbe58bd9d
    break;
    }

}

if (isset($_GET['id']))
{
$choix = ActeursManager::findById($_GET['id']);
}
?>


    <input name= "idActeur" value="<?php if($mode != "ajout") echo $choix->getIdActeur(); ?>" type= "hidden">
    <div>
        <label for="nomActeur">Nom : </label>
        <input name="nomActeur" <?php if($mode != "ajout") echo 'value= "'.$choix->getNomActeur().'"';if($mode=="edit" || $mode=="delete") echo '" disabled'; ?>/>
    </div>
    <div>
        <label for="prenomActeur">Prenom : </label>
        <input name="prenomActeur" <?php if($mode != "ajout") echo 'value= "'.$choix->getPrenomActeur().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled'; ?>/>
    </div>
    <div>
        <label for="origineActeur">E mail : </label>
        <input name="origineActeur" <?php if($mode != "ajout") echo 'value= "'. $choix->getOrigineActeur().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled' ; ?>/>
    </div>
    <div>
        <label for="dateDeNaissanceActeur">Mot de passe : </label>
        <input type="date" name="dateDeNaissanceActeur" <?php if($mode != "ajout") echo 'value= "'. $choix->getDateDeNaissanceActeur().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled' ; ?>/>
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
    <button><a href="index.php?CodePage=listeActeurs">Annuler</a></button>
</div>

</form>
