<?php
#!/usr/bin/php
$connection = mysqli_connect('localhost','root','root');
mysqli_select_db($connection,'Lucy');

$tolerance = 3; //default

$query = "SELECT * FROM Variables";
$result = mysqli_query($connection,$query);
while($row = mysqli_fetch_array($result)) {	// very poor way to grab value
	$tolerance=$row['accept_response_tolerance'];	//set tolerance to grabbed value
}

$query = "UPDATE Accepted_Responses SET Accepted=1 WHERE value > $tolerance";
$result = mysqli_query($connection,$query);

mysqli_close($connection); //Make sure to close out the database connection
?>
