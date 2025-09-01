<?php
namespace controllers;

class Inscryption extends \app\Controller{
    /**
* Cette méthode affiche la liste des articles
*
* @return void
*/
public function index() : void{
    // On instancie le modèle "Articles"
    $this->css='<link rel="stylesheet" href="css/side.css" />
    <link rel="stylesheet" href="/css/main.css" /> ';
    // On instancie le modèle "inscryption"
    $this->loadModel('Articles');
    $this->loadModel('Img');
    // On stocke la liste des Contact dans $contact
    $inscryptions = $this->Articles->getCategorie("inscryption");
    foreach($inscryptions as $key=>$inscryption) {
        $inscryptions[$key]['images']=$this->Img->findByArticleId($inscryption['id']);
    }
    // On affiche les données
    // On envoie les données à la vue index
    $this->render('index', compact('inscryptions')); 
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



    public function submit() {
           
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // À adapter selon ta structure de table
        $this->loadModel('Users'); // Ou 'User' si tu as un modèle utilisateur
        $this->Users->insertUser($name, $email, $password);

        // Redirige ou affiche un message de succès
        header('Location: /inscryption?success=1');
        exit;
    }
    // Sinon, afficher le formulaire à nouveau ou une erreur
}
    }
    
?>