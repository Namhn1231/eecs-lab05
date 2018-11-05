<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "n675n055", "nnguyen", "n675n055");
$username = $_POST["username"];
$post = $_POST["post"];

if((!isset($username))){
  printf ("Username left blank");
  exit();
}
if((!isset($post))){
  printf ("Post left blank");
  exit();
}
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "INSERT INTO Posts(content, author_id) VALUES ('" . $post . "', '" . $username . "');";

if ($result = $mysqli->query($query)) {
    echo "Post has been successfully added<br>";
    $result->free();
} else{
    echo "Post has <b>NOT</b> been successfully added<br>";
}

/* close connection */
$mysqli->close();
?>
