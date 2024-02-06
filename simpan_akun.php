<?php

$nama               = $_POST['nama'];
$tgl              = $_POST['tgl'];
$alamat       = $_POST['alamat'];
$username             = $_POST['username'];
$password            = $_POST['password'];



include 'koneksi.php';
$sql = "INSERT INTO tbakun (nama, tgl, alamat, username, password) values ('$nama','$tgl','$alamat','$username','$password')";

$query = mysqli_query ($koneksi, $sql);
if ($query){
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Disimpan');
        window.location='index1.php';
        </script>
        <?php
}
?>