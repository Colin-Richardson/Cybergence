<?php
        require "includes/header.php";
?>
<body>
<?php
        require "includes/shopnav.php";
?>
  <div class="signup__container">
    <div class="container__child signup__thumbnail">
      <div class="thumbnail__content text-center"><br><br><br><br>
        <h1 class="display-5 signuph1">Cybergence</h1><br>
        <h2 class="display-7 signuph2">Join the progression of humanity</h2><br><br><br><br><br>
      </div>
      <div class="signup__overlay"></div>
    </div>
    <div class="container__child signup__form">
      <form action="includes/signup.inc.php" method="post">
        <div class="form-group">
          <label class="signuplabel" for="username">Username</label>
          <input class="form-control" type="text" name="uid" id="username" placeholder="username" required />
        </div>
        <div class="form-group">
          <label class="signuplabel" for="email">Email</label>
          <input class="form-control" type="text" name="mail" id="email" placeholder="username@cybergence.com"
            required />
        </div>
        <div class="form-group">
          <label class="signuplabel" for="password">Password</label>
          <input class="form-control" type="password" name="pwd" id="password" placeholder="********" required />
        </div>
        <div class="form-group">
          <label class="signuplabel" for="passwordRepeat">Repeat Password</label>
          <input class="form-control" type="password" name="pwd-repeat" id="passwordRepeat" placeholder="********"
            required />
        </div>
        <br>
        <div class="m-t-lg">
          <ul class="list-inline">
            <li>
              <input class="btn btn--form" type="submit" name="signup-submit" value="Register" />
            </li>
            <li>
              <a class="signup__link signupa" href="login.php">I have an account</a>
            </li>
          </ul>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
