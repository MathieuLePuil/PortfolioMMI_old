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
                <h2>Maquette Custom Air</h2>
            </div>
            <div class="description">
                <p>Custom Air est un site de réservation de vol privé. Nous avons dû réaliser la maquette du site en respectant les tendances du domaine (typographie, mise en page...). Nous l'avons créé grâce au logiciel Figma.</p>
            </div>
            <div class="appcri">
                <div>
                    <p>• AC1102 | Évaluer un site web, un produit multimédia ou un dispositif interactif existant en s’appuyant sur des guides de bonnes pratiques</p>
                    <p>• AC1104 | Interpréter les éléments sémiotiques (langage, ton de voix, logotype, typographies, couleurs, visuels...)</p>
                    <p>• AC1107 | Bâtir le modèle des attentes utilisateurs</p>
                </div>
            </div>
            <div class="images">
                <img src="../../assets/img-portfolio/comprendre/customair.png" alt="customair" width="400">
                <img src="../../assets/img-portfolio/comprendre/customair-1.png" alt="customair-1" width="400">
                <img src="../../assets/img-portfolio/comprendre/customair-2.png" alt="customair-2" width="400">
            </div>
            <div class="wherefind">
                <a href="../../assets/document/Maquette%20Custom%20Air.zip" id="btn" style="margin-top: 0px;" target="_blank">Télécharger la maquette</a>
            </div>
        </section>
    </main>



<?php
require("../../footer.php");
require("../../fin.php");
?>