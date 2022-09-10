<?php
include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";
$stmt = mysqli_stmt_init($conn);
$sql = "select * from schueler";

mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "ss", $_SESSION["ID"], $tmp_KursID);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
echo $result
CloseCon($conn);
?>
