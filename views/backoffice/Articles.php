<?php
var_dump($bo); 
$msg = $bo['msg']; unset($bo['msg']); $articles = $bo;?>
<div class="alert"><?= $msg ?></div>
<form action="/backoffice" method="post">
<input type="submit" name="changer" value="Changer de table">
</form>
<form class="d-inline-block" method="POST" action="/backoffice/create">
<fieldset>
<legend>Créer un nouvel article</legend>
<label for="titre">Titre</label>
<input type="text" name="titre" required/>
<label for="text">text</label>
<textarea name="text" required></textarea>
<label for="cat">cat</label>
<input name="cat" required></input>


</select>
<input type="submit" name="maj" value="Créer"/>
</fieldset>

</form>
<?php foreach($articles as $item): ?>
<div>
<form class="d-inline-block" method="POST" action="/backoffice/update/<?= $item['id'] ?>">
<fieldset>
<legend>Modifier l'article "<?= $item['titre'] ?>"</legend>
<label for="titre">Titre&nbsp;:</label>
<input type="text" name="titre" value="<?= $item['titre'] ?>"/>
<label for="text">text&nbsp;:</label>
<textarea name="text"><?= $item['text'] ?></textarea>
<label for="cat">cat&nbsp;:</label>
<input type="text" name="cat" value="<?= $item['cat'] ?>">

</select>
<input type="submit" name="maj" value="Mettre à jour"/>
</form>
<a href="/backoffice/delete/<?= $item['id'] ?>"><button>Supprimer</button></a><br/>
</div>
<?php endforeach ?>
