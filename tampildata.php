<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'koneksi.php';
$users = read("SELECT * FROM tbl_user");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan LSP</title>
</head>

<body>
    <h1>Latihan LSP</h1>
    <button><a href="registrasi.php">REGISTRASI</a> </button>

    <table border="1" cellpadding="10" cellspacing="0" class="table table-striped">

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
            <th>Update</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($users as $us) : ?>

            <tr>
                <td><?= $i; ?></td>


                <td><?= $us["nama"] ?></td>
                <td><?= $us["email"] ?></td>
                <td><?= $us["username"] ?></td>
                <td><?= $us["password"] ?></td>

                <td>
                    <a href="hapus.php?id=<?= $us["id"]; ?>" style="text-decoration:none" onclick="return confirm('yakin?');">Hapus</a> |
                    <a href="ubah.php ?id=<?= $us["id"]; ?>" style="text-decoration:none">Ubah</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>
    <button><a href="logout.php">Logout</a></button>
</body>

</html>