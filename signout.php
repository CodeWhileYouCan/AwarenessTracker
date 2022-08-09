<!-- remove all session variables and sign out the user -->
<?php

//echo $_SESSION["session_key"];

if (session_status() === PHP_SESSION_NONE) {
			session_start();
}

session_destroy ();

header("Location:index.php");
exit();

?>