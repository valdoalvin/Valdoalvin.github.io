<?php
$subsribe = $_POST['subs-inp'];

include 'koneksi-subs.php';
$sql = "INSERT INTO tbl_subs (subs) VALUES ('$subsribe')";

if (mysqli_query($conn, $sql)) {
      header("location:../index2.html");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>