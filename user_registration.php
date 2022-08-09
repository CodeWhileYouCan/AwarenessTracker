<!-- user registration validation -->
<?php

$fName= $_POST['fname'];
$lName=$_POST['lname'];
$pwd =$_POST['pswrd'];
$email =$_POST['email'];
$phoneNo =$_POST['phone'];
$cpwd=$_POST['cpswrd'];

/*Compare passwords*/
if (strcmp($pwd, $cpwd) !== 0){
	echo 'pwd: ' . $pwd . '  cpwd: ' . $cpwd;
	$isError = true;
	$errorMsg = "</br>	<div class=\"alert alert-danger\" role=\"alert\">
	Passwords do not match! 
	</div>";

}
else{ 

	/*Check for duplicates, if no duplicates, then insert the user to the db*/
	$selectq="SELECT email FROM fonInnov.tbl_userDetails WHERE email = '$email'";
	$result=$conn->query($selectq);
	if ($result->num_rows === 0) {
		$sql = "INSERT INTO fonInnov.tbl_userDetails (
			fName, 
			lName, 
			pwd,
			email,
			phoneNo
			)
		VALUES (
			'$fName',
			'$lName',
			'$pwd',
			'$email',
			'$phoneNo'
		)";
		if ($conn->query($sql) === TRUE) {
			header("Location:index.php");
		} 
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

	}else{
		$isError = true;
		$errorMsg = "</br>	<div class=\"alert alert-danger\" role=\"alert\">
		User already exists! 
		<a href=\"index.php\" class=\"link-danger\">Please login</a>
		</div>";
	}


}









?>