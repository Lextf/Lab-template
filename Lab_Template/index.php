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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="./images/images/ar-camera.png">
    <script src="script.js"></script>
    <title>Lab template</title>
</head>
<body onload="findActiveClass();">

    <!--header-->
    <header> <?php include ('./header.php')?> </header>
    <!--fin du header-->
    <!--slider-->
    <section id="slider"> <?php include ('./slider.php')?> </section>
    <!--fin du slider-->
    <!--section design-->
    <section id="designer">
        <div id="designer-container">
            <div id="designer-image"><img src="./images/images/2.png"></div>
            <h2 id="designer-title">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. </h2>
            <p>Sean Gerahgty - Designer Of This Template</p>
            <div id="dots"><div style="text-align:center">
            <span class="dot" id="darker"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
            </div>
        </div>
        </div>
    </section>
    <!--fin de section design-->
    <!--footer-->
    <footer> <?php include ('./footer.php')?> </footer>
    <!--fin de footer-->
</body>
</html>