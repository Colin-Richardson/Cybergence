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
    <title>Augmented Arms</title>
</head>

<body>
    <!-- Navigation -->
    <div class="productback armback">
        <?php
    include "includes/shopnav.php";
    ?>
        <!-- End Navigation -->
        <!-- Arms Jumbotron -->
        <div class="jumbotron jumbotron-fluid productjumbo">
            <div class="container state">
                <h1 class="display-3">Augmented Arms</h1>
                <h2 class="display-7">Cybergence's Arm Collection</h2>
            </div>
        </div>
    </div>
    <div class="gradient">
    <!-- End of Arms Jumbotron -->
    <div class="updown"><br><br><br></div>
    <!-- Start Quote Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <h1 class="exodesctit">Our Augmented Arms</h1><br>
        <p class="exodesc">"This individual piece of our exosuit is designed to bring strength and stability to the
            arms, focusing on the three main muscles: the biceps, the triceps, and the forearm" - Colin Richardson</p>
    </div>
    <!-- End of Quote Jumbotron -->
    <div class="downup"><br><br><br></div></div>
    <!-- Start of Row & Column -->
    <div class="row armbreak">
        <div class="col-6">
            <img class="indepth-arm" src="img/in-deptharm.png" alt="Arm Breakdown">
        </div>
        <div class="col-6 eyebreak"><br><br><br><br>
            <h1 class="display-5 exobreaktit">In-Depth Specifications</h1><br>
            <h2 class="state eyebreakh2">The biceps, forearms, and triceps are manufactured with Valerian steele to provide superior durability.</h2>
            <ul class="armbreakdesc">
                <br>
                <li>Enhanced strength when curling objects</li>
                <br>
                <li>Added stability to pushing and pulling objects</li>
                <br>
                <li>Augmented hands which add greater gripping strength</li>
            </ul>
        </div>
    </div>
    <!-- End of Row & Column -->
    <!-- Buy -->
    <div class="jumbotron armbuy"><br><br><br>
    <?php 
        include "includes/loginmodal.php"
    ?>
    </div>
    <?php 
        include "includes/footer.php"
    ?>
</body>

</html>
