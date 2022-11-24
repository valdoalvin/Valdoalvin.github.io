<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Database</title>
        <link rel="stylesheet" href="../style/tampil-login.css">
    </head>
    <body style="margin: 50px;">

        <h1></h1>
        <button><A href="../index2.html">Back to home</a><BR></button>
        <br>
        <form action="tampil.php" method="GET" class="cari">
            <input type="text" name="cari" placeholder="Cari Sesuai Nama">
            <input type="submit" value="Cari">
        </form>
<?php 
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    echo "<b>Hasil pencarian : ".$cari."</b>";	
}
?>
        <table class="tablelogin" border='1'>
                <thead>
                    <tr style=" height: 50px">
                        <th colspan="6">DATA YANG MASUK</th>
                    </tr>
                    <tr style=" height: 35px;">
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th colspan="2">Opsi</th>
                    </tr>
                </thead>
            <tbody>
<?php
include 'koneksi-login.php';

    if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($conn, "SELECT *FROM tabel_login WHERE nama='".$cari."'");				
	}else{
		$data = mysqli_query($conn, "SELECT *FROM tabel_login");		
	}
        $no = 1;
//$data = mysqli_query($conn, "select *from usr");
    while($d = mysqli_fetch_array($data)) {
?>
                <tr style=" height: 30px; ">
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['usr'] ?></td>
                    <td><?php echo $d['nma'] ?></td>
                    <td><?php echo $d['mail'] ?></td>
                    <td style=" text-align: center;"><a href="edit-login2.php?id=<?php echo $d['id']; ?>">Edit</a></td>
                    <td style=" text-align: center;"><a href="hapus-login.php?id=<?php echo $d['id']; ?>">Hapus</a></td>
                </tr>
<?php
}
?>
            </tbody>
        </table>
    </body>
</html>