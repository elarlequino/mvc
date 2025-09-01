
<body>
    <header>
        <h1>connexion</h1>
    </header>
    <div id="faitchier" class="container blanc ">
        <form class="flexcol" method="post" action="/inscryption/submit">
            <label for="name">Nom d'utilisateur :</label>
            <input type="text" id="name" name="name" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">connexion</button>
        </form>
    </div>
</body>
</html>