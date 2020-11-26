<?php
// var_dump($_POST);
$p = new Acteurs($_POST);
// var_dump($p);
switch ($_GET['mode']) {
    case "ajoutActeur":
        {
            ActeursManager::add($p);
            break;
        }
    case "modifActeur":
        {
            
            ActeursManager::update($p);
            break;
        }
    case "delActeur":
        {
            
            ActeursManager::delete($p);
            break;
        }
}

header("location:index.php?codePage=default");