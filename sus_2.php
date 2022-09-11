<?php
// import section
include('inc/db.php');
session_start();
$sql = "SELECT * FROM `schueler` WHERE sacc_stufe = 12;";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  $sacc_stufe = $row["sacc_stufe"];
  echo $sacc_stufe;
}


?>
