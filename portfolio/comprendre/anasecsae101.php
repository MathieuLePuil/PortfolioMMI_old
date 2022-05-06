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
                <h2>Analyse Sectorielle SAE101</h2>
            </div>
            <div class="description">
                <p>Dans le cadre de la SAE101, Audit Communication Numérique, nous devions analyser cinq sites de musées. Nous devions les comparer afin de trouver par exemple les défauts et qualités de chacun. L'objectif est de conduire à des préconisations et des recommandations pour la conception d'un site de musée.</p>
            </div>
            <div class="appcri">
                <div>
                    <p>• AC1102 | Évaluer un site web, un produit multimédia ou un dispositif interactif existant en s’appuyant sur des guides de bonnes pratiques</p>
                </div>
            </div>
            <div class="images">
                <img src="../../assets/img-portfolio/comprendre/anasecsae101.png" alt="anasecsae101" width="400">
                <img src="../../assets/img-portfolio/comprendre/anasecsae101-1.png" alt="anasecsae101-1" width="400">
                <img src="../../assets/img-portfolio/comprendre/anasecsae101-2.png" alt="anasecsae101-2" width="400">
            </div>
            <div class="wherefind">
                <a href="../../assets/document/Analyse%20Sectorielle%20des%20sites%20de%20Musées%20-Diapo.pptm" id="btn" style="margin-top: 0px;" target="_blank">Télécharger la présentation</a>
            </div>
        </section>
    </main>



<?php
require("../../footer.php");
require("../../fin.php");
?>