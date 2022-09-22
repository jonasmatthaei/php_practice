<?php
include('inc/db.php');
echo "Hello";
$sql = "INSERT INTO schueler (sacc_vorname, sacc_nachname, sacc_email, sacc_stufe)
VALUES ('John', 'Doe', 'john@example.com', '11')";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
