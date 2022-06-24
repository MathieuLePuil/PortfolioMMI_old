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
                <h2>WR207 - Mashup</h2>
            </div>
            <div class="description">
                <p>Lors de nos cours d'écriture, Multimédia et Narration, nous avons créé une vidéo sur le thème "Être étudiant en 2022". La contrainte était d'utilisé uniquement des extraits trouvables sur internet. Aucune scène ne devait être tournée par nos soins.</p>
            </div>
            <div class="appcri">
                <div>
                    <p>• AC3104 | Tourner et monter une vidéo (scénario, captation image et son...)</p>
                </div>
            </div>
            <div class="images">
                <img src="../../assets/img-portfolio/exprimer/wr207.png" alt="wr107" width="500">
                <img src="../../assets/img-portfolio/exprimer/wr207-1.png" alt="wr107-1" width="500">
                <img src="../../assets/img-portfolio/exprimer/wr207-2.png" alt="wr107-2" width="500">
            </div>
        </section>
        <div class="wherefind">
            <a href="https://www.youtube.com/watch?v=SD6hJeVnkW0" id="btn" style="margin-top: 0px;" target="_blank">Lien de la vidéo</a>
        </div>
    </main>



<?php
require("../../footer.php");
require("../../fin.php");
?>