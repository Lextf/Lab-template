<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/af2789c1ce.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400&family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <script src="script.js"></script>
    <title>Lab template</title>
</head>
<body onload="findActiveClass();">
    <header> <?php include ('./header.php')?> </header>
    <section id="slider"> <?php include ('./slider.php')?> </section>
    <section id="galerie">
    <!--galerie componant-->
        <div id="galerie-container">
            <ul>
                <li><img src="./images/images/galerie/etoile.jpg" class="myImg"></li>
                <li><img src="./images/images/galerie/femme.jpg" class="myImg"></li>
                <li><img src="./images/images/galerie/jungle.jpg" class="myImg"></li>
                <li><img src="./images/images/galerie/lune.jpg" class="myImg"></li>
                <li><img src="./images/images/galerie/etoile.jpg" class="myImg"></li>
                <li><img src="./images/images/galerie/femme.jpg" class="myImg"></li>
                <li><img src="./images/images/galerie/jungle.jpg" class="myImg"></li>
                <li><img src="./images/images/galerie/lune.jpg" class="myImg"></li>
            </ul>
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>
        </div>
        </div>
    </section>
    <!--fin de galerie-->
    <footer> <?php include ('./footer.php')?> </footer>
    <script src="scripts.js"></script>
</body>
</html>