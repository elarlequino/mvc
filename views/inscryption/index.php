
<body>
    <header>
        <h1>s'inscrire</h1>
    </header>
    <div id="faitchier" class="container blanc ">
        <form class="flexcol" method="post" action="/inscryption/submit">
    <label for="name">Nom d'utilisateur :</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required>

    <label for="password_confirm">Confirmez le mot de passe :</label>
    <input type="password" id="password_confirm" name="password_confirm" required>

    <button type="submit">S'inscrire</button>
    </div>
</body>
</html>