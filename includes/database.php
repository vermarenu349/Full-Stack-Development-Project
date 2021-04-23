<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

	//define parameters
	$host = "localhost";
//	$port="";
	$login = "phpuser";
	$password="prutor";
	$database = "prutor";
	$tblMovies = "movies";
	$tblUsers = "users";
	$tblReviews = "reviews";
  
	//Connect to the mysql server
	$conn = new mysqli("$host", "$login", "$password","$database");


	//Handle connection errors 
	if ($conn->connect_errno) {
	 $errno = mysqli_connect_errno();
	 $errmsg = mysqli_connect_error();
	    die("Connect Failed with:($errno)$errmsg<br/>\n");
	} 

?>