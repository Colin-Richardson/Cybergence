
        <nav class="navbar navbar-expand-lg navopacity">
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
		<?php 
		if (isset($_SESSION['userId']))
		{
			if (isset($_SESSION['admin']))
			{
                   		echo '<a class="nav-item nav-link sunav" href="admin.php">admin</a>'; 
			}
                   		echo '<a class="nav-item nav-link lginnav" href="includes/logout.inc.php">Logout</a>'; 

		} else
		{	
                   echo '<a class="nav-item nav-link sunav" href="signup.php">Sign Up</a>
                    <a class="nav-item nav-link lginnav" href="login.php">Login</a>';
		}
		?>
                </div>

            </div>
        </nav>
