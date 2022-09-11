<?php
// import section
include('inc/db.php');
session_start();
$sql = "SELECT * from schueler";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  $sacc_email = $row["sacc_email"];
  $sacc_UN = $row["sacc_UN"];
  $sacc_stufe = $row["sacc_stufe"];
  echo $sacc_email;
  echo $sacc_UN;
  echo $sacc_stufe;
}


?>
