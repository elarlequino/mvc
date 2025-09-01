<?php
namespace controllers;

class Jeuxplat extends \app\Controller{
    /**
* Cette méthode affiche la liste des articles
*
* @return void
*/
public function index() : void {
    // mise en place css 
    $this->css='<link rel="stylesheet" href="css/side.css" />
    <link rel="stylesheet" href="/css/main.css" /> ';
    // On instancie le modèle "jeuxplat"
    $this->loadModel('Articles');
    $this->loadModel('Img');
    // On stocke la liste des Jeuxplat dans $jeuxplat
    $jeuxplats = $this->Articles->getCategorie("jeuxplat");
    foreach($jeuxplats as $key=>$jeuxplat) {
        $jeuxplats[$key]['images']=$this->Img->findByArticleId($jeuxplat['id']);
    }
    // On affiche les données
    // On envoie les données à la vue index
    $this->render('index', compact('jeuxplats')); 
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