<?php
include "koneksi.php";

if (isset($_POST['updatedata'])) {
	$id = $_POST['update_id'];
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];

$mysql = "UPDATE tb_artikel SET judul='$judul', isi='$isi' WHERE id='$id'";
mysqli_query($mysqli, $mysql);
if (!mysqli_query($mysqli, $mysql))
    die(mysqli_error($mysqli));

echo "<script>alert('Artikel telah diubah');
window.location.href='artikel.php';
</script>";

mysqli_close($mysqli);
};
?>