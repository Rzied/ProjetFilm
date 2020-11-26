<?php
function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");


// $obj = new Realisations(["idRealisation" => 1, "idRealisateur" => "Marvel", "paysStudio" => "USA", "fondateurStudio" => "Rjeb Zied", "creationStudio" => new DateTime("2012-09-01")]);
// var_dump($t);

// echo $t->toString();
