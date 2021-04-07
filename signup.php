<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content="Home, Index, Cybergence, Augmentation, Implant, Cyber" />
  <meta name="description" content="Cybergence: Where Humans and Tech Meet" />
  <meta name="author" content="Colin Richardson, Matthew Thornton, and Vincent Zhu" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!-- Base Stylesheet -->
  <link rel="stylesheet" href="styles.css">
  <!-- Icon -->
  <link rel="icon" href="img/favicon.png" type="image/x-icon">
  <!-- Title -->
  <title>Sign Up</title>
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg" id="navbar">
    <a class="navbar-brand" href="shop.php"><img class="logo" src="img/favicon.png" alt="Cybergence"></a>
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