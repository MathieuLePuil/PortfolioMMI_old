<?php
require("../../debut.php");
?>
    <title>MathieuLP | Portfolio</title>
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="../style/style.css">
    </head>
    <body>
    <header>
        <div class="logotxt logo">
            <img src="../../assets/LOGO.png" alt="Logo de l'ATP" id="logohg" width="50" height="50">
        </div>
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa-solid fa-bars"></i>
            </label>
            <a href="https://mathieulp.fr/index.php">
                <label class="logo">MathieuLP</label></a>
            <ul>
                <li><a href="../../index.php" class="anav">Accueil</a></li>
                <li><a href="../../travaux.php" class="anav">Travaux</a></li>
                <li><a href="../../portfolio.php" class="active anav">Portfolio</a></li>
                <li><a href="../../contact.php" class="anav">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="presentation-element">
            <div class="titre-element">
                <h2>Plan de communication Nigloland</h2>
            </div>
            <div class="description">
                <p>L'objectif du plan de communication est de définir la stratégie à mettre en place pour faire de la promotion. Nous avons donc analysé les publics cibles, les manières de communiquer afin de proposer une stratégie cohérente avec la cible et les enjeux.</p>
            </div>
            <div class="appcri">
                <div>
                    <p>• AC1106 | Réaliser des entretiens utilisateurs (sélection de la cible, écriture du guide d’entretien, organisation)</p>
                    <p>• AC1107 | Bâtir le modèle des attentes utilisateurs</p>
                </div>
            </div>
            <div class="images">
                <img src="../../assets/img-portfolio/comprendre/pcniglo.png" alt="pcniglo" width="400">
                <img src="../../assets/img-portfolio/comprendre/pcniglo-1.png" alt="pcniglo-1" width="400">
                <img src="../../assets/img-portfolio/comprendre/pcniglo-2.png" alt="pcniglo-2" width="400">
            </div>
            <div class="wherefind">
                <a href="../../assets/document/Presentation%20Nigloland.odp" id="btn" style="margin-top: 0px;" target="_blank">Télécharger la présentation</a>
            </div>
        </section>
    </main>



<?php
require("../../footer.php");
require("../../fin.php");
?>