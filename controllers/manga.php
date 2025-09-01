<?php
namespace controllers;

class Manga extends \app\Controller{

    /**
* Cette méthode affiche la liste des articles
*
* @return void
*/
public function index() :void {
    // mise en place css 
    $this->css='<link rel="stylesheet" href="css/side.css" />
<link rel="stylesheet" href="/css/main.css" /> ';
    // On instancie le modèle "manga"
    $this->loadModel('Articles');
    $this->loadModel('Img');
    // On stocke la liste des Manga dans $manga
    $mangas = $this->Articles->getCategorie("manga");
    foreach($mangas as $key=>$manga) {
        $mangas[$key]['images']=$this->Img->findByArticleId($manga['id']);
    }
    // On affiche les données
    // On envoie les données à la vue index
    $this->render('index', compact('mangas')); 
    }
    /**
* Méthode permettant d'afficher un article à partir de son slug
*
* @param string $slug
* @return void
*/
public function lire(string $slug) :void{
    // On instancie le modèle "Article"
    $this->loadModel('Articles');
    // On stocke l'article dans $article
    $articles = $this->Articles->findBySlug($slug);
    // On envoie les données à la vue lire
    $this->render('lire', compact('articles'));
    }
    
    }
?>