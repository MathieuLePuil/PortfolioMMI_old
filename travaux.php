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
                <li><a href="travaux.php" class="active anav">Travaux</a></li>
                <li><a href="portfolio.php" class="nav">Portfolio</a></li>
                <li><a href="contact.php" class="anav">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="presentation">
            <div class="titre-page">
                <h1>Travaux</h1>
            </div>
            <div class="menu-ue">
                <nav>
                    <ul>
                        <li><a href="#comprendre" class="anav">Semestre 1</a></li>
                        <li><a href="#semestre2" class="anav">Semestre 2</a></li>
                    </ul>
                </nav>
            </div>
        </section>
        <section class="competence comprendre" id="semestre2">
            <div class="txt-intro">
                <h2 class="semestre">Semestre 2</h2>
                <h3 class="module">R212 - Intégration</h3>
            </div>
            <div class="element-portfolio">
                <div class="container-a1">
                    <ul class="caption-style-1">
                        <li>
                            <a href="https://mmi21b12.mmi-troyes.fr/travaux/r212/sequence1/monopoly.html" target="_blank"><img src="assets/img-travaux/r212/sequence1.png" width="400px"></a>
                            <div class="caption">
                                <div class="blur"></div>
                                <div style="text-align: center;">
                                    <div class="caption-text">
                                        <h1>Monopoly</h1>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="container-a1">
                    <ul class="caption-style-1">
                        <li>
                            <a href="https://mmi21b12.mmi-troyes.fr/travaux/r212/sequence2" target="_blank"><img src="assets/img-travaux/r212/sequence2.png" width="400px"></a>
                            <div class="caption">
                                <div class="blur"></div>
                                <div style="text-align: center;">
                                    <div class="caption-text">
                                        <h1>Hony Tawk's</h1>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="container-a1">
                    <ul class="caption-style-1">
                        <li>
                            <a href="https://mmi21b12.mmi-troyes.fr/travaux/r212/sequence3/" target="_blank"><img src="assets/img-travaux/r212/sequence3.png" width="400px"></a>
                            <div class="caption">
                                <div class="blur"></div>
                                <div style="text-align: center;">
                                    <div class="caption-text">
                                        <h1>Mon parallaxe</h1>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="container-a1">
                    <ul class="caption-style-1">
                        <li>
                            <a href="https://mmi21b12.mmi-troyes.fr/travaux/r212/sequence4" target="_blank"><img src="assets/img-travaux/r212/sequence4.png" width="400px"></a>
                            <div class="caption">
                                <div class="blur"></div>
                                <div style="text-align: center;">
                                    <div class="caption-text">
                                        <h1>Calculatrice</h1>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="txt-intro">
                <h3 class="module">R213 - Développement Web</h3>
            </div>
            <div class="element-portfolio">
                <div class="container-a1">
                    <ul class="caption-style-1">
                        <li>
                            <a href="https://mmi21b12.mmi-troyes.fr/travaux/r213/sequence1/infos.php" target="_blank"><img src="assets/img-travaux/r213/sequence1.png" width="400px"></a>
                            <div class="caption">
                                <div class="blur"></div>
                                <div style="text-align: center;">
                                    <div class="caption-text">
                                        <h1>Traitement des données</h1>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="container-a1">
                    <ul class="caption-style-1">
                        <li>
                            <a href="https://mmi21b12.mmi-troyes.fr/travaux/r213/sequence2/doc6.php" target="_blank"><img src="assets/img-travaux/r213/sequence2.png" width="400px"></a>
                            <div class="caption">
                                <div class="blur"></div>
                                <div style="text-align: center;">
                                    <div class="caption-text">
                                        <h1>PDF en PHP</h1>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="container-a1">
                    <ul class="caption-style-1">
                        <li>
                            <a href="https://mmi21b12.mmi-troyes.fr/travaux/r213/mmiple/" target="_blank"><img src="assets/img-travaux/r213/mmiple.png" width="400px"></a>
                            <div class="caption">
                                <div class="blur"></div>
                                <div style="text-align: center;">
                                    <div class="caption-text">
                                        <h1>MMiple</h1>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>



<?php
require("footer.php");
require("fin.php");
?>