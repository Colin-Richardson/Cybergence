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
      <h2 class="logmodaltit">Login to order</h2>
    </div>
    <div class="modal-body"><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <div class="login-box">
        <form>
          <a href="login.php?rdr=<?php echo  str_replace("/~mahs_mthornton/", "", $_SERVER['REQUEST_URI']);?>">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              Login
            </a>
          <a href="signup.php?rdr=<?php echo  str_replace("/~mahs_mthornton/", "", $_SERVER['REQUEST_URI']);?>">Sign Up</a>
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
  btn.onclick = function () {
    modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>
<br><br><br><br>