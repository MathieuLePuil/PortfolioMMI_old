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
                <h2>WR107 - Dossier de Production</h2>
            </div>
            <div class="description">
                <p>Lors de nos cours d'écriture, Multimédia et Narration, nous avons créé un dossier de production. L'objectif est de comprendre comment fonctionne la mise en place d'un film. J'ai dû rédiger tout un dossier de production avec la Note d'intention, le synopsis et le scénario.</p>
            </div>
            <div class="appcri">
                <div>
                    <p>• AC3101 | Produire un écrit communicationnel dans un style juste et pertinent, en phase avec la stratégie</p>
                </div>
            </div>
            <div class="images">
                <img src="../../assets/img-portfolio/exprimer/wr107-1.png" alt="wr107-1" width="500">
                <img src="../../assets/img-portfolio/exprimer/wr107-2.png" alt="wr107-2" width="500">
                <img src="../../assets/img-portfolio/exprimer/wr107-3.png" alt="wr107-3" width="500">
            </div>
        </section>
        <div class="wherefind">
            <a href="https://drive.google.com/drive/folders/1PPvA8HUFRDp7R0CHj1qnjsky6Vo2KVkE?usp=sharing" id="btn" style="margin-top: 0px;" target="_blank">Dossier de Production</a>
        </div>
    </main>



<?php
require("../../footer.php");
require("../../fin.php");
?>