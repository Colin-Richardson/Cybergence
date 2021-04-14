<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Mssion, About, Cybergence, Augmentation, Implant, Cyber" />
    <meta name="description" content="Mission Statement, Values, Ethics" />
    <meta name="author" content="Colin Richardson, Matthew Thornton, and Vincent Zhu" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Base Stylesheet -->
    <link rel="stylesheet" href="styles.css">
    <!-- Icon -->
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <!-- Title -->
    <title>Shop Cybergence</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <a class="navbar-brand" href="index.php"><img class="logo" src="img/favicon.png" alt="Cybergence"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse"
            aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarcollapse">

            <div class="navbar-nav">
                <a class="nav-item nav-link" href="augmented_arms.php">Augmented Arms</a>
                <a class="nav-item nav-link" href="cyber_contacts.php">Cyber Contacts</a>
                <a class="nav-item nav-link" href="exosuit.php">ExoSuit</a>
                <a class="nav-item nav-link sunav" href="signup.php">Sign Up</a>
                <a class="nav-item nav-link lginnav" href="login.php">Login</a>
            </div>

        </div>
    </nav>
    <!-- End Navigation -->
    <!-- Shop Jumbotron -->
    <div class="jumbotron jumbotron-fluid shopback">
        <div class="container state"><br><br><br>
            <h1 class="display-4">Shop Cybergence</h1><br><br><br>
        </div>
    </div>
    <!-- End of Shop Jumbotron -->
    <!-- Start of Row & Column -->
    <div class="row">
        <div class="col-md-5">
            <img class="shopimg" src="img/shoparm.jpg" alt="">
        </div>
        <div class="col-md-7">
            <h1 class="shopheader display-6">Augmented Arms</h1>
            <br>
            <p class="shopdesc">As we were developing our ExoSuit, we became fascinated with the prospect of a more
                improved arm mechanic that can last on its own and produce incredible power. Thus, we started our
                Augmented Arm collection. This state-of-the-art body modification includes innovations in stability
                relating to the main arm muscle groups.</p>
            <br><br>
            <a class="shopbutton" href="augmented_arms.php">Learn More</a>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="row">
        <div class="col-md-5">
            <img class="shopimg" src="img/shopcontacts.jpg" alt="">
        </div>
        <div class="col-md-7">
            <h1 class="shopheader display-6">Cyber Contacts</h1>
            <br>
            <p class="shopdesc">Our Cyber Contacts came about through developing the Exo Helmet of our ExoSuit. These
                contacts feature a Cyber Retina Display (CRD) that allows for many great features including phone
                synchronization.</p>
            <br><br>
            <a class="shopbutton" href="cyber_contacts.php">Learn More</a>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="row">
        <div class="col-md-5">
            <img class="shopimg" src="img/shopexo.jpg" alt="">
        </div>
        <div class="col-md-7">
            <h1 class="shopheader display-6">ExoSuit</h1>
            <br><br>
            <p class="shopdesc">Cybergence's first and most revered product: the ExoSuit. It has technology from our
                Augmented Arms and Cyber Contacts while also detailing additions in legs, feet, and chest. This is the
                ultimate cybernetic innovation of augmentation.</p>
            <br>
            <a class="shopbutton" href="exosuit.php">Learn More</a>
        </div>
    </div>
    <br>
    <!-- End of Row & Column -->
    <?php 
        include "includes/footer.php"
    ?>
</body>

</html>