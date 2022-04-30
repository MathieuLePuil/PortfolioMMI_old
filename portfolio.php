<?php
    require("debut.php");
?>
    <title>MathieuLP | Portfolio</title>
</head>
<body>
    <header>
        <div class="logotxt logo">
            <img src="assets/LOGO.png" alt="Logo de l'ATP" id="logohg" width="50" height="50">
        </div>
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa-solid fa-bars"></i>
            </label>
            <a href="https://mathieulp.fr/index.php">
                <label class="logo">MathieuLP</label></a>
            <ul>
                <li><a href="index.php" class="anav">Accueil</a></li>
                <li><a href="travaux.php" class="anav">Travaux</a></li>
                <li><a href="portfolio.php" class="active anav">Portfolio</a></li>
                <li><a href="contact.php" class="anav">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="presentation">
            <div class="titre-page">
                <h1>Portfolio</h1>
            </div>
            <div class="menu-ue">
                <nav>
                    <ul>
                        <li><a href="#comprendre" class="anav">Comprendre</a></li>
                        <li><a href="#concevoir" class="anav">Concevoir</a></li>
                        <li><a href="#exprimer" class="anav">Exprimer</a></li>
                        <li><a href="#developper" class="anav">Développer</a></li>
                        <li><a href="#entreprendre" class="anav">Entreprendre</a></li>
                    </ul>
                </nav>
            </div>
        </section>
        <section class="competence comprendre" id="comprendre">
            <div class="txt-intro">
                <h2>Comprendre</h2>
                <p>Comprendre les écosystèmes, les besoins des utilisateurs et les dispositifs de communication numérique</p>
            </div>
        </section>
        <section class="competence concevoir" id="concevoir">
            <div class="txt-intro">
                <h2>Concevoir</h2>
                <p>Concevoir ou co-concevoir une réponse stratégique pertinente à une problématique complexe</p>
            </div>
        </section>
        <section class="competence exprimer" id="exprimer">
            <div class="txt-intro">
                <h2>Exprimer</h2>
                <p>Exprimer un message avec les médias numériques pour informer et communiquer</p>
            </div>
        </section>
        <section class="competence developper" id="developper">
            <div class="txt-intro">
                <h2>Développer</h2>
                <p>Développer pour le web et les médias numériques</p>
            </div>
            <div class="element-portfolio">
                <div>
                   <a href="portfolio/developper/sae105.php"><img src="assets/img-portfolio/developper/sae105.png" width="400px"></a>
                </div>
                <div>
                    <a href="portfolio/developper/sae203.php"><img src="assets/img-portfolio/developper/sae203.png" width="400px"></a>
                </div>
            </div>
        </section>
        <section class="competence entreprendre" id="entreprendre">
            <div class="txt-intro">
                <h2>Entreprendre</h2>
                <p>Entreprendre dans le secteur du numérique</p>
            </div>
        </section>
    </main>



<?php
    require("footer.php");
    require("fin.php");
?>