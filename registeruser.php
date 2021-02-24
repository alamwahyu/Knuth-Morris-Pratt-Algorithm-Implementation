<?php
require "koneksi.php";

$mysql = "INSERT INTO tb_user
(nama, email, password) VALUES
('$_POST[nama]','$_POST[email]', '$_POST[password]')";

if (!mysqli_query($mysqli, $mysql))
    die(mysqli_error($mysqli));

echo "<script>alert('Selamat, anda telah terdaftar');
window.location.href='index.php';
</script>";

mysqli_close($mysqli);
