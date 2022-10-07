<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" style="style/css" href="style.css">
        <script src="https://kit.fontawesome.com/84df8c1afa.js" crossorigin="anonymous"></script>
        <title>Retro Game</title>
    </head>
    <body>
        <header>
            <a href="index.php"> <img src="pictures/logo2.png" alt="logo2"></a>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="recherche.php">Recherchez</a></li>
                <li><a href="catalogue.php">  Catalogue</a></li>
                <li><a href="connexion.php">Se Connecter</a></li>
                <li><a href="panier.php" ><i class="fa-solid fa-basket-shopping"></i></a></li>
            </ul>
        </header>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="pictures/got.jpg" class="d-block w-100" alt="got">
                </div>
                <div class="carousel-item">
                    <img src="pictures/gowr.jpg" class="d-block w-100" alt="gowr">
                </div>
                <div class="carousel-item">
                    <img src="pictures/aplague.jpg" class="d-block w-100" alt="plague">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container"> 
            <h2>Nouvelles sorties</h2>
            <ul>
                <li><img src="pictures/Slaycation.jpg" alt="Slaycation">
                    <p>29,99€</p>
                    <a href="catalogue.php"><input type="button" value="En savoir plus"></a>
                </li>
                <li><img src="pictures/fifa23.jpg" alt="fifa">
                    <p>69,99€</p>
                    <a href="catalogue.php"><input type="button" value="En savoir plus"></a>
                </li>
                <li><img src="pictures/GOW.jpg" alt="God of War">
                    <p>79,99€</p>
                    <a href="catalogue.php"><input type="button" value="En savoir plus"></a>
                </li>
            </ul>
            <h2>Jeux rétro proposés par des vendeurs</h2>
            <ul>
                <li><img src="pictures/harry.jpg" alt="Harry Potter">
                    <p>17,99€</p>
                    <a href="catalogue.php"><input type="button" value="En savoir plus"></a>
                </li>
                <li><img src="pictures/spyro.jpg" alt="Spyro">
                    <p>44,99€</p>
                    <a href="catalogue.php"><input type="button" value="En savoir plus"></a>
                </li>
                <li><img src="pictures/dragonslair.jpg" alt="Dragon's lair">
                    <p>29,90€</p>
                    <a href="catalogue.php"><input type="button" value="En savoir plus"></a>
                </li>
            </ul>
            <h2> Consoles rétro proposées par des vendeurs</h2>
            <ul>
                <li><img src="pictures/famicom.jpg" alt="famicom">
                    <p>31,19€</p>
                    <a href="catalogue.php"><input type="button" value="En savoir plus"></a>
                </li>
                <li><img src="pictures/virtual.jpg" alt="virtual">
                    <p>419,99€</p>
                    <a href="catalogue.php"><input type="button" value="En savoir plus"></a>
                </li>
                <li><img src="pictures/master.jpg" alt="Mastersystem">
                    <p>60,99€</p>
                    <a href="catalogue.php"><input type="button" value="En savoir plus"></a>
                </li>
            </ul>
        </div>
        <footer>
            <a href="http://localhost/Retro/index.php"><img src="pictures/logo1.png" alt="logo1"></a>
            <ul>
                <li><a href="https://fr-fr.facebook.com/"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="https://instagram.com"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://youtu.be/dQw4w9WgXcQ">Contactez-nous</a></li>
            </ul>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>