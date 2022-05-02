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
                <h2>Projet personnel - Site du ScaryShop</h2>
            </div>
            <div class="description">
                <p>Le ScaryShop est un serveur Discord dont le but est de vendre des objets présents dans un jeu (avec l'argent du jeu). Nous avons récemment créé un site web pour celui-ci. Il grandira au fur et à mesure des jours.</p>
            </div>
            <div class="appcri">
                <div>
                    <p>• AC4101 | Exploiter de manière autonome un environnement de développement efficace et productif</p>
                    <p>• AC4102 | Produire des pages Web statiques et fluides utilisant un balisage sémantique efficace</p>
                    <p>• AC4104 | Mettre en ligne une application Web en utilisant une solution d’hébergement standard</p>
                    <p>• AC4105 | Modéliser les données et les traitements d’une application Web</p>
                    <p>• AC4106 | Utiliser et adapter un modèle d’accès aux données</p>
                </div>
            </div>
            <div class="images">
                <img src="../../assets/img-portfolio/developper/scaryshop.fr_2.png" alt="scaryshop_1" width="400">
                <img src="../../assets/img-portfolio/developper/scaryshop.fr_3.png" alt="scaryshop_2" width="400">
            </div>
            <div class="wherefind">
                <a href="https://scaryshop.fr/" id="btn" style="margin-top: 0;" target="_blank">Aller sur le site</a>
            </div>
        </section>
    </main>



<?php
require("../../footer.php");
require("../../fin.php");
?>