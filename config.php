<?php
try{
    $bdd = new PDO ('mysql:host=localhost;dbname=retro;charset=utf8','retro','test');
}catch(Exception $e){
    die('Erreur'.$e->getMessage());
}