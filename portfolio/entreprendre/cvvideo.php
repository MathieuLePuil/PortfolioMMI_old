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
                <p>Durant la SAE204 (Construire sa présence en ligne), nous avons développé nos réseaux sociaux professionnels comme Linkedin et Github. Nous avons également créé un CV vidéo afin de nous présenter.
                </p>
            </div>
            <div class="appcri">
                <div>
                    <p>• AC5106 | Construire une présence en ligne professionnelle (personal branding)</p>
                </div>
            </div>
            <div class="images">
                <img src="../../assets/img-portfolio/entreprendre/cvvideo.png" alt="cvvideo" width="400">
                <img src="../../assets/img-portfolio/entreprendre/cvvideo-1.png" alt="cvvideo-1" width="400">
                <img src="../../assets/img-portfolio/entreprendre/cvvideo-2.png" alt="cvvideo-2" width="400">
            </div>
            <div class="wherefind">
                <a href="https://youtu.be/ATQW7HpXpMI" id="btn" style="margin-top: 0px;" target="_blank">CV vidéo</a>
            </div>
        </section>
    </main>



<?php
require("../../footer.php");
require("../../fin.php");
?>