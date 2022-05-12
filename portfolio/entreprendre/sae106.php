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
                <h2>SAE105 - Site AC/DC</h2>
            </div>
            <div class="description">
                <p>Le site de musique AC/DC a été créé durant la SAE105. L'objectif était d'apprendre comment réaliser un tableau de données (ici 100 musiques d'AC/DC). Nous avons également vu comme créer une galerie avec possibilité d'ajouter une image avec un mot de passe. Un système de contact via messagerie a aussi été mis en place pour permettre aux utilisateurs du site de contacter le support pour faire une demande.</p>
            </div>
            <div class="appcri">
                <div>
                    <p>• AC4101 | Exploiter de manière autonome un environnement de développement efficace et productif</p>
                    <p>• AC4102 | Produire des pages Web statiques et fluides utilisant un balisage sémantique efficace</p>
                    <p>• AC4104 | Mettre en ligne une application Web en utilisant une solution d’hébergement standard</p>
                    <p>• AC4105 | Modéliser les données et les traitements d’une application Web</p>
                </div>
            </div>
            <div class="images">
                <img src="../../assets/img-portfolio/developper/sae105.png" alt="sae105_1" width="400">
                <img src="../../assets/img-portfolio/developper/sae105_2.png" alt="sae105_2" width="400">
                <img src="../../assets/img-portfolio/developper/sae105_3.png" alt="sae105_3" width="400">
            </div>
            <div class="wherefind">
                <a href="https://mmi21b12.h205.online/" id="btn" style="margin-top: 0px;" target="_blank">Aller sur le site</a>
            </div>
        </section>
    </main>



<?php
require("../../footer.php");
require("../../fin.php");
?>