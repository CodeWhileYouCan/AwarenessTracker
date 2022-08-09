<!-- Page to display historical data -->

<html>
<head>


	<!-- CSS -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />


	<!-- JavaScript -->

	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

</head>
<body>
	<?php
include 'session_validate.php';

if (isset($_SESSION["ID"])){

	$userid =$_SESSION["ID"];
	

}

?>
	<div class="container">
		<div class="row">
			<div class="col-sm-10">

				<div class="row well">
					<div class="col-sm-10">
						<h2 class="text-center">Daily Awareness History</h2>
					</div>
					<div class="col-sm-2">
						<a href="signout.php"
						class="link-danger">Sign Out</a>

					</div>
					
				</div> 

				<!-- #Add custom filters in the server-side dataTable -->
				<div class="row well input-daterange ">

					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">


						<div class="col-sm-4">
							<label class="control-label">Start date</label>
							<input class="form-control datepicker" type="date" name="initial_date"  placeholder="yyyy-mm-dd" style="height: 40px;"/>
						</div>

						<div class="col-sm-4">
							<label class="control-label">End date</label>
							<input class="form-control datepicker" type="date" name="final_date"  placeholder="yyyy-mm-dd" style="height: 40px;"/>
						</div>

						<div class="col-sm-4">
							<button class="btn btn-success btn-block" type="submit" name="filter" id="filter" style="margin-top: 30px">
								<i class="fa fa-filter"></i> Search
							</button>
						</div>

					</form>

					<div class="col-sm-12 text-danger" id="error_log"></div>
				</div>

				<br/><br/>

				<?php




				if ($_SERVER["REQUEST_METHOD"] == "GET") {
					include "db_connection.php";
					include "get_data.php";
				}
				
				
				?>

				

			</div>
		</div>
	</div>

</body>

</html>