<?php
namespace controllers;

class Articles extends \app\Controller{
/**
* Cette méthode affiche la liste des articles
*
* @return void
*/
public function index(){
    // On instancie le modèle "Articles"
    $this->loadModel('Articles');
    // On stocke la liste des articles dans $articles
    $articles = $this->Articles->getAll();
    // On envoie les données à la vue index
    $this->render('index', compact('articles'));
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