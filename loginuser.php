<?php

session_start();
include "koneksi.php";

$log = ("SELECT * FROM tb_user WHERE (nama = '" . $_POST['nama'] . "') and (password = '" . $_POST['password'] . "') ");
$login = mysqli_query($mysqli, $log);
$rowcount = mysqli_num_rows($login);
if ($rowcount == 1) {
    $row_user = mysqli_fetch_array($login);
    $_SESSION['nama'] = $row_user['nama'];
    $_SESSION['password'] = $row_user['password'];

    echo "<script>alert('Anda Berhasil Masuk');window.location.href='indexuser.php';</script>";
} else {
    echo "<script>alert('Anda Gagal Masuk');window.location.href='index.php';</script>";
}
