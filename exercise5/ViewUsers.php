<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "n675n055", "nnguyen", "n675n055");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

echo "Users currently existing:<br>";

$result = mysqli_query($mysqli, "SELECT user_id FROM Users");
while($row = mysqli_fetch_array($result))
{
	echo $row[user_id] . "<br>";
}

/* close connection */
$mysqli->close();
?>
