<?php
namespace controllers;

class Tableau extends \app\Controller{
    /**
* Cette méthode affiche la liste des articles
*
* @return void
*/
public function index() : void {

    $this->css='<link rel="stylesheet" href="/css/side.css" />
    <link rel="stylesheet" href="/css/tableau.css" />
    <link rel="stylesheet" href="/css/main.css" />
    <script src="/java/tableau.js"></script>';
    // On instancie le modèle "tableau"
    $this->loadModel('Articles');
    $this->loadModel('Img');
    // On stocke la liste des Tableau dans $tableau
    $tableaus = $this->Articles->getCategorie("tableau");
    foreach($tableaus as $key=>$tableau) {
        $tableaus[$key]['images']=$this->Img->findByArticleId($tableau['id']);
    }
    // On affiche les données
    // On envoie les données à la vue index
    $this->render('index', compact('tableaus')); 
    }
    /**
* Méthode permettant d'afficher un article à partir de son slug
*
* @param string $slug
* @return void
*/
public function lire(string $slug) : void{
    // On instancie le modèle "Article"
    $this->loadModel('Articles');
    // On stocke l'article dans $article
    $articles = $this->Articles->findBySlug($slug);
    // On envoie les données à la vue lire
    $this->render('lire', compact('articles'));
    }
    
    }
?>