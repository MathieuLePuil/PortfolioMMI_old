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
                <p>L'objectif de cette SAE était de réfléchir à la conception d'une application innovante concernant l'incitation des personnes à des comportements plus vertueux vis-à-vis des grands enjeux environnementaux et écologiques contemporains. Nous devions donc pour cela, analyser les commentaires d'applications déjà existantes afin de comprendre les besoins de l'utilisateur
                </p>
            </div>
            <div class="appcri">
                <div>
                    <p>• AC5101 | Gérer un projet avec une méthode classique</p>
                    <p>• AC5102 | Budgétiser un projet et suivre sa rentabilité</p>
                    <p>• AC5103 | Faire un appel d’offre (cahier des charges, brief, analyse des réponses, choix du prestataire, contractualisation)</p>
                </div>
            </div>
            <div class="images">
                <img src="../../assets/img-portfolio/entreprendre/sae106.png" alt="sae106_1" width="400">
                <img src="../../assets/img-portfolio/entreprendre/sae106-1.png" alt="sae106_1" width="400">
                <img src="../../assets/img-portfolio/entreprendre/sae106-2.png" alt="sae106_2" width="400">
                <img src="../../assets/img-portfolio/entreprendre/sae106-3.png" alt="sae106_3" width="400">
            </div>
            <div class="wherefind">
                <a href="../../assets/document/chartesae106.pdf" id="btn" style="margin-top: 0px;" target="_blank">Charte de projet</a>
                <a href="../../assets/document/plansae106.pdf" id="btn" style="margin-top: 0px;" target="_blank">Plan de projet</a>
            </div>
        </section>
    </main>



<?php
require("../../footer.php");
require("../../fin.php");
?>