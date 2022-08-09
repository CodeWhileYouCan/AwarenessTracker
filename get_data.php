<!-- retrive recorded daily stats from the db and display data in the history page -->
<?php

include 'session_validate.php';

if (isset($_SESSION["ID"]) && isset($_GET['initial_date']) && isset($_GET['final_date'])){

	$userid =$_SESSION["ID"];
	$inidate=$_GET['initial_date'];
	$endate=$_GET['final_date'];



	$idate=date("Y-m-d",strtotime($inidate));
	$edate=date("Y-m-d",strtotime($endate));
	$selectq="SELECT * FROM fonInnov.tbl_dailystat WHERE userID = '$userid' AND edate BETWEEN '$idate' AND '$edate'";
	$result=$conn->query($selectq);
	if ($result->num_rows > 0) {
		echo "<table id=\"fetch_results\" class=\"table table-hover table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
		<thead>
		<tr>

		<th>Date</th>
		<th>Creative work hours</th>
		<th>Quality of the day</th>
		<th>Note</th>

		</tr>
		</thead>";
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>" . $row['edate'] . "</td>";
			echo "<td>" . $row['cw_hours'] . "</td>";
			echo "<td>" . $row['day_score'] . "</td>";
			echo "<td>" . $row['note'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";


	}else{
		echo "0 results";
	}





}






?>