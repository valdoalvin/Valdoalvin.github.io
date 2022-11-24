<?php 
include 'koneksi-login.php';
$id = $_GET['id'];

$sql = "DELETE FROM tabel_login WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
           header("location:tampil-login.php?pesan=hapus");   
      } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>