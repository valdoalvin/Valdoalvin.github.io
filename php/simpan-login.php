<?php
$usrname = $_POST['usr-inp'];
$nma = $_POST['nma-inp'];
$mail = $_POST['mail-inp'];

include 'koneksi-login.php';
$sql = "INSERT INTO tabel_login (usr, nma, mail) VALUES ('$usrname', '$nma', '$mail')";

if (mysqli_query($conn, $sql)) {
      header("location:../index2.html");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>