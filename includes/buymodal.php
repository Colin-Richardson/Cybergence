<h1 class="display-5 exobuytit">Join the movement and contribute to the progression of humanity</h1>
<div class="buybutton">
    <button id="myBtn" class="button1">Buy Now</button>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2 class="buymodaltit">Cybergence</h2>
    </div>
    <div class="modal-body">
	<div id="paymentStepOne">
      <p>Please enter your Bitcoin Address:</p>
      <br><br><br><br><br><br><br>
      <div class="login-box">
        <form  >
        <div class="form-group">
          <label class="bitsignuplabel">Bitcoin Address</label>
          <input class="form-control" id="btc-address" type="text" name="address" value="" placeholder="bc1qqacey0cz65wumy0xtyzzm80dd8f25h2tpsm8h6" required />
	  <input type="hidden" name="user" value="<?php echo $_SESSION['userId']; ?>" />
	<p id="paymentError" style="color:red;"></p>
		    </div>
	  <button class="btcbuybutton" type="button" onclick="submitInfo()" >
          <a >
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              Buy
            </a>
            </button>
        </form></div>
      </div>
	<div id="paymentStepTwo" style="display:none;overflow-wrap: break-word;">
		<img src="http://datadev.devcatalyst.com/~mahs_mthornton/img/paymentQR.png">
		<small style="color:#03e9f4;">bc1qqacey0cz65wumy0xtyzzm80dd8f25h2tpsm8h6</small></br>
		<p  id="paymentMessage"></p>
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
<script>
//payment info stuff
main();
function main()
{
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			let data = JSON.parse(this.responseText);
			if (data[0] == "success")
			{
				paymentStepTwo(data[1]);
			}
		}
	};
	xhttp.open("POST", "includes/checkPaymentInfo.inc.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("user=<?php echo $_SESSION['userId']?>");
}
function submitInfo()
{
	let user = <?php echo $_SESSION['userId']; ?>;
	let address = document.getElementById("btc-address").value;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			let data = this.responseText;
			if (data == "success")
			{
				document.getElementById("paymentError").innerHTML = ""; 
				paymentStepTwo(address);
			} else
			{
				document.getElementById("paymentError").innerHTML = data;
			}
		}
	};
	xhttp.open("POST", "includes/paymentInfo.inc.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("user="+user+"&address="+address);

}
function paymentStepTwo(address)
{
	document.getElementById("paymentStepOne").style.display = "none";
	document.getElementById("paymentStepTwo").style.display = "block";
	document.getElementById("paymentMessage").innerHTML = "Send FILLINBTC to this address using the address: <small style='color:#03e9f4;'>"+ address+"</small> to complete the transaction";

}
</script>
<br><br><br><br>
