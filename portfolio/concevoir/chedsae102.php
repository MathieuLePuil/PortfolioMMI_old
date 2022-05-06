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
                <h2>Charte éditoriale SAE102</h2>
            </div>
            <div class="description">
                <p>Dans le cadre de la SAE Recommandation de communication numérique, nous avons rédigé une charte éditoriale. Cell-ci a pour but d'assurer la cohérence et la qualité d'une publication. Il s'agit du règlement auquel doit se soumettre le projet.</p>
            </div>
            <div class="appcri">
                <div>
                    <p>• AC2103 | Proposer une recommandation marketing (cibles, objectifs, points de contact)</p>
                </div>
            </div>
            <div class="images">
                <img src="../../assets/img-portfolio/concevoir/chedsae102.png" alt="chedsae102" width="400">
                <img src="../../assets/img-portfolio/concevoir/chedsae102-1.png" alt="chedsae102-1" width="400">
                <img src="../../assets/img-portfolio/concevoir/chedsae102-2.png" alt="chedsae102-2" width="400">
            </div>
            <div class="wherefind">
                <a href="../../assets/document/SAE102_charte.pdf" id="btn" style="margin-top: 0px;" target="_blank">Télécharger le document</a>
            </div>
        </section>
    </main>



<?php
require("../../footer.php");
require("../../fin.php");
?>