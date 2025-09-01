<?php
namespace models;
class Articles extends \app\Model{
public function __construct()
{
// Nous définissons la table par défaut de ce modèle
$this->table = "articles";
// Nous ouvrons la connexion à la base de données
$this->getConnection();
}



/**
* Retourne un article en fonction de son slug
* @param string $slug
* @return array|bool
*/
public function findBySlug(string $slug): array|bool {
    $sql = "SELECT * FROM ".$this->table." WHERE `slug`=?";
    $stmt = $this->_connexion->prepare($sql);
    if(!$stmt) {
    \app\Debug::debugDie(array($stmt->errno,$stmt->error)); return false;
    }
    $stmt->bind_param("s", $slug);
    if(!$stmt->execute()) {
    \app\Debug::debugDie(array($stmt->errno,$stmt->error)); return false;
    }
    $result = $stmt->get_result();
    return $result->fetch_assoc();


    
    }

    public function getCategorie($cat){
        $sql =
        "SELECT * FROM `{$this->table}` WHERE `cat`='$cat';";
        $query = $this->_connexion->query($sql);
        return $query->fetch_all(MYSQLI_ASSOC);
        }
      
        
    /**
* Méthode permettant d'afficher un article à partir de son slug
*
* @param string $slug
* @return void
*/
public function lire(string $slug){
    // On instancie le modèle "Article"
    $this->loadModel('Articles');
    // On stocke l'article dans $article
    $articles = $this->Articles->findBySlug($slug);
    // On envoie les données à la vue lire
    $this->render('lire', compact('articles'));
    }
    // Partie BackOffice
/**
* Met à jour un article en fonction de son ID
*
* @param int $id
* @return string
*/
/**
* Insère un nouvel article dans la base de données
*
* @return string
*/
public function create(): string {
    $sql = "INSERT INTO `{$this->table}` (`titre`, `text`, `cat` ) VALUES (?, ?, ?)";
    $stmt = $this->_connexion->prepare($sql);
    if(!$stmt) {
        \app\Debug::debugDie(array($stmt->errno, $stmt->error));
        return "Echec de l'insertion : $sql";
    }
    $stmt->bind_param("sss", $_POST['titre'], $_POST['text'], $_POST['cat']);
    if(!$stmt->execute()) {
        \app\Debug::debugDie(array($stmt->errno, $stmt->error));
        return "Echec de l'insertion : $sql";
    }
    return "Insertion réussie";
}

public function delete(int $id): string {          // en cour 
    $sql = "DELETE FROM `{$this->table}` WHERE `id` = ?";
    $stmt = $this->_connexion->prepare($sql);
    if(!$stmt) {
        \app\Debug::debugDie(array($stmt->errno, $stmt->error));
        return "Echec de la suppression : $sql";
    }
    $stmt->bind_param("i", $id);
    if(!$stmt->execute()) {
        \app\Debug::debugDie(array($stmt->errno, $stmt->error));
        return "Echec de la suppression : $sql";
    }
    return "Suppression réussie";
}


/**
* Met à jour un article en fonction de son ID
*
* @param int $id
* @return string
*/
public function update(int $id): string {
    $_POST['titre'] = $_POST['titre'];
    $_POST['text'] = $_POST['text'];
    $sql = "UPDATE `{$this->table}` SET `titre` = ?, `text` = ?, `cat`= ?
    WHERE `{$this->table}`.`id` = ?;";
    $stmt = $this->_connexion->prepare($sql);
    if(!$stmt) {
        \app\Debug::debugDie(array($stmt->errno,$stmt->error));
        return "Echec de la mise à jour : $sql";
    }
    $stmt->bind_param("sssi", $_POST['titre'], $_POST['text'],
    $_POST['cat'], $id);
    if(!$stmt->execute()) {
        \app\Debug::debugDie(array($stmt->errno,$stmt->error));
        return "Echec de la mise à jour : $sql";
    }
    return "Mise à jour réussie";
}

    /*public function insertUser($name, $email, $password) {
    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $this->_connexion->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $password);
    return $stmt->execute();
}*/
}