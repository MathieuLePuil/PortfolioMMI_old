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
                <h2>Présentation Charlie Miller</h2>
            </div>
            <div class="description">
                <p>Dans le cadre des cours de Culture numérique, nous devions réaliser une présentation d'un œuvre cyberpunk ou d'un hacker célèbre. Nous avons décidé de présenter Charlie Miller, chercheur en sécurité des systèmes d'informations chez Uber.</p>
            </div>
            <div class="appcri">
                <div>
                    <p>• AC1101 | Appréhender un contexte économique, sociologique, culturel, juridique, technologique, communicationnel et médiatique</p>
                    <p>• AC1105 | Identifier les cibles (critères socio-économiques, démographiques, géographiques, culturels...)</p>
                </div>
            </div>
            <div class="images">
                <img src="../../assets/img-portfolio/comprendre/charliem.png" alt="charliem" width="400">
                <img src="../../assets/img-portfolio/comprendre/charliem-1.png" alt="charliem-1" width="400">
                <img src="../../assets/img-portfolio/comprendre/charliem-2.png" alt="charliem-2" width="400">
            </div>
        </section>
    </main>



<?php
require("../../footer.php");
require("../../fin.php");
?>