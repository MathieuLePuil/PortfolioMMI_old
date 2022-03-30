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
                        <li><a href="" class="anav">Comprendre</a></li>
                        <li><a href="" class="anav">Concevoir</a></li>
                        <li><a href="" class="anav">Exprimer</a></li>
                        <li><a href="" class="anav">Développer</a></li>
                        <li><a href="" class="anav">Entreprendre</a></li>
                    </ul>
                </nav>
            </div>
        </section>
    </main>



<?php
    require("footer.php");
    require("fin.php");
?>