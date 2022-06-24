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
                <h2>SAE204 - Construire sa présence en ligne (CV vidéo)</h2>
            </div>
            <div class="description">
                <p>L'objectif de cette SAE était de réfléchir à la conception d'une application innovante concernant l'incitation des personnes à des comportements plus vertueux vis-à-vis des grands enjeux environnementaux et écologiques contemporains. Nous devions donc pour cela, analyser les commentaires d'applications déjà existantes afin de comprendre les besoins de l'utilisateur. Nous avons donc pu lister certaines fonctionnalités les plus intéressantes. Nous avons ensuite fait des entretiens afin de connaître l'approche des personnes envers cette cause. Nous avons étudié les mots les plus utilisés dans les réponses. Grâce à tout cela, nous avons pu tirer une conclusion et rédiger une recommandation pour l'application finale.
                </p>
            </div>
            <div class="appcri">
                <div>
                    <p>• AC5105 | Analyser un produit ou un service innovant en identifiant les propositions de valeurs et en évaluant les solutions proposées</p>
                </div>
            </div>
            <div class="images">
                <img src="../../assets/img-portfolio/entreprendre/sae201.png" alt="sae201" width="400">
                <img src="../../assets/img-portfolio/entreprendre/sae201-1.png" alt="sae201-1" width="400">
                <img src="../../assets/img-portfolio/entreprendre/sae201-2.png" alt="sae201-2" width="400">
            </div>
            <div class="wherefind">
                <a href="../../assets/document/sae201.pdf" id="btn" style="margin-top: 0px;" target="_blank">Synthèse</a>
            </div>
        </section>
    </main>



<?php
require("../../footer.php");
require("../../fin.php");
?>