<?php
namespace controllers;

class Dessin extends \app\Controller{
    /**
* Cette méthode affiche la liste des articles
*
* @return void
*/
public function __construct(){ 
    $this->css = "/css/main.css";

}
public function index(){
    $this->css='<link rel="stylesheet" href="css/side.css" />
    <link rel="stylesheet" href="/css/main.css" /> ';
    // On instancie le modèle "dessin"
    $this->loadModel('Articles');
    $this->loadModel('Img');
    // On stocke la liste des Dessin dans $dessin
    $dessins = $this->Articles->getCategorie("dessin");
    foreach($dessins as $key=>$dessin) {
        $dessins[$key]['images']=$this->Img->findByArticleId($dessin['id']);
    }
    // On affiche les données
    // On envoie les données à la vue index
    $this->render('index', compact('dessins')); 
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