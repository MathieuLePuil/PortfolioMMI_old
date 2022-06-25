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
                <h2>CRUD</h2>
            </div>
            <div class="description">
                <p>L'objectif d'un CRUD est de pouvoir créer, mettre à jour et supprimer des éléments d'une base de données directement depuis le site internet.</p>
            </div>
            <div class="appcri">
                <div>
                    <p>• AC4106 | Utiliser et adapter un modèle d’accès aux données</p>
                </div>
            </div>
            <div class="images">
                <img src="../../assets/img-portfolio/developper/crud-1.png" alt="crud-1" width="800">
                <img src="../../assets/img-portfolio/developper/crud-2.png" alt="crud-2" width="800">
            </div>
            <div class="wherefind">
                <a href="https://mmi21b12.sae203.ovh/" id="btn" style="margin-top: 0px;" target="_blank">Lien du site</a>
            </div>
        </section>
    </main>



<?php
require("../../footer.php");
require("../../fin.php");
?>