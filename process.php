<html>

<?php

function check($username) {
	$length = strlen($username);
	if ($length < 2) {
		echo "Please enter a username longer than 2 characters";
	} else { 
		echo "you got it!";
	}
}

function email($email) {
	$symbol = "@";
	if (strpos($email, $symbol) !== false) {
		echo "Yay!";
	} else {
		echo "This is not an email";
	}
}

function age($age) {
 $sep = substr($age, 0, 3);
 $year = (int)$sep;
 if ((2019-$year)<18) {
 echo "You're too young";
 } else {
 echo "Your're old Welcome";
 }
 }

function age($age) {
 $sep = substr($age, 0, 3);
 $year = (int)$sep;
 if ((2019-$year)<18) {
 echo "You're too young";
  } else {
  echo "Your're old Welcome";
  }
  }



check($_POST["username"]);
email($_POST["email"]);
age($_POST["birthday"]);
password($_POST["password"],$_POST["password2"]);

?>
<body>
</body>
</html>

