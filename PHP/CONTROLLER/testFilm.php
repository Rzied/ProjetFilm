<?php
function ChargerClasse($classe)
{
    if (file_exists("./" . $classe . ".Class.php"))
    {
        require "./" . $classe . ".Class.php";
    }
    if (file_exists("../MODEL/" . $classe . ".Class.php"))
    {	
        require "../MODEL/" . $classe . ".Class.php";
    }
}
spl_autoload_register("ChargerClasse");

//on active la connexion à la base de données
DbConnect::init();

//***************   Test Film  *****************/

/* Test Manager */

// // on teste la recherche par ID
// echo 'recherche id = 1' . '<br>';
// $p = FilmsManager::findById(1);
// var_dump($p);

// // on teste l'ajout
// echo "ajout d'un produit" . '<br>';
// $pNew = new Produits(["libelleProduit" => "cahier", "prix" => 5, "dateDePeremption" => '2020-12-31']);
// ProduitsManager::add($pNew);

// //on affiche la liste des produits
// echo "Liste des articles" . '<br>';
// $tableau = ProduitsManager::getList();
// foreach ($tableau as $unProduit)
// {
//     echo $unProduit->toString() . '<br>';
// }

// // on teste la mise à jour
// echo "on met à jour l'id 1" . '<br>';
// $p->setLibelleProduit($p->getLibelleProduit() . 'sss');
// ProduitsManager::update($p);
// $pRecharge = ProduitsManager::findById(1);
// var_dump($pRecharge);

// // on teste la suppression
// echo "on supprime un article" . '<br>';
// $pSuppr = ProduitsManager::findById(3);
// ProduitsManager::delete($pSuppr);

// //on affiche la liste des produits
// echo "liste des articles" . '<br>';
// $tableau = ProduitsManager::getList();
// foreach ($tableau as $unProduit)
// {
//     echo $unProduit->toString() . '<br>';
// }


