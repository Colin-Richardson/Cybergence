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
    <title>Cyber Contacts</title>
</head>

<body>
    <!-- Navigation -->
    <div class="productback eyeback">
        <?php
    include "includes/shopnav.php";
    ?>
        <!-- End Navigation -->

        <!-- Contacts Jumbotron -->
        <div class="jumbotron jumbotron-fluid productjumbo">
            <div class="container state">
                <h1 class="display-3">Cyber Contacts</h1>
                <h2 class="display-7">Cybergence's New Vision</h2>
            </div>
        </div>
    </div>
    <!-- End of Contacts Jumbotron -->
    <div class="updown"><br><br><br></div>
    <!-- Start Quote Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <h1 class="exodesctit">Our Cyber Contacts</h1><br>
        <p class="exodesc">"This new augmentation to eyeware encourages interconnectivity between man and machine,
            maintaining a life of synchronization" - Colin Richardson</p>
    </div>
    <!-- End of Quote Jumbotron -->
    <div class="downup"><br><br><br></div>
    <!-- Start of Row & Column -->
    <div class="row">
        <div class="col-6">
            <img class="indepth-eye" src="img/in-deptheye.jpg" alt="Eye Breakdown">
        </div>
        <div class="col-6 eyebreak"><br><br><br><br>
            <h1 class="display-5 exobreaktit">In-Depth Specifications</h1><br>
            <h2 class="state eyebreakh2">The Cyber Retina Display (CRD) is the center of all computing within the
                contacts. It creates things such as:</h2>
            <ul class="exobreakdesc">
                <br>
                <li>Night vision</li>
                <br>
                <li>An augmented interface that identifies the people around you and can pull up their licenses and
                    other records in an instant</li>
                <br>
                <li>An innovative heads-up display (HUD) that can tell you the weather, your heart rate, and your
                    phone/laptop notifications</li>
                <br>
                <li>Smart-mapping which will highlight roads and streets ahead to help you get to your destination.</li>
            </ul>
        </div>
    </div>
    <!-- End of Row & Column -->
    <!-- Buy -->
    <div class="jumbotron">
    <?php 
        include "includes/loginmodal.php"
    ?>
    </div>
    <?php 
        include "includes/footer.php"
    ?>
</body>

</html>
