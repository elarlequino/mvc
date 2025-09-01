<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>tableau_a_taladoire</title>
  </head>
  <body>
    <h1>Tableau en HTML</h1>
    <div id="tableau"></div>
    <button class="button-24" onclick="verif(p);">nombre permier</button>
    <script>
      let tableau = tab();
      document.getElementById("tableau").innerHTML = tableau;
    </script>
  </body>
</html>
