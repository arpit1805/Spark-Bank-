
<?php
	$servername = "localhost";
	$username = "id16787729_arpit";
	$password = "WSE*lPf*ekk15SxNLpmW";
	$dbname = "id16787729_sparkx";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
