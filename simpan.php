<?php

$nama               = $_POST['nama'];
$nuptk              = $_POST['nuptk'];
$jeniskelamin       = $_POST['jeniskelamin'];
$tempat             = $_POST['tempat'];
$tanggal            = $_POST['tanggal'];
$gelar              = $_POST['gelar'];
$skawal             = $_POST['skawal'];
$tmt                = $_POST['tmt'];
$jabatan            = $_POST['jabatan'];
$progstudi          = $_POST['progstudi'];


include 'koneksi.php';
$sql = "INSERT INTO tbguru (nama, nuptk, jeniskelamin, tempat, tanggal, gelar, skawal, tmt, jabatan, progstudi) values ('$nama','$nuptk','$jeniskelamin','$tempat','$tanggal','$gelar','$skawal','$tmt','$jabatan','$progstudi')";

$query = mysqli_query ($koneksi, $sql);
if ($query){
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Disimpan');
        window.location='lihat_guru.php';
        </script>
        <?php
}
?>