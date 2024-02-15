<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Services EtuServices</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #0000FF; /* Bleu pour l'entête */
            color: white;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: 3px solid #ADD8E6; /* Bleu clair pour le bord */
        }
        header a {
            color: #ADD8E6; /* Bleu clair pour les liens */
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }
        header ul {
            padding: 0;
            list-style: none;
        }
        header ul li {
            float: left;
            display: inline;
            padding: 0 20px 0 20px;
        }
        header #branding {
            float: left;
        }
        header #branding h1 {
            margin: 0;
        }
        header nav {
            float: right;
            margin-top: 10px;
        }
        header .highlight, header .current a {
            color: #B0C4DE; /* Bleu acier clair pour un contraste doux */
            font-weight: bold;
        }
        header a:hover {
            color: #ffffff; /* Blanc pour le survol */
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">EtuServices</span> Vente & Achat</h1>
            </div>
            <nav>
                <ul>
                    <li class="current"><a href="services.php">Services</a></li>
                    <li><a href="login.php">Connexion</a></li>
                    <li><a href="accueil.php">Inscription</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <section id="main">
            <h1>Bienvenue sur EtuServices</h1>
            <p>Notre plateforme offre aux étudiants la possibilité de vendre et d'acheter des articles tels que DVD, livres et bien plus encore ! Connectez-vous ou inscrivez-vous maintenant pour commencer à utiliser nos services.</p>
        </section>
    </div>
</body>
</html>


