<?php
session_start();
unset($_SESSION['email']);
session_destroy();
echo "<script>alert('anda berhasil keluar');window.location.href='index.php';</script>";
mysql_close();
