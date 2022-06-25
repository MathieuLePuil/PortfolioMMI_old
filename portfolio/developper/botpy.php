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
                <h2>Wordpress</h2>
            </div>
            <div class="description">
                <p>Notre premier contact avec Wordpress était de créer un site pour présenter le BDE de l'IUT de Troyes. Nous devions réaliser une page d'accueil, une page membre, une boutique, un calendrier et une page contact. Nous avons utilisé les plugins pour améliorer le site.</p>
            </div>
            <div class="appcri">
                <div>
                    <p>• AC4107 | Déployer et personnaliser une application Web en utilisant un CMS ou un framework MVC</p>
                </div>
            </div>
            <div class="images">
                <img src="../../assets/img-portfolio/developper/tpwp.png" alt="tpwp" width="400">
                <img src="../../assets/img-portfolio/developper/tpwp-1.png" alt="tpwp-1" width="400">
                <img src="../../assets/img-portfolio/developper/tpwp-2.png" alt="tpwp-2" width="400">
            </div>
            <div class="wherefind">
                <a href="https://mmi21b12.mmi-troyes.fr/tpwp2/" id="btn" style="margin-top: 0px;" target="_blank">Lien du site</a>
            </div>
        </section>
    </main>



<?php
require("../../footer.php");
require("../../fin.php");
?>