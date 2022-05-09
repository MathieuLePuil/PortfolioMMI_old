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
                <h2>SAE104 Production audio et vidéo</h2>
            </div>
            <div class="description">
                <p>Ce travail a été réalisé lors du cursus MMI. L'objectif était de faire une interview avec différent type de cadrage. Nous devions donc adaptées nos lumières et nos caméras selon l'environnement grâce au storyboard de notre interview. Nous avons ensuite réalisé le montage avec Adobe Première Pro et After Effects.</p>
            </div>
            <div class="appcri">
                <div>
                    <p>• AC3101 | Produire un écrit communicationnel dans un style juste et pertinent, en phase avec la stratégie</p>
                    <p>• AC3103 | Créer, composer et retoucher des visuels</p>
                    <p>• AC3104 | Tourner et monter une vidéo (scénario, captation image et son...)</p>
                    <p>• AC3106 | Optimiser les médias en fonction de leurs usages et supports de diffusion</p>
                </div>
            </div>
            <div class="images">
                <img src="../../assets/img-portfolio/exprimer/sae104-1.png" alt="sae104-1" width="500">
                <img src="../../assets/img-portfolio/exprimer/sae104-2.png" alt="sae104-2" width="500">
            </div>
            <div class="wherefind">
                <a href="../../assets/document/découpage-technique.pdf" id="btn" style="margin-top: 0px;" target="_blank">Télécharger le Storyboard</a>
                <a href="https://www.youtube.com/watch?v=bj5ruehxG0w" id="btn" style="margin-top: 0px;" target="_blank">Voir la vidéo</a>
            </div>
        </section>
    </main>



<?php
require("../../footer.php");
require("../../fin.php");
?>