
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kay Nateu - Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="authenti">
    <section class="section section-profil">
        <div class="container-profil">
            <h1 class="logo">Kay Nateu</h1>
            <p class="description">Veillez remplire ces champs afin de vous inscrire dans notre plateforme!</p>
            
            <form action="dashboard.apprenant.html" method="GET">
                <div class="form-group inscript">
                    <input type="text" placeholder="Nom" required>
                </div>
                <div class="form-group inscript">
                    <input type="text" placeholder="Prénom" required>
                </div>
                <div class="form-group inscript">
                    <input type="text" placeholder="Télephone" required>
                </div>
                <div class="form-group inscript">
                    <input type="email" placeholder="Email" required>
                </div>
                <div class="form-group inscript">
                    <input type="password" placeholder="Mots de passe" required>
                </div>
                <div class="form-group role">
                    <select name="Role" id="choixRole">
                        <option value="role">Gérant</option>
                        <option value="role">Coach</option>
                        <option value="role">Apprenant</option>
                    </select>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" id="terms-apprenant">
                    <label for="terms-apprenant">Accepter termes & conditions</label>
                </div>
                <div class="link">
                    <a href="authen.apprenant.html">Déjas un compte Connecter ici</a>
                </div>
                <button type="submit" id="btn">Inscription</button>
            </form>

            <span class="copyright">#Teksi-Brique</span>
        </div>
    </section>
</body>
</html>