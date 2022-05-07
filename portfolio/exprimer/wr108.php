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
                <h2>WR108 Production graphique (Semestre 1)</h2>
            </div>
            <div class="description">
                <p></p>
            </div>
            <div class="appcri">
                <div>
                    <p>• AC3103 | Créer, composer et retoucher des visuels</p>
                </div>
            </div>
            <div class="images">
                <img src="../../assets/img-portfolio/exprimer/wr108-1.jpg" alt="wr108-1" width="500">
                <img src="../../assets/img-portfolio/exprimer/wr108-2.png" alt="wr108-2" width="">
                <img src="../../assets/img-portfolio/exprimer/wr108-3.png" alt="wr108-3" width="">
                <img src="../../assets/img-portfolio/exprimer/wr108-4.jpg" alt="wr108-4" width="500">
                <img src="../../assets/img-portfolio/exprimer/wr108-5.jpg" alt="wr108-5" width="500">
                <img src="../../assets/img-portfolio/exprimer/wr108-6.jpg" alt="wr108-6" width="500">
            </div>
        </section>
    </main>



<?php
require("../../footer.php");
require("../../fin.php");
?>