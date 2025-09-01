<?php
namespace controllers;
class Main extends \app\Controller{
/**
* Cette méthode affiche la page principale
*
* @return void
*/
public function index() : void{
// On garde la structure avec une variable $main pour anticiper un éventuel besoin
$main = array();
$this->css='<link rel="stylesheet" href="/css/main.css" /> ';
// On envoie les données à la vue index
$this->render('index', compact('main'));
}
}
?>

