<!-- insert daily stats to db table -->
<?php
include 'session_validate.php';

if (isset($_SESSION["ID"])){


	echo "id". $_SESSION["ID"];
	$cw_hours= $_POST['hours'];
	$day_score=$_POST['score'];
	$note =$_POST['note'];
	$date =date("Y-m-d");
	$userid =$_SESSION["ID"];

	echo "userid". $_SESSION["ID"];



	/*Check records for the day, if found, update, if not, insert new record*/

	$selectq="SELECT * FROM fonInnov.tbl_dailystat WHERE edate = '$date' AND userID='$userid'";
	$result=$conn->query($selectq);
	if ($result->num_rows === 0) {
		$sql = "INSERT INTO fonInnov.tbl_dailystat (
			userID, 
			cw_hours, 
			day_score,
			note,
			edate
			)
		VALUES (
			'$userid',
			'$cw_hours',
			'$day_score',
			'$note',
			'$date'
		)";
		if ($conn->query($sql) === TRUE) {
			header("Location:stat_pg.php");
		} 
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

	}else{

		$updateq="UPDATE fonInnov.tbl_dailystat SET 
		cw_hours='$cw_hours', 
		day_score='$day_score', 
		note= '$note'
		WHERE edate='$date' AND userID='$userid'";
		if ($conn->query($updateq) === TRUE) {
			header("Location:stat_pg.php");
		} 
		else {
			echo "Error: " . $updateq . "<br>" . $conn->error;
		}



	}
}







?>