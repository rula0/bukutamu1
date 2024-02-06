<?php 
include 'koneksi.php';
$id=$_GET['id'];

$sql = "DELETE FROM tbakun where no='$id'";
$query = mysqli_query($koneksi, $sql);

if ($query){
	?>
	<script type="text/javascript">
		alert ('Data berhasil Dihapus');
		window.location='lihat_akun.php';
	</script>
	<?php
}
 ?>

