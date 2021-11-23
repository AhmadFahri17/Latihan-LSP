<?php
require 'koneksi.php';


$id = $_GET["id"];

$user = read("SELECT * FROM tbl_user WHERE id = $id")[0];


if (isset($_POST["submit"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah($_POST)  > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'tampildata.php';
            </script>
        ";
    } else {
        echo "
    <script>
        alert('data gagal diubah!');
        document.location.href = 'tampildata.php';
    </script>
";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah Data user</title>
</head>

<body>
    <h1>Ubah data user</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $user["id"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $user["nama"]; ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required value="<?= $user["email"]; ?>">
            </li>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username" required value="<?= $user["username"]; ?>">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="text" name="password" id="email" value="<?= $user["password"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>

    </form>



</body>

</html>