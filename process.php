<html>

<?php

function check($username) {
	$length = strlen($username);
	if ($length < 2) {
		echo "Please enter a username longer than 2 characters";
	} else {
		echo "You got it!";
	}
}

check($_POST["username"]);

?>
<body>
</body>
</html>

