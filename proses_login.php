<?php

$username             = $_POST['username'];
$password            = $_POST['password'];



include 'koneksi.php';
$sql = "SELECT * FROM tbakun
WHERE username = '$username' AND password = '$password'";

$result = mysqli_query ($koneksi, $sql);
if (mysqli_num_rows($result) > 0){
    ?>
    <script type="text/javascript">
        alert ('Login Sukses');
        window.location='home.php';
        </script>
        <?php
}else {
    ?>
    <script type="text/javascript">
        alert ('Username atau Passowrd Salah');
        window.location='index1.php';
        </script>
        <?php
}
?>