<?php
	include 'includes/data.inc.php';
	require "includes/header.php";
?>
<br><br>
<!-- Admin Jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container state">
        <h1 class="display-1 ">Welcome Admin</h1>
        <h2 class="display-6">Here is the hub for all your sales data</h2>
    </div>
</div>
</div>
<!-- End of Admin Jumbotron -->
<br><br>
<!-- Start of Row & Column -->
<div class="row">
    <div class="col-12">
        <h1 class="state display-3 adminusv">Augmented Arms</h1>
        <br>
	<canvas id="armSales" width="525" height="350" class="graph" >
	Your browser does not support the HTML canvas tag.
	</canvas>
        <br><br><br>
        <h1 class="state display-3 adminsd">Cyber Contacts</h1>
        <br>
	<canvas id="contactSales" width="525" height="350" class="graph" >
	Your browser does not support the HTML canvas tag.
	</canvas>
        <br><br><br>
        <h1 class="state display-3 adminint">ExoSuits</h1>
        <br>
	<canvas id="exosuitSales" width="525" height="350" class="graph" >
	Your browser does not support the HTML canvas tag.
	</canvas>
    </div>
</div>
<!-- End of Row & Column -->
<br><br><br><br><br><br><br><br><br>
<?php 
        include "includes/footer.php"
    ?>
<script src="js/graph.js"></script>
</body>

</html>
