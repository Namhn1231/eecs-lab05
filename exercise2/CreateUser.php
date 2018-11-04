<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "n675n055", "nnguyen", "n675n055");
$username = $_POST["username"];

if((!isset($username))){
  printf ("Username left blank");
  exit();
}
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "INSERT INTO Users (user_id) VALUES ('" . $username . "');";

if ($result = $mysqli->query($query)) {
    echo "Username has been successfully added<br>";
    $result->free();
} else{
    echo "Username has <b>NOT</b> been successfully added<br>";
}

/* close connection */
$mysqli->close();
?>
