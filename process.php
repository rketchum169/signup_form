<html>

<?php

	$username = $_POST["username"];
	$email = $_POST["email"];
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$password = $_POST["password"];
	$password2 = $_POST["password2"];
	$bday = $_POST["birthday"];

function check() {
	$length = (int)$username;
	if ($length <= 2) {
		echo "Please enter a username longer than 2 characters";
	} else {
		echo "You got it!";
	}
}

check();

?>
<body>
</body>
</html>

