<?php
$mysqli = new mysqli("database_URL", "n675n055", "NewPass", "n675n055");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT user_id FROM User ORDER by ID DESC LIMIT 50,5";

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        printf ("%s (%s)\n", $row["user_id"],);
    }

    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();
?>

