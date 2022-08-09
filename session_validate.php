<!-- validate the session -->
<?php
	try{
		if (session_status() === PHP_SESSION_NONE) {
			session_start();
		}
		 include 'db_connection.php';

		$userid=$_SESSION["ID"];
		$skey=$_SESSION["session_key"];

		


		$selectq="SELECT userID FROM fonInnov.tbl_userDetails WHERE userID = '$userid' AND sessionId='$skey'";
		$result=$conn->query($selectq);
		if ($result->num_rows===0){

			header("Location:index.php");
			exit();

		}
	}
	catch(Exception $e){
		header("Location:index.php");
		exit();
	}

?>