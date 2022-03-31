<?php
$Nname = "Nname";
$email = "email";
$Mname = "Mname";
$Hname = "Hname";

// Create connection
$conn = new mysqli($Nname,
	$email, $Mname, $Hname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}

$sqlquery = "INSERT INTO form VALUES
	('Name', 'Email', 'Mobile','Hometown')"

 if($conn->query($sql) === TRUE) {
	echo "record inserted successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
