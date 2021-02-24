<?php
include "koneksi.php";
session_start();
if(isset($_SESSION['nama']))
$nama = $_SESSION['nama'];
if (isset($_POST['insertdata'])) {
	$id = $_POST['artikel_id'];
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];

$mysql = "INSERT INTO tb_artikel (id, nama, judul, isi) VALUES ('$id','$nama','$judul','$isi')";
$query_run = mysqli_query($mysqli, $mysql);
if($query_run){
	echo "<script>alert('Artikel telah ditambah');
window.location.href='artikel.php';
</script>";
}
};
mysqli_close($mysqli);
?>