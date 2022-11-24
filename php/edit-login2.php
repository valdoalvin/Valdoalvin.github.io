<?php
    include 'koneksi-login.php';
    $id = $_GET['id'];
    $query = mysqli_query($conn, "select *from tabel_login where id=$id");
    $d = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Data</title>
        <link rel="stylesheet" href="../style/edit-login2.css">
    </head>
    <body>
        <center>
            <div class="box">
                <div class="login">
                    <form action="edit-login.php" method="post">
                        
                        <input type="hidden" value="<?= $id ?>" name="id-new">
                        <input type="text" placeholder="Username" name="usr-inp" value="<?= $d['usr'] ?>">
                        <input type="text" placeholder="Nama" name="nma-inp" value="<?= $d['nma'] ?>">
                        <input type="text" placeholder="Email" name="mail-inp" value="<?= $d['mail'] ?>">

                        <button>Submit</button>
                    </form>
                </div>
            </div>
        </center>
    </body>
    </html>