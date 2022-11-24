<?php
$name = $_POST['nma-inp'];
$email = $_POST['mail-inp'];
$phone = $_POST['phone-inp'];
$mssage = $_POST['msage-inp'];

include 'koneksi-komen.php';
$sql = "INSERT INTO tbl_komen (nma, mail,phon,msag) VALUES ('$name', '$email', '$phone', '$mssage')";

if (mysqli_query($conn, $sql)) {
      header("location:../index2.html");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>