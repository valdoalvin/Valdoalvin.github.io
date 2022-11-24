<?php 
include 'koneksi-login.php';
$usrn = $_POST['usr-inp'];
$nama = $_POST['nma-inp'];
$email = $_POST['mail-inp'];

$sql = "UPDATE tabel_login SET id='$id' , usr='$usrn', nma='$nama', mail='$email' where id='$id'";
if (mysqli_query($conn, $sql)) {
           header("location:tampil-login.php?pesan=edit");   
      } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>