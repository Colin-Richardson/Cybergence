<?php
	require "includes/header.php";
?>
  <div class="signup__container">
    <div class="container__child signup__thumbnail">
      <div class="thumbnail__content text-center"><br><br><br><br>
        <h1 class="display-5 signuph1"> <span class="transparent">sss</span> Administration</h1><br>
        <h2 class="display-7 signuph2"><span class="transparent">ssss</span>Login for admin</h2><br><br><br><br><br>
      </div>
      <div class="signup__overlay"></div>
    </div>
    <div class="container__child signup__form">
      <form action="includes/login.inc.php" method="post">
	<input type="hidden" name="redirect" value="<?php echo (isset($_GET['rdr'])) ? $_GET['rdr'] : '';?>" />
        <div class="form-group">
          <label class="signuplabel" for="username">Username</label>
          <input class="form-control" type="text" name="uid" id="username" placeholder="email/username" required />
		</div>
		<br>
        <div class="form-group">
          <label class="signuplabel" for="password">Password</label>
          <input class="form-control" type="password" name="pwd" id="password" placeholder="********" required />
        </div>
        <br>
        <div class="m-t-lg">
          <ul class="list-inline">
            <li>
              <input class="btn btn--form" type="submit" name="login-submit" value="Log in" />
			</li>
			<br>
          </ul>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
