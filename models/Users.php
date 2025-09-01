<?php
namespace models;
class Users extends \app\Model{
public function __construct()
{
// Nous définissons la table par défaut de ce modèle
$this->table = "users";
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

    // Partie BackOffice
/**
* Met à jour un article en fonction de son ID
*
* @param int $id
* @return string
*/
public function update(int $id): string {
    $_POST['titre'] = $_POST['titre'];
    $_POST['contenu'] = $_POST['contenu'];
    $sql = "UPDATE `{$this->table}` SET `titre` = ?, `contenu` = ?, `slug` = ?, `article_categorie`= ?
    WHERE `{$this->table}`.`id_article` = ?;";
    $stmt = $this->_connexion->prepare($sql);
    if(!$stmt) {
    \app\Debug::debugDie(array($stmt->errno,$stmt->error));
    return "Echec de la mise à jour : $sql";
    }
    $stmt->bind_param("sssii", $_POST['titre'], $_POST['contenu'], $_POST['slug'],
    $_POST['article_categorie'], $id);
    if(!$stmt->execute()) {
    \app\Debug::debugDie(array($stmt->errno,$stmt->error));
    return "Echec de la mise à jour : $sql";
    }
    return "Mise à jour réussie";
    }
    

    public function insertUser($name, $email, $password) {
    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $this->_connexion->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $password);
    return $stmt->execute();
}
}