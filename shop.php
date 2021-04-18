<?php 
	require "includes/header.php";
?>
<body>
<?php
	require "includes/shopnav.php"
?>
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
