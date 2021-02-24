<?php
include "koneksi.php";

if (isset($_POST['deletedata'])) {
	$id = $_POST['id'];

$mysql = "DELETE FROM tb_artikel WHERE id='$id'";
$query_run = mysqli_query($mysqli, $mysql);
};
if($query_run){
	echo "<script>alert('Artikel telah dihapus');
window.location.href='artikel.php';
</script>";
}
else{
	echo "<script>alert('Artikel gagal dihapus');
window.location.href='artikel.php';
</script>";
}

mysqli_close($mysqli);
?>