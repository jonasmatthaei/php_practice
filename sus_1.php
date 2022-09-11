<?php
// import section
include('inc/db.php');
session_start();
$sql = "SELECT sacc_stufe, sacc_UN from schueler GROUP BY sacc_stufe";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  $sacc_stufe = $row["sacc_stufe"];
  echo $sacc_stufe;
}


?>
