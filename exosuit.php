<?php
	require "includes/header.php";
?>
        <!-- Exoskeleton Jumbotron -->
        <div class="jumbotron jumbotron-fluid productjumbo">
            <div class="container state">
                <h1 class="display-3 exotit">ExoSuit</h1>
                <h2 class="display-7 exotitdesc">Cybergence's Innovative Physique</h2>
            </div>
        </div>
    </div>
    <!-- End of Exoskeleton Jumbotron -->
    <div class="updown"><br><br><br></div>
    <!-- Start Quote Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <h1 class="exodesctit">Our ExoSuit</h1><br>
        <p class="exodesc">"We've been working on a project that would both stabilize and advance our human bodies as we
            know it, and we are very excited to finally unveil our very own Cybergence ExoSuit!" - Colin Richardson</p>
    </div>
    <!-- End of Quote Jumbotron -->
    <div class="downup"><br><br><br></div>
    <!-- Start of Row & Column -->
    <div class="row exobreak">
        <div class="col-md-6">
            <img class="exobreakdown" src="img/exobreakdown.jpg" alt="ExoSuit Breakdown">
        </div>
        <div class="col-md-6">
            <h1 class="display-5 exobreaktit">In-Depth Specifications</h1>
            <ul class="exobreakdesc">
                <li>Helmet - Cybergence's Cyber Helmet links in with your other technological devices including laptops,
                    phones,
                    and televisions to provide a more synchronized aspect of living</li><br>
                <li>Thighs - Cybergence's exosuit contains augmentations to the thigh area including quadriceps and
                    hamstrings
                    to provide more strength and accelaration.</li><br>
                <li>Arms - Cybergence's arm enhancements detail added stability to the triceps as well as added strength
                    to the forearm and biceps</li><br>
                <li>Feet - Cybergence's innovation within the feet includes added propellers for a stronger jump that
                    has longer air-time</li><br>
                <li>Chest - Cybergences's increased tissue support to the pectoral muscles creates an enlarged muscular
                    group to aid with push and pull movements.</li>
            </ul>
        </div>
    </div>
    <!-- End of Row & Column -->
    <br><br>
    <!-- Buy -->
    <div class="jumbotron">
    <?php 
        if (isset($_SESSION["userId"]))
        {
                include "includes/buymodal.php";
        } else
        {
                include "includes/loginmodal.php";
        }
    ?>

    </div>
    <?php 
        include "includes/footer.php"
    ?>
</body>

</html>
