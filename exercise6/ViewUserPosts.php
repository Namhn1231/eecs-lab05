<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "n675n055", "nnguyen", "n675n055");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT user_id FROM Users";
$result = $mysqli->query($query)
echo "<select name='user_id'>";
while ($row = mysqli_fetch_array($result)) {
	echo "<option value='" . $row['user_id'] . "'>" . $row['user_id'] . "</option>";
}
echo "</select>";

/* close connection */
$mysqli->close();
?>
