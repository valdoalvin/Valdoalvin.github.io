<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Database</title>
        <link rel="stylesheet" href="../style/tampil-komen.css">
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
                        <th colspan="5">KOMEN YANG MASUK</th>
                    </tr>
                    <tr style=" height: 35px;">
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Nmber</th>
                        <th>Komen</th>
                    </tr>
                </thead>
            <tbody>
<?php
include 'koneksi-komen.php';

    if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($conn, "SELECT *FROM tbl_komen WHERE nama='".$cari."'");				
	}else{
		$data = mysqli_query($conn, "SELECT *FROM tbl_komen");		
	}
        $no = 1;
//$data = mysqli_query($conn, "select *from usr");
    while($d = mysqli_fetch_array($data)) {
?>
                <tr style=" height: 30px; ">
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nma'] ?></td>
                    <td><?php echo $d['mail'] ?></td>
                    <td><?php echo $d['phon'] ?></td>
                    <td><?php echo $d['msag'] ?></td>
                </tr>
<?php
}
?>
            </tbody>
        </table>
    </body>
</html>