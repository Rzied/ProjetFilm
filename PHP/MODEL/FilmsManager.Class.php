<?php

class FilmsManager
{
    public static function add(Films $obj)
	{
        $db=DbConnect::getDb();
        $q=$db->prepare("INSERT INTO Categories (LibelleCategorie) VALUES (:LibelleCategorie)");
}