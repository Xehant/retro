<?php
include 'header.php';
?>
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
<?php
include 'footer.php'
?>
    </body>
</html>
