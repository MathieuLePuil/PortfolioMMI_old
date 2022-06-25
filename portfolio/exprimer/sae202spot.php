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
                <h2>WR210 - MMI à la manière de...</h2>
            </div>
            <div class="description">
                <p>Lors du projet de SAE202 (Concevoir un service ou un produit et sa communication), nous devions réaliser une vidéo en rapport avec nos ateliers et notre agence. Dans celle-ci, nous faisons la promotion des ateliers "Mystérieux Monsieur Introuvable" et "Modifier le Monde Intelligemment" ainsi que notre équipe avec une présentation au début et un packshot de fin.</p>
            </div>
            <div class="appcri">
                <div>
                    <p>• AC3101 | Produire un écrit communicationnel dans un style juste et pertinent, en phase avec la stratégie</p>
                    <p>• AC3102 | Produire des pistes graphiques et des planches d’inspiration</p>
                    <p>• AC3104 | Tourner et monter une vidéo (scénario, captation image et son...)</p>
                </div>
            </div>
            <div class="images">
                <img src="../../assets/img-portfolio/exprimer/sae202spot-1.png" alt="sae202spot-1" width="500">
                <img src="../../assets/img-portfolio/exprimer/sae202spot-2.png" alt="sae202spot-2" width="500">
                <img src="../../assets/img-portfolio/exprimer/sae202spot-3.png" alt="sae202spot-3" width="500">
            </div>
        </section>
        <div class="wherefind">
            <a href="https://www.youtube.com/watch?v=OxVo5fOrX3Q" id="btn" style="margin-top: 0px;" target="_blank">Lien de la vidéo</a>
        </div>
    </main>



<?php
require("../../footer.php");
require("../../fin.php");
?>