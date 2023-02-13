<?php 


$servername = "localhost";			// Hostname
	$username = "root";					// Username
	$password = "";						// Password
	$dbname = "insta";	    // Database
	date_default_timezone_set('Asia/Kolkata');

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	mysqli_set_charset($conn, 'utf8');

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	} 




 

