<?php
	session_start();
?>

<h1>signup</h1>
<form action="includes/contact.inc.php" method="post">
	<textarea type="text" name="msg" placeholder="message"></textarea>
	<button type="submit" name="contact-submit">Signup</button>
</form>
