
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kay Nateu - Dashboard Coach</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="dashboard-body">

    <nav class="dash-nav">
        <a href="index.html">
            <div class="logo-small">Kay Nateu</div>
        </a>
        <div class="user-info">Coach 👤</div>
         <div class="dash-menu">
            <button class="active">Dashboard</button>
            <button>Apprenant</button>
            <button>Lancer Campagne</button>
            <button>Gestion</button>
        </div>
    </nav>

    <div class="dash-container">
       

        <main class="dash-content-coach">
            <!-- Section avec les deux gros blocs de gestion comme sur la maquette -->
            <div class="coach-grid">
                <div class="coach-card">
                    <div class="card-placeholder-list">
                        <!-- Blocs vert clair empilés de la maquette -->
                        <div class="list-item-light"></div>
                        <div class="list-item-light"></div>
                        <div class="list-item-light"></div>
                    </div>
                    <button class="btn-coach-action">Gérer les apprenants</button>
                </div>

                <div class="coach-card">
                    <div class="card-placeholder-list">
                        <div class="list-item-light"></div>
                        <div class="list-item-light"></div>
                    </div>
                    <button class="btn-coach-action">Gérer les Campagnes</button>
                </div>
            </div>

            <!-- Bouton du bas sur la vue Coach -->
            <div class="coach-footer-action">
                <button class="btn-coach-action wide">Gérer les Cotisations</button>
            </div>
        </main>
    </div>

</body>
</html>