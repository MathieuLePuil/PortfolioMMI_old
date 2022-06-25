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
                <p>Lors du premier confinement, j'ai créé un serveur discord en rapport avec un jeu vidéo. L'objectif de notre serveur est de vendre les objets présents dans celui-ci. Pour automatiser les tout, nous devions absolument utiliser un bot. Je comptais le faire développer par un ami au début. Puis j'ai commencé à apprendre sérieusement le Python. Je me suis lancé l'objectif de faire le bot du serveur. À ce jour, j'ai travaillé plus de 500 heures pour que le bot fonctionne correctement.</p>
            </div>
            <div class="appcri">
                <div>
                    <p>• AC4101 | Exploiter de manière autonome un environnement de développement efficace et productif</p>
                </div>
            </div>
            <div class="images">
                <img src="../../assets/img-portfolio/developper/botpy-1.png" alt="botpy-1" width="700">
                <img src="../../assets/img-portfolio/developper/botpy-2.png" alt="botpy-2" width="400">
                <img src="../../assets/img-portfolio/developper/botpy-3.png" alt="botpy-3" width="400">
            </div>
            <div class="wherefind">
                <a href="https://github.com/MathieuLePuil/discord.py" id="btn" style="margin-top: 0px;" target="_blank">Lien du Github</a>
            </div>
        </section>
    </main>



<?php
require("../../footer.php");
require("../../fin.php");
?>