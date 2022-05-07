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
                <h2>Spot Radio de sensibilisation</h2>
            </div>
            <div class="description">
                <p>Lors de nos cours de communication, nous avons dû réaliser un spot radio de sensibilisation. La thématique était : Le Service d’information du Gouvernement (SIG) vous recrute pour élaborer une campagne de sensibilisation, autour dela problématique des fake news et de leur propagation sur les réseaux sociaux numériques.</p>
            </div>
            <div class="appcri">
                <div>
                    <p>• AC2104 | Mettre au point une stratégie de communication en adaptant le message aux objectifs</p>
                    <p>• AC2106 | Communiquer sur les réseaux sociaux (ligne éditoriale et calendrier de publication</p>
                </div>
            </div>
            <div class="images">
                <img src="../../assets/img-portfolio/concevoir/spotradio.png" alt="spotradio" width="400">
                <img src="../../assets/img-portfolio/concevoir/spotradio-1.png" alt="spotradio-1" width="400">
            </div>
            <div class="wherefind">
                <a href="../../assets/document/spotradio.mp3" id="btn" style="margin-top: 0px;" target="_blank">Télécharger le spot</a>
            </div>
        </section>
    </main>



<?php
require("../../footer.php");
require("../../fin.php");
?>