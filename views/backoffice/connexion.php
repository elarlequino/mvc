<div class="container">
<?= isset($bo['msg'])?"<p>{$bo['msg']}</p>":"" ?>
<h2>Connexion</h2>
<p>Connectez-vous pour accéder à l'administration du blog</p>
<form method="post" action="<?= $_SERVER['REQUEST_URI']?>">
<label for="login">Login : </label>
<input type="text" name="log" id="login" value="max" required autofocus tabindex="1"/>
<label for="password">Mot de passe : </label>
<input type="password" name="pass" id="password"  value="Mongolia4000=" required tabindex="2"/>
<input type="submit" value="Se connecter" name="valide"></td>
</form>
</div>
