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
                <h2>WR109 Culture Artistique (Semestre 1)</h2>
            </div>
            <div class="description">
                <p></p>
            </div>
            <div class="appcri">
                <div>
                    <p>• AC3102 | Produire des pistes graphiques et des planches d’inspiration</p>
                    <p>• AC3103 | Créer, composer et retoucher des visuels</p>
                </div>
            </div>
            <div class="images">
                <img src="../../assets/img-portfolio/exprimer/wr109-1.jpg" alt="wr109-1" width="400">
                <img src="../../assets/img-portfolio/exprimer/wr109-2.jpg" alt="wr109-2" width="400">
                <img src="../../assets/img-portfolio/exprimer/wr109-3.jpg" alt="wr109-3" width="400">
                <img src="../../assets/img-portfolio/exprimer/wr109-4.png" alt="wr109-4" width="400">
            </div>
        </section>
    </main>



<?php
require("../../footer.php");
require("../../fin.php");
?>