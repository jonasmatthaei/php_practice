<?php
// import section
include('inc/db.php');
session_start();
//sql query
$sql = "SELECT * FROM schueler";
//whole query
$result = mysqli_query($conn, $sql);
print_r($result);
// slicing on fields
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
// picking column
print_r($row["sacc_email"]);

?>
