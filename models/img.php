<?php
namespace models;
class Img extends \app\Model{
public function __construct()
{
// Nous définissons la table par défaut de ce modèle
$this->table = "img";
// Nous ouvrons la connexion à la base de données
$this->getConnection();
}
/**
* Retourne un article en fonction de son slug
*
* @param string $slug
* @return void
*/
public function findByArticleId(int $articleId) : array|bool{
    $sql = "SELECT * FROM `".$this->table."` WHERE `article_id`=".$articleId;
    $query = $this->_connexion->query($sql);
    return $query->fetch_all(MYSQLI_ASSOC);
    }
    
}
?>
