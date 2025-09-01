<form method="post" action="<?= $_SERVER['REQUEST_URI']?>">
<input type="submit" value="Se déconnecter" name="deco"></td>
</form>
<form method="post" action='<?= $_SERVER['REQUEST_URI']?>'>
<input type="radio" name='modele' value='Carousel' checked>Carrousel<br/>
<input type="radio" name='modele' value='Articles'>articles<br/>
<input type="radio" name='modele' value='manga'>manga<br/>
<input type="submit" name='choisir' value="Choisir cette table">
</form>