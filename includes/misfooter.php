<footer class="misfoot">  
    <div class="container">
        <div class="row">
            <div class="col-5"><br>
                <h5 class="footertit"><i class="fa fa-road"></i> Cybergence</h5>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="mission.php">Our Mission</a></li>
                            <li><a href="shop.php">Shop</a></li>
                            <li><a href="augmented_arms.php">Augmented Arms</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="cyber_contacts.php">Cyber Contacts</a></li>
                            <li><a href="exosuit.php">ExoSuit</a></li>
                            <li><a href="login.php">Sign Up</a></li>
                            <li><a href="signup.php">Login</a></li>
                        </ul>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-7"><br>
                <h5 class="text-md-right footertit">Newsletter</h5>
                <hr>
                <form action="includes/newsletter.inc.php" method="post">
		<input type="hidden" name="redirect" value="<?php echo (isset($_GET['rdr'])) ? $_GET['rdr'] : '';?>" />
                    <fieldset class="form-group">
                        <input type="email" class="form-control" name="mail" id="exampleInputEmail1" placeholder="Enter email">
                    </fieldset>
                    <br>
                    <fieldset class="form-group text-xs-right">
                    <button type="submit" name="newsletter-submit" class="button2">Send</button>
                    </fieldset>
                </form><br>
            </div>
        </div>
    </div>
</footer>
