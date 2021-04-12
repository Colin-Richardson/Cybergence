<h1 class="display-5 exobuytit">Join the movement and contribute to the progression of humanity</h1>
<div class="buybutton">
    <button id="myBtn" onclick="on()" class="button1">Buy Now</button>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2 class="logmodaltit">Create an account to order</h2>
    </div>
    <div class="modal-body"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <div class="login-box">
  <form action="includes/signup.inc.php" method="post">
    <div class="user-box">
      <input type="text" name="uid" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="text" name="mail" required="">
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="password" name="pwd" required="">
      <label>Password</label>
    </div>
    <div class="user-box">
      <input type="password" name="pwd-repeat" required="">
      <label>Confirm Password</label>
    </div>
    <button class="loginbutton" type="submit" name="signup-submit">
    <a href="">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Sign Up
    </a>
    </button>
    <p> <br> If you already have an account <a href="login.php?rdr=<?php echo  str_replace("/~mahs_mthornton/", "", $_SERVER['REQUEST_URI']);?>">Login</a></p>
  </form>
</div>
    </div>

  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<br><br><br><br>
